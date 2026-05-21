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
   * If, locations are sent as a parameter, then at least one class in the given locations.
   *
   * Values are empty arrays for now. This is done to make possible to add some information about certain dates, if we need this.
   *
   * @get result
   * @var array[]
   */
  public $a_calendar = [];

  /**
   * The list of classes keys to filter.
   *
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
   * <dl>
   *   <dt>
   *     string[] <var>a_class_tab</var>
   *   </dt>
   *   <dd>
   *     Keys of class tab.
   *   </dd>
   *   <dt>
   *     string[] <var>a_image</var>
   *    </dt>
   *    <dd>
   *     The class image. Empty array if there is no image.
   *   </dd>
   *   <dt>
   *     string[] <var>a_search_tag</var>
   *   </dt>
   *   <dd>
   *     Tags associated with an individual class.
   *   </dd>
   *   <dt>
   *     string[] <var>a_staff</var>
   *   </dt>
   *   <dd>
   *     The list of staff keys for the staff member conducting the session.
   *     For legacy third-party apps listed in {@link ClassListApi::APPS_USE_OLD_K_STAFF},
   *
   *     Empty for all other applications. Use `a_staff_uid` instead.
   *   </dd>
   *   <dt>
   *     string[] <var>a_staff_uid</var>
   *   </dt>
   *   <dd>
   *     The list of staff user keys for the staff member conducting the session.
   *
   *   </dd>
   *   <dt>
   *     string[] <var>a_virtual_location</var>
   *   </dt>
   *   <dd>
   *     The list of virtual locations keys. Each value is a location key.
   *
   *   </dd>
   *   <dt>
   *     string <var>dt_date</var>
   *   </dt>
   *   <dd>
   *     The date/time of the session start in UTC.
   *   </dd>
   *   <dt>
   *     string <var>dt_time</var>
   *   </dt>
   *   <dd>
   *     The time of the session start in the local time zone.
   *   </dd>
   *   <dt>
   *     string <var>dtl_date</var>
   *   </dt>
   *   <dd>
   *     The date/time of session start in the location's time zone.
   *   </dd>
   *   <dt>
   *     bool <var>hide_application</var>
   *   </dt>
   *   <dd>
   *      Specifies whether the class will be hidden in the White Label Achieve Client App. If `true`, it means that the
   *      class won't be displayed. Otherwise, this will be `false` to indicate that the class will be displayed.
   *   </dd>
   *   <dt>
   *     string <var>html_description</var>
   *   </dt>
   *   <dd>
   *     The class description.
   *   </dd>
   *   <dt>
   *     int <var>i_book</var>
   *   </dt>
   *   <dd>
   *     Count of visits on this class.
   *   </dd>
   *   <dt>
   *     int|null <var>i_capacity</var>
   *   </dt>
   *   <dd>
   *     The capacity of the service. 'null' indicates that the capacity is not set.
   *    </dd>
   *   <dt>
   *     int <var>i_day</var>
   *   </dt>
   *   <dd>
   *     The day of the week when session is occurred. Constant from {@link ADateWeekSid}.
   *   </dd>
   *   <dt>
   *     int <var>i_duration</var>
   *   </dt>
   *   <dd>
   *     The duration of the session in minutes.
   *   </dd>
   *   <dt>
   *     int <var>i_wait</var>
   *   </dt>
   *   <dd>
   *     Number of clients in wait list.
   *   </dd>
   *   <dt>
   *     bool <var>is_cancel</var>
   *   </dt>
   *   <dd>
   *     If `true`, this class period was canceled. Otherwise, this will be `false`.
   *   </dd>
   *    <dt>
   *      bool <var>is_event</var>
   *    </dt>
   *    <dd>
   *      If `true`, this is an event. Otherwise, this will be `false`.
   *    </dd>
   *   <dt>
   *     bool <var>is_virtual</var>
   *   </dt>
   *   <dd>
   *     If `true`, this class is virtual. Otherwise, this will be `false`.
   *   </dd>
   *   <dt>
   *     bool <var>is_wait_list_enabled</var>
   *   </dt>
   *   <dd>
   *     This will be `true` if user is only on the wait-list. Otherwise, this will be `false`.
   *   </dd>
   *   <dt>
   *     string <var>k_class</var>
   *   </dt>
   *   <dd>
   *     The class key.
   *   </dd>
   *   <dt>
   *     string <var>k_class_period</var>
   *   </dt>
   *   <dd>
   *     The class period key.
   *   </dd>
   *   <dt>
   *     string <var>k_location</var>
   *   </dt>
   *   <dd>
   *     The key of the session's location.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     The title of the session.
   *   </dd>
   *   <dt>
   *     string <var>url_book</var>
   *   </dt>
   *   <dd>
   *     The direct link to start booking on the WellnessLiving website.
   *   </dd>
   * </dl>
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
   * <dl>
   *    <dt>string <var>tl_start</var></dt>
   *    <dd>Time when the session starts. Example: value `'06:00'`.</dd>
   *    <dt>string <var>tl_end</var></dt>
   *    <dd>Time when the session ends. Example: value `'14:00'`.</dd>
   * </dl>
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