<?php
/*
Gibbon: the flexible, open school platform
Founded by Ross Parker at ICHK Secondary. Built by Ross Parker, Sandra Kuipers and the Gibbon community (https://gibbonedu.org/about/)
Copyright © 2010, Gibbon Foundation
Gibbon™, Gibbon Education Ltd. (Hong Kong)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Gibbon\Services\Payment;

use Omnipay\Omnipay;
use Omnipay\Common\AbstractGateway as OmnipayGateway;
use Omnipay\PayPal\ProGateway as OmnipayPaypalProGateway;
use Omnipay\Flutterwave\AbstractGateway as OmnipayFlutterwaveGateway;
use Omnipay\Common\Message\RedirectResponseInterface as OmnipayRedirectResponse;
use Gibbon\Contracts\Services\Session;
use Gibbon\Domain\System\SettingGateway;
use Gibbon\Domain\Finance\PaymentGateway;
use Gibbon\Contracts\Services\Payment as PaymentInterface;

/**
 * @version v23
 * @since   v23
 */
class Payment implements PaymentInterface
{
    protected $session;
    protected $paymentsEnabled;
    protected $paymentGatewaySetting;
    protected $paymentGateway;
    protected $settingGateway;
    protected $omnipay;
    protected $currency;
    protected $result = [];
    protected $returnURL;
    protected $cancelURL;
    protected $foreignTable;
    protected $foreignTableID;
    protected $testMode = false;

    public function __construct(Session $session, SettingGateway $settingGateway, PaymentGateway $paymentGateway)
    {
        $this->session = $session;
        $this->settingGateway = $settingGateway;
        $this->paymentGateway = $paymentGateway;

        $this->paymentsEnabled = $settingGateway->getSettingByScope('System', 'enablePayments');
        $this->paymentGatewaySetting = $settingGateway->getSettingByScope('System', 'paymentGateway');
        $this->currency = $settingGateway->getSettingByScope('System', 'currency');
        $this->currency = substr($this->currency, 0, 3);
    }

    public function isEnabled()
    {
        return $this->paymentsEnabled == 'Y';
    }

    public function setReturnURL($url)
    {
        $this->returnURL = str_replace(' ', '%20', $url);
    }

    public function setCancelURL($url)
    {
        $this->cancelURL = str_replace(' ', '%20', $url);
    }

    public function setForeignTable($foreignTable, $foreignTableID)
    {
        $this->foreignTable = $foreignTable;
        $this->foreignTableID = $foreignTableID;
    }

    public function incomingPayment() : bool
    {
        return !empty($_REQUEST['paymentState']);
    }

    public function requestPayment($amount, $reason = 'Purchase') : string
    {
        if (!$this->isEnabled()) {
            return self::RETURN_ERROR_NOT_ENABLED;
        }

        $configured = $this->setupPaymentGateway();

        if (!$configured) {
            return self::RETURN_ERROR_CONFIG;
        }

        if (empty($amount)) {
            return self::RETURN_ERROR_AMOUNT;
        }

        // Send purchase request to the payment gateway
        $options = $this->getPaymentRequestOptions($amount, $reason);
        $response = $this->omnipay->purchase($options)->send();

        if ($response->isSuccessful()) {
            // Payment request was successful, continue redirect
            $responseData = $response->getData();
            header("Location: " . $responseData['link']);
            exit;

        } elseif ($response->isRedirect()) {
            // Redirect to offsite payment gateway
            $response->redirect();

        } elseif (stripos($response->getMessage(), 'currency') !== false) {
            // Payment not possible
            return self::RETURN_ERROR_CURRENCY;
        }
        // Payment failed
        error_log('Payment Gateway Failed: '.$this->paymentGatewaySetting.' - '.$response->getMessage());
        return self::RETURN_ERROR_CONNECT;
    }

