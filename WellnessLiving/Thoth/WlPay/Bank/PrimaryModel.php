<?php

namespace WellnessLiving\Thoth\WlPay\Bank;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Sets a payment method as default.
 *
 * @method WlModelRequest put() Sets a specified payment method as default.  Validates that the payment method exists, is not removed, not expired, and not already default, then verifies the acting user has access to the owning business or client profile before applying the change and logging it to the payment method history.
 */
class PrimaryModel extends WlModelAbstract
{
  /**
   * ID of pay bank.
   *
   * @put post
   * @var string
   */
  public $k_pay_bank;
}

?>