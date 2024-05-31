<?php

namespace WellnessLiving\Wl\Schedule\ClassList;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of classes and class information for a Class Tab.
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
   *     string[] <var>a_staff</var>
   *   </dt>
   *   <dd>
   *     The list of staff keys for the staff member conducting the session.
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
   * A comma seperated list of staff keys.
   *
   * @get get
   * @var string
   */
  public $s_staff = '';

  /**
   * If `true`, canceled sessions will be returned. If `false`, canceled sessions won't be returned.
   *
   * @get get
   * @var bool
   */
  public $show_cancel = false;

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
  public $uid;
}

?>