    public function confirmPayment() : string
    {
        $configured = $this->setupPaymentGateway();
        if (!$configured) {
            return self::RETURN_ERROR_CONFIG;
        }

        $paymentState = $_REQUEST['paymentState'] ?? '';
        if ($paymentState == 'cancel') {
            $this->result['status'] = 'Cancelled';
            return self::RETURN_CANCEL;
        }

        $amount = $_GET['amount'] ?? '';
        if (empty($amount)) {
            $this->result['status'] = 'Failed';
            return self::RETURN_ERROR_AMOUNT;
        }

        // Contact the payment gateway and confirm this transaction
        $response = $this->getPaymentConfirmation($amount);

        if (empty($response)) {
            $this->result['status'] = 'Failed';
            return self::RETURN_ERROR_CONNECT;
        }

        // Complete the transaction and store the result in gibbonPayment
        $this->result = $this->handlePaymentResponse($response);

        if ($this->result['status'] == 'Failed') {
            return self::RETURN_ERROR_GENERAL;
        } elseif (empty($this->result['gibbonPaymentID'])) {
            return self::RETURN_SUCCESS_WARNING;
        } else {
            return self::RETURN_SUCCESS;
        }
    }

    public function getPaymentResult() : array
    {
        return $this->result;
    }

    protected function setupPaymentGateway()
    {
        if (!$this->isEnabled()) {
            return false;
        }

        if (empty($this->returnURL) || empty($this->cancelURL)) {
            return false;
        }

        if (empty($this->foreignTable) || empty($this->foreignTableID)) {
            return false;
        }

        if (!empty($this->omnipay)) {
            return true;
        }

        // Setup the Omnipay payment gateway based on Third Party Settings
        switch ($this->paymentGatewaySetting) {
            case 'PayPal':
                $this->omnipay = Omnipay::create('PayPal_Express');
                $this->omnipay->setUsername($this->settingGateway->getSettingByScope('System', 'paymentAPIUsername'));
                $this->omnipay->setPassword($this->settingGateway->getSettingByScope('System', 'paymentAPIPassword'));
                $this->omnipay->setSignature($this->settingGateway->getSettingByScope('System', 'paymentAPISignature'));
                $this->omnipay->setParameter('locale_code', $this->session->get('i18n')['code'] ?? 'en_GB');
                break;

            case 'Flutterwave':
                $this->omnipay = Omnipay::create('Flutterwave');
                $this->omnipay->setApiKey('FLWPUBK-00c21af36bd92d40d6599b82b2087fea-X'); // Provided Public Key
                $this->omnipay->setSecretKey($this->settingGateway->getSettingByScope('System', 'paymentSecretKey'));
                $this->omnipay->setTestMode($this->testMode);
                break;
        }

        return !empty($this->omnipay);
    }

    protected function getPaymentRequestOptions($amount, $reason)
    {
        $options = [];
        $params = [
            'amount' => $amount,
            'reason' => $reason,
        ];

        switch ($this->paymentGatewaySetting) {
            case 'PayPal':
                $options = [
                    'amount' => $amount,
                    'returnUrl' => $this->returnURL.'&paymentState=confirm&'.http_build_query($params),
                    'cancelUrl' => $this->cancelURL.'&paymentState=cancel',
                    'testMode' => $this->testMode,
                ];
                break;

            case 'Flutterwave':
                $options = [
                    'amount' => $amount,
                    'currency' => $this->currency,
                    'payment_method' => 'card',
                    'redirect_url' => $this->returnURL.'&paymentState=confirm&token={transaction_id}&'.http_build_query($params),
                    'tx_ref' => uniqid().time(),
                    'customer' => [
                        'email' => $this->session->get('email'),
                        'name' => $this->session->get('logged'),
                        'phone_number' => $this->session->get('phone'),
                    ],
                    'customizations' => [
                        'title' => "Payment for $reason",
                        'description' => "Payment for $reason",
                        'logo' => '', // Your logo URL
                    ],
                ];
                break;
        }

        return $options;
    }

    protected function getPaymentConfirmation($amount)
    {
        $transactionId = $_GET['transaction_id'] ?? '';

        if (empty($transactionId)) {
            return false;
        }

        $response = false;

        switch ($this->paymentGatewaySetting) {
            case 'PayPal':
                $options = $this->getPaymentRequestOptions($amount, $_GET['reason'] ?? '');
                $response = $this->omnipay->completePurchase($options + [
                    'amount' => $amount,
                    'currency' => $this->currency,
                    'token' => $transactionId,
                    'payerid' => $_GET['PayerID'] ?? '',
                ])->send();
                break;

            case 'Flutterwave':
                $response = $this->omnipay->verifyTransaction([
                    'transaction_id' => $transactionId,
                ])->send();
                break;
        }

        return $response;
    }

