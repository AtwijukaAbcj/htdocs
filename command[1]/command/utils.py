import africastalking
from config import sanitize_sms
africastalking.initialize(
    username='hamzpay',
    api_key='9b5124ed72d622555ff3a26a9cdfbe56e38c766bc995730c5853549cac260bad'
)
sms = africastalking.SMS

def sms_send(message, phone):
    response = sms.send(message, [sanitize_sms(phone)])
    if response:
        return 'SMS sent'
    else:
        return 'SMS not sent'
