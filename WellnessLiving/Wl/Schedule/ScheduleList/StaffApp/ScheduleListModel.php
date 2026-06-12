<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffApp;

use WellnessLiving\WlModelAbstract;

/**
 * Gets information about sessions (both classes and appointments) at a business on a given day.
 */
class ScheduleListModel extends WlModelAbstract
{
  /**
   * Configuration options for schedule.
   * Key is option name, value is boolean.
   *
   * May contain the following keys:
   *
   * @get get
   * @var array
   */
  public $a_config = [];

  /**
   * The sessions present on the business schedule. These are sorted chronologically in ascending order.
   * Every element has the following keys:
   *
   * @get result
   * @var array[]
   */
  public $a_schedule;

  /**
   * The end date of the range from which the list of schedule sessions should be retrieved.
   *
   * This will be `null` if the range has no end date. If this value is used,
   * {@link ScheduleListModel::$dt_date} should not be set.
   *
   * @get get
   * @var string
   */
  public $dl_end = '';

  /**
   * The start date of the range from which the list of scheduled sessions should be retrieved.
   *
   * This will be `null` if the range has no start date. If this value is used,
   * {@link ScheduleListModel::$dt_date} should not be set.
   *
   * @get get
   * @var string
   */
  public $dl_start = '';

  /**
   * The date of the sessions in Coordinated Universal Time (UTC) and MySQL format.
   *
   * If this value is used, then
   * {@link ScheduleListModel::$dl_end} and
   * {@link ScheduleListModel::$dl_start} should not be set.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * <tt>true</tt> - If the business has at least one virtual service, <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_virtual_service;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = null;

  /**
   * User key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $uid = null;
}

?>