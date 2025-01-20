<?php

namespace WellnessLiving\Wl\Schedule\Page;

use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of either previous or upcoming visits for a specific user.
 *
 * A visit can be for an appointment, class, or an event.
 */
class PageListModel extends WlModelAbstract
{
  /**
   * Elements of user's schedule. Every element has next keys:
   * <dl>
   *   <dt>string <var>k_business</var></dt>
   *   <dd>
   *     Key of the business in which this visit was made.
   *
   *   </dd>
   *   <dt>
   *     string <var>k_visit</var>
   *   </dt>
   *   <dd>
   *     Key of a book/visit.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_visit;

  /**
   * If the date is set, a list of services before this date will be returned.
   * The date and time is in UTC and in MySQL format.
   * If left as `null`, then a list of services that aren't limited to the end date will be returned.
   *
   * @get get
   * @var string|null
   */
  public $dtu_end = null;

  /**
   * If the date is set, a list of services after this date will be returned.
   * The date and time is in UTC and in MySQL format.
   * If left as `null`, then a list of services that aren't limited to the start date will be returned.
   *
   * @get get
   * @var string|null
   */
  public $dtu_start = null;

  /**
   * If `true`, then all the client previous visits will be retrieved.
   * If `false` or left as `null`, then all the client upcoming visits will be retrieved.
   *
   * @get get
   * @var bool
   */
  public $is_past = false;

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
   * @var string|null
   */
  public $uid = '0';
}

?>