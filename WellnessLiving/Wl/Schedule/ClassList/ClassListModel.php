<?php

namespace WellnessLiving\Wl\Schedule\ClassList;

use WellnessLiving\WlModelAbstract;

/**
 * Gets a list of classes and class information for a Class Tab.
 */
class ClassListModel extends WlModelAbstract
{
  /**
   * List of classes sessions starting with the date {@link \WellnessLiving\Wl\Schedule\ClassList\ClassListModel::$dt_date}
   * and in the 62 days ahead (or up to {@link \WellnessLiving\Wl\Schedule\ClassList\ClassListModel::$dt_end}). Every
   * element has the next keys:
   * <dl>
   *   <dt>
   *     string[] <var>a_staff</var>
   *   </dt>
   *   <dd>
   *     A list of staff keys for the staff who conduct the session.
   *   </dd>
   *   <dt>
   *     string[] <var>a_virtual_location</var>
   *   </dt>
   *   <dd>
   *     The list of virtual locations keys. Each value is a location key.
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
   *     The time of the session start in the local timezone.
   *   </dd>
   *   <dt>
   *     string <var>dtl_date</var>
   *   </dt>
   *   <dd>
   *     The date/time of session start in the location's timezone.
   *   </dd>
   *   <dt>
   *     bool <var>hide_application</var>
   *   </dt>
   *   <dd>
   *      Specifies whether the class will be hidden in the White Label mobile application. If `true` it means that the
   *      class will not be displayed; `false` means the class will be displayed.
   *   </dd>
   *   <dt>
   *     int <var>i_day</var>
   *   </dt>
   *   <dd>
   *     The day of the week when session is occurred. Constant from {@link \WellnessLiving\Core\a\ADateWeekSid}.
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
   *     If `true` this class period was cancelled; `false` otherwise.
   *   </dd>
   *   <dt>
   *     bool <var>is_virtual</var>
   *   </dt>
   *   <dd>
   *     If `true` the class is virtual, `false` otherwise.
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
   *     Direct link to start booking on wellnessliving site.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_session = [];

  /**
   * The list’s start date in UTC and in MySQL format.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * The list’s end date in UTC and in MySQL format.
   * If left `null` the default duration is 62 days after
   * {@link \WellnessLiving\Wl\Schedule\ClassList\ClassListModel::$dt_date}.
   *
   * @get get
   * @var string|null
   */
  public $dt_end = null;

  /**
   * If `true` then return sessions from every class tab. If `false` then use the
   * {@link \WellnessLiving\Wl\Schedule\ClassList\ClassListModel::$k_class_tab} value..
   *
   * @get get
   * @var bool
   */
  public $is_tab_all = false;

  /**
   * If `true` then list of sessions contains sessions from different timezones; `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_timezone_different = false;

  /**
   * If `true` then there exists at least one virtual service by a specified
   * {@link \WellnessLiving\Wl\Schedule\ClassList\ClassListModel::$k_business} and
   * {@link \WellnessLiving\Wl\Schedule\ClassList\ClassListModel::$k_class_tab},
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_virtual_service;

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
   * The category tab key.
   *
   * It is `null` if not set yet.
   * ## Will be ignored if {@link \WellnessLiving\Wl\Schedule\ClassList\ClassListModel::$is_tab_all} is `true`.
   *
   * @get get
   * @var string|null
   */
  public $k_class_tab = null;

  /**
   * If `true` then canceled sessions will be returned. If `false` then canceled sessions will not be returned.
   *
   * @get get
   * @var bool
   */
  public $show_cancel = false;

  /**
   * The user key.
   *
   * It is `null` if not set yet.
   *
   * @var string|null
   */
  public $uid = null;
}

?>