    protected function handlePaymentResponse($response)
    {
        if (empty($response)) {
            return ['success' => false, 'status' => 'Failed'];
        }

        $data = $response->getData();
        $result = [
            'success' => $response->isSuccessful(),
            'code'    => $response->getCode(),
            'message' => $response->getMessage(),
            'token'   => $_GET['token'] ?? null,
        ];

        switch ($this->paymentGatewaySetting) {
            case 'PayPal':
                $status = $data['PAYMENTINFO_0_PAYMENTSTATUS'] ?? '';
                $result += [
                    'status'        => $status == 'Completed' ? 'Complete' : ($response->isPending()? 'Pending' : 'Failed'),
                    'transactionID' => $data['PAYMENTINFO_0_TRANSACTIONID'] ?? null,
                    'receiptID'     => $data['PAYMENTINFO_0_RECEIPTID'] ?? null,
                    'amount'        => $data['PAYMENTINFO_0_AMT'] ?? 0,
                    'payer'         => $_GET['PayerID'] ?? null,
                ];

                break;

            case 'Flutterwave':
                $status = $data['status'] ?? '';
                $result += [
                    'status'        => $status == 'successful' ? 'Complete' : ($response->isPending()? 'Pending' : 'Failed'),
                    'transactionID' => $data['id'] ?? null,
                    'receiptID'     => null,
                    'amount'        => !empty($data['amount']) ? ($data['amount']) : 0,
                    'payer'         => $data['customer']['email'] ?? null,
                ];

                break;
        }

        $result['gibbonPaymentID'] = $this->paymentGateway->insert([
            'foreignTable'            => $this->foreignTable,
            'foreignTableID'          => $this->foreignTableID,
            'gibbonPersonID'          => $this->session->get('gibbonPersonID'),
            'type'                    => 'Online',
            'status'                  => $result['status'],
            'amount'                  => $result['amount'],
            'gateway'                 => $this->paymentGatewaySetting,
            'onlineTransactionStatus' => $response->isSuccessful() ? 'Success' : 'Failure',
            'paymentToken'            => $result['token'],
            'paymentPayerID'          => $result['payer'],
            'paymentTransactionID'    => $result['transactionID'],
            'paymentReceiptID'        => $result['receiptID'],
            'timestamp'               => date('Y-m-d H:i:s'),
        ]);

        return $result;
    }

    public function getReturnMessages() : array
    {
        return [
            self::RETURN_SUCCESS           => __('Your payment has been successfully made to your credit card. A receipt has been emailed to you.'),
            self::RETURN_SUCCESS_WARNING   => sprintf(__('Your payment has been successfully made to your credit card, but there has been an error recording your payment in %1$s. Please print this screen and contact the school ASAP, quoting code %2$s.'), $this->session->get('systemName'), $this->foreignTableID),
            self::RETURN_CANCEL            => __('Your online payment was cancelled before it was completed. No charges have been processed.'),
            self::RETURN_INCOMPLETE        => __('Online payment has not been completed at this time.'),
            self::RETURN_ERROR_NOT_ENABLED => __('Online payment options are not available at this time.'),
            self::RETURN_ERROR_CURRENCY    => __("Your payment could not be made as the payment gateway does not support the system's currency."),
            self::RETURN_ERROR_CONFIG      => __('Your payment could not be processed due to a system configuration issue. Please contact the school before attempting another payment.'),
            self::RETURN_ERROR_AMOUNT      => __('Your payment failed due to an invalid payment amount. Please try again and if the error persists, contact the school.'),
            self::RETURN_ERROR_GENERAL     => __('Your payment could not be made to your credit card. Please try an alternative payment method.'),
            self::RETURN_ERROR_CONNECT     => __('The {gateway} payment service could not be reached. Please try again and if the error persists, contact the school.', ['gateway' => $this->paymentGatewaySetting]),
        ];
    }
}
