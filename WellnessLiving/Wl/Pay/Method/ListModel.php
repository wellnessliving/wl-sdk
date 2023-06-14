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
   *   <dt>string <var>s_title</var></dt>
   *   <dd>The payment method name.</dd>
   *   <dt>int <var>id_pay_method</var></dt>
   *   <dd>The payment method type ID. One of {@link WlPayMethodSid} constants.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_pay_method = [];

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