<?php

namespace WellnessLiving\Wl\Profile\Attendance\Schedule\Frontend;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns a list with totals of lifetime visits.
 *
 * @method WlModelRequest get() Retrieves lifetime visit totals.  Returns aggregated lifetime attendance statistics for the specified user in the given  business. Used to display summary visit counts and related metrics on the client profile  schedule page.
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
   *   <dt>string `s_value`</dt>
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