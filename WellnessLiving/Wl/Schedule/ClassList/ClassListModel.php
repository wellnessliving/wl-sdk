<?php

namespace WellnessLiving\Wl\Schedule\ClassList;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of classes and class information for a Class Tab.
 *
 * @deprecated Use {@link ClassList68Model} instead.
 */
class ClassListModel extends WlModelAbstract
{
  /**
   * Keys are dates of the days inside requested date range, when there is at least one class in the business.
   * If locations are sent as a parameter, then at least one class must exist in the given locations.
   *
   * Each key is a date string in `YYYY-MM-DD` format (local date in the business time zone).
   * Each value is an empty array reserved for future use.
   *
   * @get result
   * @var string[]
   */
  public $a_calendar = [];

  /**
   * The list of classes keys to filter.
   * Return sessions with matching class IDs.
   *
   * If it's empty, all classes/events will be returned.
   *
   * @get get
   * @var string[]
   */
  public $a_class = [];

  /**
   * Class filter by day of the week.
   * Array of number representing the days of the week.
   * Return sessions matching the given weekdays.
   * (7 = Sunday, 1 = Monday, ..., 6 = Saturday)
   *
   * Empty array means no filtering.
   *
   * @get get
   * @var int[]
   * @see ADateWeekSid
   */
  public $a_day = [];

  /**
   * The list of location keys to filter results.
   * If it's empty, schedule for all locations will be returned.
   * All given locations should be from the same business, which is sent in {@link ClassListModel::$k_business}.
   *
   * @get get
   * @var string[]
   */
  public $a_location = [];

  /**
   * A list of classes sessions starting with the date {@link ClassListModel::$dt_date}
   * and in the 62 days ahead (or up to {@link ClassListModel::$dt_end}).
   * Every element has the following keys:
   *
   * @get result
   * @var array[]
   */
  public $a_session;

  /**
   * Class filter by time of day.
   * List of arrays with start and end time in "HH:MM" format (24h).
   * Include sessions that start between the specified time range.
   *
   * Each value is array with time parameters:
   *
   * Empty array means no filtering.
   *
   * @get get
   * @var array[]
   */
  public $a_time = [];

  /**
   * The list start date in UTC and in MySQL format.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * The list end date in UTC and in MySQL format.
   * 
   * @get get
   * @var string
   */
  public $dt_end = '';

  /**
   * `true` means to not generate {@link ClassListModel::$a_session} result.
   * Can be used, if you do not need full information about existing classes and result in {@link ClassListModel::$a_calendar} is enough.
   *
   * @get get
   * @var bool
   */
  public $is_response_short = false;

  /**
   * If `true`, sessions from every class tab are returned. If `false`, use the
   * {@link ClassListModel::$k_class_tab} value.
   *
   * @get get
   * @var bool
   */
  public $is_tab_all = false;

  /**
   * If `true`, the list of sessions contains sessions from different time zones. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_timezone_different;

  /**
   * Class filter by type.
   * The class is virtual.
   *
   * `true`: Only virtual classes.
   * `false`: Only in-person.
   * `null` or not set: No filtering.
   *
   * @get get
   * @var bool|null
   */
  public $is_virtual = null;

  /**
   * If `true`, there exists at least one virtual service by a specified
   * {@link ClassListModel::$k_business} and {@link ClassListModel::$k_class_tab},
   * Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_virtual_service;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The category tab key.
   *
   * This will be `null` if not set yet.
   * This will be ignored if {@link ClassListModel::$is_tab_all} is `true`.
   *
   * @get get
   * @var string
   */
  public $k_class_tab = '0';

  /**
   * The list of staff members to filter.
   * A comma separated list of staff keys.
   *
   * @get get
   * @var string
   * @deprecated Use {@link ClassListModel::$s_staff_uid} instead.
   */
  public $s_staff = '';

  /**
   * The list of staff user keys to filter.
   * A comma separated list of staff user keys.
   *
   * @get get
   * @var string
   */
  public $s_staff_uid = '';

  /**
   * If `true`, canceled sessions will be returned. If `false`, canceled sessions won't be returned.
   *
   * @get get
   * @var bool
   */
  public $show_cancel = false;

  /**
   * If `true`, classes will be included in the response. `false` - otherwise.
   *
   * @get get
   * @var bool
   */
  public $show_class = true;

  /**
   * If `true`, events are also returned. If `false`, only classes are returned.
   *
   * @get get
   * @var bool
   */
  public $show_event = false;

  /**
   * The user key.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>