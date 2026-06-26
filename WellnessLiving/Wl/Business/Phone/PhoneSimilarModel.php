<?php

namespace WellnessLiving\Wl\Business\Phone;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * When business registers phone number, phone number must be verified first.
 * {@link PhoneVerifyModel} is used for it.
 *
 * In case phone number fails verification, few similar numbers should be suggested.
 * This API is used to get these similar phone numbers, depended on phone number which failed verification.
 *
 * @method WlModelRequest get() Gets similar phone numbers, depended on number, which failed verification.
 */
class PhoneSimilarModel extends WlModelAbstract
{
  /**
   * Array of phone numbers, which were got from provider.
   *
   * Structure of this array is: 
   *
   * <dl>
   *   <dt>string `text_phone`</dt>
   *   <dd>Phone number.</dd>
   * 
   *   <dt>string `text_phone_mask`</dt>
   *   <dd>Phone number with mask applied.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_phone = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Phone number, which was failed to verify.
   * Used to get similar phone numbers from provider.
   *
   * @get get
   * @var string
   */
  public $text_phone;
}

?>