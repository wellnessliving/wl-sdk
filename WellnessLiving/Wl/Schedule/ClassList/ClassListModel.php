<?php

namespace WellnessLiving\Wl\Schedule\ClassList;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves items of class schedule.
 */
class ClassListModel extends WlModelAbstract
{
  /**
   * Filter for the model.
   *
   * @var array
   */
  public $a_filter = [];

  /**
   * List of classes sessions starting with the date {@link Wl_Schedule_ClassList_ClassListModel.dt_date} and
   * in the 30 days ahead.
   *
   * @get result
   * @var array
   */
  public $a_session = [];

  /**
   * Date of list start in MySQL format. List of sessions will be formed for 30 days period starting from this date.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * <tt>true</tt> - list of sessions contains sessions from different timezones; <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_timezone_different = false;

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
   *
   * @get get
   * @var string|null
   */
  var $k_class_tab = null;

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