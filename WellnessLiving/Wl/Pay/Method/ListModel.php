<?php

namespace WellnessLiving\Wl\Pay\Method;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * An endpoint containing a model to get the list of payment methods.                                                        .
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of payment methods:
   *
   * @get result
   * @var array[]
   */
  public $a_pay_method;

  /**
   * Whether only active payment methods should be returned.
   *
   * @get get
   * @var bool
   */
  public $is_active = true;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Whether payment method {@link WlPayMethodSid::ACCOUNT_MANUAL} should be included in response.
   *
   * @get get
   * @var bool
   */
  public $show_manual = false;

  /**
   * The key of a user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>