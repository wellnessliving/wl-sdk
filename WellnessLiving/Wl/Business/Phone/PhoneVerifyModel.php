<?php

namespace WellnessLiving\Wl\Business\Phone;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages process of new phone verification.
 *
 * @method WlModelRequest get() Verifies that phone number is not registered in system yet.
 */
class PhoneVerifyModel extends WlModelAbstract
{
  /**
   * <tt>true</tt> if phone number is not registered in system yet.
   * <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_new_number;

  /**
   * Business key.
   * It is necessary to get business locale settings and normalize phone number.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Business phone number.
   *
   * @get get
   * @var string
   */
  public $text_phone;
}

?>