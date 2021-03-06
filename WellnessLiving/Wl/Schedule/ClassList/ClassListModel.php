<?php

namespace WellnessLiving\Wl\Schedule\ClassList;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves items of class schedule.
 */
class ClassListModel extends WlModelAbstract
{
  /**
   * List of classes sessions starting with the date {@link \WellnessLiving\Wl\Schedule\ClassList\ClassListModel::$dt_date} and
   * in the 30 days ahead.
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