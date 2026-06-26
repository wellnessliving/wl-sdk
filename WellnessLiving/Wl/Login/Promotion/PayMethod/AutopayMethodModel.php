<?php

namespace WellnessLiving\Wl\Login\Promotion\PayMethod;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to change login promotion automatic payment method.
 *
 * @method WlModelRequest put() Changes login promotion automatic payment method.
 */
class AutopayMethodModel extends WlModelAbstract
{
  /**
   * `true` if Account payment method should be used, `false` - otherwise.
   *
   * @put post
   * @var bool
   */
  public $is_account = false;

  /**
   * `true` if Default payment method should be used, `false` - otherwise.
   *
   * @put post
   * @var bool
   */
  public $is_default = false;

  /**
   * Business key.
   *
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Login promotion key.
   *
   * @put get
   * @var string
   */
  public $k_login_promotion = '';

  /**
   * Card/ACH recurrent payment token. Empty when Default or Account payment method should be used.
   *
   * @put post
   * @var string|null
   */
  public $k_pay_recurrent = '';
}

?>