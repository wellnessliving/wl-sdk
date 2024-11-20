<?php

namespace WellnessLiving\Wl\Profile\Attendance\Schedule\Frontend;

use WellnessLiving\WlModelAbstract;

/**
 * Returns a list with totals of lifetime visits.
 */
class LifetimeTotalsModel extends WlModelAbstract
{
  /**
   * Report totals.
   *
   * A set of key-value pairs.
   *
   * @get result
   * @var array[] Each element has followed structure: <dl>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>Total title.</dd>
   *   <dt>int <var>s_value</var></dt>
   *   <dd>Total value.</dd>
   * </dl>
   */
  public $a_total = [];

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The user key.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>