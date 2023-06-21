<?php

namespace WellnessLiving\Wl\Pay\Method;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint containing a model to get the list of payment methods.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of payment methods:
   * <dl>
   *   <dt>
   *     int <var>id_pay_method</var>
   *   </dt>
   *   <dd>
   *     The payment method type ID. One of {@link \WellnessLiving\WlPayMethodSid} constants.
   *   </dd>
   *   <dt>
   *     string|null <var>k_pay_method</var>
   *   </dt>
   *   <dd>
   *     Payment method key. May be <tt>null</tt> if it is a system payment method.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     The payment method name.
   *   </dd>
   * </dl>
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
   * The key of a user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>