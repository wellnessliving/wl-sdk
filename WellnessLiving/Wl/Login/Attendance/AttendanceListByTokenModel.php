<?php

namespace WellnessLiving\Wl\Login\Attendance;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that displays attendance list data.
 * Version of {@link AttendanceListModel} for access validation by security token.
 */
class AttendanceListByTokenModel extends WlModelAbstract
{
  /**
   * The list of clients in the active attendance list who haven't confirmed or canceled.
   * Each element is an array with the following fields:
   *
   * @get result
   * @var array[]
   */
  public $a_list_active = [];

  /**
   * The list of clients who have confirmed their attendance.
   *
   * @get result
   * @var array[]
   */
  public $a_list_confirm = [];

  /**
   * The list of clients who are on the wait list.
   *
   * @get result
   * @var array[]
   */
  public $a_list_wait = [];

  /**
   * The local date of the class or event session.
   *
   * @get get
   * @var string
   */
  public $dt_date_local = '';

  /**
   * The maximum capacity of the class or event session.
   *
   * @get result
   * @var int
   */
  public $i_capacity = null;

  /**
   * Count client on the attendance.
   *
   * @get result
   * @var int
   */
  public $i_client = null;

  /**
   * The maximum number of clients on wait list of the class or event session.
   *
   * @get result
   * @var int
   */
  public $i_wait_list_limit;

  /**
   * If `true`, then return the purchase used to pay for session.
   * Otherwise, do not return any purchase information.
   *
   * @get get
   * @var bool
   */
  public $is_purchase_info_return = false;

  /**
   * `true` to use class/event specific wait list limit, `false` to use the limit from default policies.
   * `false` for appointments.
   *
   * @get result
   * @var bool
   */
  public $is_wait_list_limit;

  /**
   * The appointment key. Not used if requesting information for a class or event session.
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
   * The class period key. Not used if requesting information for an appointment.
   *
   * @get get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * The Location key.
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
  public $text_token = '';
}

?>