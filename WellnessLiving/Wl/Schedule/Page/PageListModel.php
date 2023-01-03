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
   * A list of visits IDs. Each element is an array with the following element:
   * <ul><li>string <tt>k_visit</tt> the key of the book or visit.</li></ul>
   * The order of items in this array is the order in which elements should be shown.
   *
   * @get result
   * @var array
   */
  public $a_visit = [];

  /**
   * If the date set, return a list of services before this date.
   * The date and time is in UTC and in MySQL format.
   * If left as `null` then return a list of services which will not be limited to the end date.
   *
   * @get get
   * @var string|null
   */
  public $dtu_end = null;

  /**
   * If the date is set, return a list of services after this date.
   * The date and time is in UTC and in MySQL format.
   * If left as `null` then return a list of services which will not be limited to the start date.
   *
   * @get get
   * @var string|null
   */
  public $dtu_start = null;

  /**
   * If `true` then get all the client’s previous visits.
   * If `false` or left as null, then get all the client’s upcoming visits.
   *
   * @get get
   * @var bool|null
   */
  public $is_past = null;

  /**
   * The business key.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The user key.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>