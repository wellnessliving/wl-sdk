<?php

namespace WellnessLiving\Wl\Schedule\ClassList;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves items of class schedule.
 */
class ClassListModel extends WlModelAbstract
{
  /**
   * List of classes sessions starting with the date {@link \WellnessLiving\Wl\Schedule\ClassList\ClassListModel::$dt_date}
   * and in the 62 days ahead (or up to {@link \WellnessLiving\Wl\Schedule\ClassList\ClassListModel::$dt_end}). Every
   * element has next keys:
   * <dl>
   *   <dt>
   *     string[] <var>a_staff</var>
   *   </dt>
   *   <dd>
   *     Staff keys for the staff who conduct the session.
   *   </dd>
   *   <dt>
   *     string[] <var>a_virtual_location</var>
   *   </dt>
   *   <dd>
   *     List of virtual locations keys. Each value is a location key.
   *   </dd>
   *   <dt>
   *     string <var>dt_date</var>
   *   </dt>
   *   <dd>
   *     Date/time of the session start in UTC.
   *   </dd>
   *   <dt>
   *     string <var>dt_time</var>
   *   </dt>
   *   <dd>
   *     Time of the session start in the local timezone.
   *   </dd>
   *   <dt>
   *     string <var>dtl_date</var>
   *   </dt>
   *   <dd>
   *     Date/time of session start in the location's timezone.
   *   </dd>
   *   <dt>
   *     bool <var>hide_application</var>
   *   </dt>
   *   <dd>
   *      Whether class will be hidden in the White Label mobile application.
   *      <tt>true</tt> means that class will not be displayed, <tt>false</tt> otherwise.
   *   </dd>
   *   <dt>
   *     int <var>i_day</var>
   *   </dt>
   *   <dd>
   *     Day of the week when session is occurred. Constant from {@link \WellnessLiving\Core\a\ADateWeekSid}.
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
   *     <tt>true</tt> if this class period was cancelled; <tt>false</tt> otherwise.
   *   </dd>
   *   <dt>
   *     bool <var>is_virtual</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if the class is virtual, <tt>false</tt> otherwise.
   *   </dd>
   *   <dt>
   *     string <var>k_class</var>
   *   </dt>
   *   <dd>
   *     Class key.
   *   </dd>
   *   <dt>
   *     string <var>k_class_period</var>
   *   </dt>
   *   <dd>
   *     Session key.
   *   </dd>
   *   <dt>
   *     string <var>k_location</var>
   *   </dt>
   *   <dd>
   *     Key of the session's location.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     Title of the session.
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
   * Date of list start in UTC.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * Date of list end in UTC.
   *
   * <tt>null</tt> to end after 62 days after {@link \WellnessLiving\Wl\Schedule\ClassList\ClassListModel::$dt_date}.
   *
   * @get get
   * @var string|null
   */
  public $dt_end = null;

  /**
   * Whether need to retrieve list of classes sessions regardless tab specified in
   *   {@link \WellnessLiving\Wl\Schedule\ClassList\ClassListModel::$k_class_tab}.
   *
   * * <tt>true</tt> - retrieve list regardless specified tab.
   * * <tt>false</tt> - retrieve list only for specific tab.
   *
   * @get get
   * @var bool
   */
  public $is_tab_all = false;

  /**
   * <tt>true</tt> - list of sessions contains sessions from different timezones; <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_timezone_different = false;

  /**
   * <tt>true</tt> - If there exists at least one virtual service by a specified
   * {@link \WellnessLiving\Wl\Schedule\ClassList\ClassListModel::$k_business} and
   * {@link \WellnessLiving\Wl\Schedule\ClassList\ClassListModel::$k_class_tab},
   * <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_virtual_service;

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
   * ID of category tab in database.
   *
   * <tt>null</tt> if not set yet.
   * ## Will be ignored if {@link \WellnessLiving\Wl\Schedule\ClassList\ClassListModel::$is_tab_all} is <tt>true</tt>.
   *
   * @get get
   * @var string|null
   */
  public $k_class_tab = null;

  /**
   * Whether canceled class periods will be displayed or not.
   *
   * <tt>true</tt> - canceled class periods will be displayed;
   * <tt>false</tt> - canceled class periods will not be displayed.
   *
   * @get get
   * @var bool
   */
  public $show_cancel = false;

  /**
   * User ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @var string|null
   */
  public $uid = null;
}

?>