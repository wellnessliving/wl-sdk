<?php

namespace WellnessLiving\Wl\Schedule\Page;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves items of the schedule for the client.
 */
class PageListModel extends WlModelAbstract
{
  /**
   * List of schedule items. Every element has next field:
   * <ul><li>String <tt>k_visit</tt> ID of book/visit.</li></ul>
   * Order of items in this array is the order in which elements should be shown.
   *
   * @get result
   * @var array
   */
  public $a_visit = [];

  /**
   * If date set, return a list of services before this date.
   * Date and time in UTC timezone in MySQL format.
   * If left as <tt>null</tt> then return a list of services, which will not be limited to the end date.
   *
   * @get get
   * @var string|null
   */
  public $dtu_end = null;

  /**
   * If date set, return a list of services after this date.
   * Date and time in UTC timezone in MySQL format.
   * If left as <tt>null</tt> then return a list of services, which will not be limited to the start date.
   *
   * @get get
   * @var string|null
   */
  public $dtu_start = null;

  /**
   * If set to true, return a list of past services.
   * If left as <tt>null</tt> then return a list of upcoming services.
   *
   * @get get
   * @var bool|null
   */
  public $is_past = null;

  /**
   * Business ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * User ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>