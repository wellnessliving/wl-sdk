<?php

namespace WellnessLiving\Thoth\WlPay\Bank;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Sets a payment method as default.
 *
 * @method WlModelRequest put() Sets a specified payment method as default.
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