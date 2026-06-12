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
   * Each element has followed structure: 
   *
   * <dl>
   *   <dt>string `text_title`</dt>
   *   <dd>Total title.</dd>
   * 
   *   <dt>int `s_value`</dt>
   *   <dd>Total value.</dd>
   * </dl>
   * @get result
   * @var array[]
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