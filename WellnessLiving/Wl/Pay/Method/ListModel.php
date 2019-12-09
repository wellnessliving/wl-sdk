<?php

namespace WellnessLiving\Wl\Pay\Method;

use WellnessLiving\WlModelAbstract;

/**
 * Model to get the list of payment methods.
 */
class ListModel extends WlModelAbstract
{
  /**
   * List of payment methods:
   * <dl>
   *   <dt>string <var>s_title</var></dt>
   *   <dd>Payment method name.</dd>
   *   <dt>int <var>id_pay_method</var></dt>
   *   <dd>Payment method type id. One of {@link WlPayMethodSid} constants.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_pay_method = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of a user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>