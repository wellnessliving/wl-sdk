<?php

namespace WellnessLiving\Wl\Schedule\ClassList;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Classes\Tab\TabSid;

/**
 * Retrieves a list of classes and class information for a Class Tab.
 */
class ClassList68Model extends WlModelAbstract
{
  /**
   * Keys are dates of the days inside requested date range, when there is at least one class in the business.
   * If locations are sent as a parameter, then at least one class must exist in the given locations.
   *
   * Each key is a date string in `YYYY-MM-DD` format (local date in the business time zone).
   * Each value is an empty array reserved for future use.
   *
   * @post result
   * @var string[]
   */
  public $a_calendar = [];

  /**
   * The list of classes keys to filter.
   * Return sessions with matching class IDs.
   *
   * If it's empty and {@link ClassList68Model::$show_class} is `true`, all classes will be returned.
   *
   * @post post
   * @var string[]
   */
  public $a_class = [];

  /**
   * List of tabs keys.
   *
   * This will be ignored if {@link ClassList68Model::$is_tab_all} is `true`.
   *
   * If list of tab keys is not empty, {@link ClassList68Model::$id_class_tab} is mandatory.
   *
   * `null` if no filtering by Book Now Tab is required.
   *
   * @post post
   * @var string[]|null
   */
  public $a_class_tab = null;

  /**
   * Class filter by day of the week.
   * Array of number representing the days of the week.
   * Return sessions matching the given weekdays.
   * (7 = Sunday, 1 = Monday, ..., 6 = Saturday)
   *
   * Empty array means no filtering.
   *
   * @post post
   * @var int[]
   * @see ADateWeekSid
   */
  public $a_day = [];

  /**
   * The list of event keys to filter.
   * Return sessions with matching event keys.
   *
   * If it's empty and {@link ClassList68Model::$show_event} is `true`, all events will be returned.
   *
   * @post post
   * @var string[]
   */
  public $a_event = [];

  /**
   * The list of location keys to filter results.
   * If it's empty, schedule for all locations will be returned.
   * All given locations should be from the same business, which is sent in {@link ClassListModel::$k_business}.
   *
   * @post post
   * @var string[]
   */
  public $a_location = [];

  /**
   * Information about classes/events for quick filter.
   *
   * Every element has the following keys:
   *
   * For generating this filter, all filters are applied except:
   * - {@link ClassList68Model::$a_class};
   * - {@link ClassList68Model::$a_event};
   * - {@link ClassList68Model::$show_class};
   * - {@link ClassList68Model::$show_event}.
   *
   * @post result
   * @var array
   */
  public $a_quick = [];

  /**
   * A list of classes sessions starting with the date {@link ClassListModel::$dt_date}
   * and in the 62 days ahead (or up to {@link ClassListModel::$dt_end}).
   * Every element has the following keys:
   *
   * @post result
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
   * @post post
   * @var array[]
   */
  public $a_time = [];

  /**
   * The list start date in MySQL format.
   *
   * @post post
   * @var string
   */
  public $dt_date = '';

  /**
   * The list end date in MySQL format.
   * *
   * @post post
   * @var string
   */
  public $dt_end = '';

  /**
   * ID of tab. One of {@link TabSid} constants.
   * This will be ignored if {@link ClassList68Model::$is_tab_all} is `true`.
   *
   * `null` if no filtering by tab is required.
   *
   * @post post
   * @var int|null
   */
  public $id_class_tab = null;

  /**
   * `true` means to not generate {@link ClassList68Model::$a_session} result.
   * Can be used, if you do not need full information about existing classes and result in {@link ClassList68Model::$a_calendar} is enough.
   *
   * @post post
   * @var bool
   */
  public $is_response_short = false;

  /**
   * If `true`, sessions from every class tab are returned. If `false`, use the
   * {@link ClassList68Model::$k_class_tab} or {@link ClassList68Model::$id_class_tab} to filter sessions by class tab.
   *
   * @post post
   * @var bool
   */
  public $is_tab_all = false;

  /**
   * If `true`, the list of sessions contains sessions from different time zones. Otherwise, this will be `false`.
   *
   * @post result
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
   * @post post
   * @var bool|null
   */
  public $is_virtual = null;

  /**
   * If `true`, there exists at least one virtual service by a specified
   * {@link ClassList68Model::$k_business} and {@link ClassList68Model::$k_class_tab},
   * Otherwise, this will be `false`.
   *
   * @post result
   * @var bool
   */
  public $is_virtual_service;

  /**
   * The business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';

  /**
   * The tab key.
   * This will be ignored if {@link ClassList68Model::$is_tab_all} is `true`.
   *
   * @post post
   * @var string
   */
  public $k_class_tab = '0';

  /**
   * The list of staff members to filter.
   * A comma separated list of staff keys.
   *
   * @post post
   * @var string
   * @deprecated Use {@link ClassListModel::$s_staff_uid} instead.
   */
  public $s_staff = '';

  /**
   * The list of staff user keys to filter.
   * A comma separated list of staff user keys.
   *
   * @post post
   * @var string
   */
  public $s_staff_uid = '';

  /**
   * If `true`, canceled sessions will be returned. If `false`, canceled sessions won't be returned.
   *
   * @post post
   * @var bool
   */
  public $show_cancel = false;

  /**
   * If `true`, classes will be included in the response. `false` - otherwise.
   *
   * @post post
   * @var bool
   */
  public $show_class = true;

  /**
   * If `true`, events are also returned. If `false`, only classes are returned.
   *
   * @post post
   * @var bool
   */
  public $show_event = false;

  /**
   * Whether to generate {@link ClassList68Model::$a_quick} a quick filter.
   * If `true`, a quick filter will be generated. `false` otherwise.
   *
   * @post post
   * @var bool
   */
  public $show_quick_filter = false;

  /**
   * The user key.
   *
   * @post post
   * @var string
   */
  public $uid = '';
}

?>