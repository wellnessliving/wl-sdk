<?php

namespace WellnessLiving\Wl\Login\Attendance;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that displays attendance list data.
 * Version for validation by token.
 */
class AttendanceListByTokenModel extends WlModelAbstract
{
  /**
   * A list of active clients in the attendance list.
   *
   * @get result
   * @var array
   */
  public $a_list_active = [];

  /**
   * A list of clients that require confirmation before moving to the attendance list.
   *
   * @get result
   * @var array
   */
  public $a_list_confirm = [];

  /**
   * A list of clients on the wait list.
   *
   * @get result
   * @var array
   */
  public $a_list_wait = [];

  /**
   * The start date and time of the class in MySQL format in the location's time zone.
   *
   * @get get
   * @var string
   */
  public $dt_date_local = '';

  /**
   * The service capacity.
   *
   * @get result
   * @var int
   */
  public $i_capacity = null;

  /**
   * The appointment key.
   *
   * @get get
   * @var string
   */
  public $k_appointment = '0';

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The class session key.
   *
   * @get get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * The location key.
   *
   * @get result
   * @var string
   */
  public $k_location = null;

  /**
   * The security token.
   *
   * @get get
   * @var string
   */
  public $text_token = '0';
}

?>