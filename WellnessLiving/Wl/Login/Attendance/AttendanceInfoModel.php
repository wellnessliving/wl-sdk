<?php

namespace WellnessLiving\Wl\Login\Attendance;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Schedule\Page\WlVisitNoteSid;
use WellnessLiving\Wl\WlServiceSid;

/**
 * Attendance list information.
 */
class AttendanceInfoModel extends WlModelAbstract
{
  /**
   * Additional visit information about this appointment. Empty array if it's not an appointment:
   *
   * @get result
   * @var array
   */
  public $a_appointment_visit_info = [];

  /**
   * Service logo information:
   *
   * @get result
   * @var array
   */
  public $a_logo;

  /**
   * Default purchase option information.
   *
   * @get result
   * @var array
   */
  public $a_purchase_option_default = [];

  /**
   * Assets which are bound to this session.
   *
   * @get result
   * @var string[]
   */
  public $a_resource;

  /**
   * Asset layouts of session:
   *
   * @get result
   * @var array[]
   */
  public $a_resource_layout;

  /**
   * List of staff members who provide service:
   *
   * @get result
   * @var array[]
   */
  public $a_staff;

  /**
   * Confirmation date+time of appointment in MySQL format. If client never confirmed, will be zero date + time.
   *
   * @get result
   * @var string
   */
  public $dt_confirm = '';

  /**
   * Start date of the session in MySQL format in GMT.
   *
   * @get result
   * @var string
   */
  public $dt_date_global;

  /**
   * Start date of the class in MySQL format in local time.
   *
   * @get get
   * @var string
   */
  public $dt_date_local = '';

  /**
   * End date and time of the session in MySQL format in local timezone.
   *
   * @get result
   * @var string
   */
  public $dtl_end = '';

  /**
   * End date and time of the session in MySQL format in GMT.
   *
   * @get result
   * @var string
   */
  public $dtu_end = '';

  /**
   * Date and time in UTC when the visit is promoted from wait list to active list.
   * Not empty for appointments.
   *
   * @get result
   * @var string
   */
  public $dtu_wait_promote = '';

  /**
   * Whether notes added to visit.
   *
   * @get result
   * @var bool
   */
  public $has_note;

  /**
   * Duration of the session in minutes.
   *
   * @get result
   * @var int
   */
  public $i_duration;

  /**
   * Type of note. One of {@link WlVisitNoteSid} constants. <tt>false</tt> if notes not allowed.
   *
   * @get result
   * @var int|false
   */
  public $id_note;

  /**
   * Service type, one of {@link WlServiceSid}.
   *
   * @get result
   * @var int
   */
  public $id_service;

  /**
   * Whether this service be carried out in Zoom.
   * <tt>true</tt> - If the service can be carried out in Zoom.
   * <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_start_virtual_service = false;

  /**
   * ID of appointment to get information for.
   *
   * @get get
   * @var string
   */
  public $k_appointment = '0';

  /**
   * ID of business to get information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Class identifier. Not empty if service is class or event reservation.
   *
   * @get result
   * @var string
   */
  public $k_class;

  /**
   * ID of class period to get information for.
   *
   * @get get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * Location identifier.
   *
   * @get result
   * @var string
   */
  public $k_location;

  /**
   * Resource identifier. Not empty if service is asset reservation.
   *
   * @get result
   * @var string
   */
  public $k_resource;

  /**
   * Service identifier. Not empty if service is appointment reservation.
   *
   * @get result
   * @var string
   */
  public $k_service;

  /**
   * Location name.
   *
   * @get result
   * @var string
   */
  public $text_location;

  /**
   * Time when service starts in format <tt>8:00AM</tt>.
   *
   * @get result
   * @var string
   */
  public $text_time_end;

  /**
   * Start time of the session in format '9:30AM'.
   *
   * @get result
   * @var string
   */
  public $text_time_start;

  /**
   * Title of the appointment.
   *
   * @get result
   * @var string
   */
  public $text_title;

  /**
   * URL that leads directly to the class/event booking page in the Client Web App.
   * Empty string if the service is an appointment reservation.
   *
   * @get result
   * @var string
   */
  public $url_booking;
}

?>