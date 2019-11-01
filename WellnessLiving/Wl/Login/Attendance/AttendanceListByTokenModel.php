<?php

namespace WellnessLiving\Wl\Login\Attendance;

use WellnessLiving\WlModelAbstract;

/**
 * Attendance list data.
 * Version for validation by token.
 */
class AttendanceListByTokenModel extends WlModelAbstract
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
  public $dt_date_local = '';

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
  public $k_appointment = '0';

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Class session key.
   *
   * @get get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * Location key.
   *
   * @get result
   * @var string
   */
  public $k_location = null;

  /**
   * Security token.
   *
   * @get get
   * @var string
   */
  public $text_token = '0';
}

?>