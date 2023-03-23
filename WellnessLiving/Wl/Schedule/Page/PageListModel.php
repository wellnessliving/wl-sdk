<?php

namespace WellnessLiving\Wl\Schedule\Page;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns a list of either previous or upcoming visits for a specific user.
 *
 * A visit can be for an appointment, class, or an event.
 */
class PageListModel extends WlModelAbstract
{
  /**
   * A list of visits IDs. Each element is an array with the following element:
   * <ul><li>string `k_visit` the key of the book or visit.</li></ul>
   * The order of items in this array is the order in which elements should be shown.
   *
   * @get result
   * @var array
   */
  public $a_visit = [];

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
   * If `true`, then all the client’s previous visits will be retrieved.
   * If `false` or left as `null`, then all the client’s upcoming visits will be retrieved.
   *
   * @get get
   * @var bool|null
   */
  public $is_past = null;

  /**
   * The business key.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The user key.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>