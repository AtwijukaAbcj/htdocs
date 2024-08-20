<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Contentwarehouse;

class NlpSemanticParsingProtoActionsOnGoogleSlotValueSingleValue extends \Google\Model
{
  protected $dateTimeValueType = NlpSemanticParsingProtoActionsOnGoogleDateTime::class;
  protected $dateTimeValueDataType = '';
  /**
   * @var string
   */
  public $stringValue;
  protected $typeValueType = NlpSemanticParsingProtoActionsOnGoogleTypedValue::class;
  protected $typeValueDataType = '';

  /**
   * @param NlpSemanticParsingProtoActionsOnGoogleDateTime
   */
  public function setDateTimeValue(NlpSemanticParsingProtoActionsOnGoogleDateTime $dateTimeValue)
  {
    $this->dateTimeValue = $dateTimeValue;
  }
  /**
   * @return NlpSemanticParsingProtoActionsOnGoogleDateTime
   */
  public function getDateTimeValue()
  {
    return $this->dateTimeValue;
  }
  /**
   * @param string
   */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /**
   * @return string
   */
  public function getStringValue()
  {
    return $this->stringValue;
  }
  /**
   * @param NlpSemanticParsingProtoActionsOnGoogleTypedValue
   */
  public function setTypeValue(NlpSemanticParsingProtoActionsOnGoogleTypedValue $typeValue)
  {
    $this->typeValue = $typeValue;
  }
  /**
   * @return NlpSemanticParsingProtoActionsOnGoogleTypedValue
   */
  public function getTypeValue()
  {
    return $this->typeValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NlpSemanticParsingProtoActionsOnGoogleSlotValueSingleValue::class, 'Google_Service_Contentwarehouse_NlpSemanticParsingProtoActionsOnGoogleSlotValueSingleValue');
