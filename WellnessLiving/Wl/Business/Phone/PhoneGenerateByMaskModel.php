<?php

namespace WellnessLiving\Wl\Business\Phone;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Return random phone number by mask.
 *
 * @method WlModelRequest get() Gets similar phone numbers, depended on number, which failed verification.
 */
class PhoneGenerateByMaskModel extends WlModelAbstract
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
   *   <dt>string `text_phone_formatted`</dt>
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
   * Phone area code mask to use when searching for possible phone numbers.
   *
   * @get get
   * @var string
   */
  public $text_area_code_mask = '';
}

?>