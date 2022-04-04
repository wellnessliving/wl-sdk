<?php

namespace WellnessLiving\Wl\Login\Attendance;

use WellnessLiving\WlModelAbstract;

/**
 * Attendance list data.
 */
class AttendanceListModel extends WlModelAbstract
{
  /**
   * List of clients who are in active attendance list.
   *
   * @get result
   * @var array
   */
  public $a_list_active = [];

  /**
   * List of clients that requires confirmation from client to move to attendance list.
   *
   * @get result
   * @var array
   */
  public $a_list_confirm = [];

  /**
   * List of clients who are in wait list.
   *
   * @get result
   * @var array
   */
  public $a_list_wait = [];

  /**
   * Start date and time of the class in MySQL format in the location timezone.
   *
   * @get get
   * @var string
   */
  public $dt_date_local = null;

  /**
   * If <tt>true</tt> then return the purchase used to pay for session.
   * Otherwise <tt>false</tt>, do not return any purchase information.
   *
   * @get get
   * @var bool
   */
  public $is_purchase_return=false;

  /**
   * Service capacity.
   *
   * @get result
   * @var int
   */
  public $i_capacity = null;

  /**
   * Appointment key.
   *
   * @get get
   * @var string
   */
  public $k_appointment = null;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = null;

  /**
   * Class session key.
   *
   * @get get
   * @var string
   */
  public $k_class_period = null;

  /**
   * Location key.
   *
   * @get result
   * @var string
   */
  public $k_location = null;
}

?>