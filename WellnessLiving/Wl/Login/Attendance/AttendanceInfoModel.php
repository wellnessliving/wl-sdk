<?php

namespace WellnessLiving\Wl\Login\Attendance;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Schedule\Page\WlVisitNoteSid;
use WellnessLiving\Wl\WlSaleSid;
use WellnessLiving\Wl\WlServiceSid;

/**
 * Attendance list information.
 */
class AttendanceInfoModel extends WlModelAbstract
{
  /**
   * Additional visit information about this appointment. Empty array if it's not an appointment:
   *
   * <dl>
   *   <dt>bool `is_deny`</dt>
   *   <dd>`true` means that appointment was requested and denied by the staff.</dd>
   * 
   *   <dt>bool `is_notify_request_accept`</dt>
   *   <dd>`true` means that the client will receive a notification, if appointment will be confirmed by the staff.</dd>
   * 
   *   <dt>bool `is_notify_request_deny`</dt>
   *   <dd>`true` means that the client will receive a notification, if appointment will be denied by the staff.</dd>
   * 
   *   <dt>bool `is_request`</dt>
   *   <dd>`true` means that appointment was requested, but not confirmed by the staff.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_appointment_visit_info = [];

  /**
   * Service logo information:
   *
   * <dl>
   *   <dt>bool `is_empty`</dt>
   *   <dd>Whether service image is empty.</dd>
   * 
   *   <dt>string `s_url`</dt>
   *   <dd>Url link to image.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_logo;

  /**
   * Default purchase option information.
   *
   * <dl>
   *   <dt>string|null `id_sale`</dt>
   *   <dd>
   *     The sale item type, one of the {@link WlSaleSid} constants.
   * This will be `null` if the class has no default Purchase Option, or it sets to "Drop-in rate".
   *   </dd>
   * 
   *   <dt>string|null `k_id`</dt>
   *   <dd>
   *     The default Purchase Option key. * This will be `null` if the class has no default Purchase Option, or it sets to "Drop-in rate".
   *   </dd>
   * 
   *   <dt>bool `is_single_default`</dt>
   *   <dd>If the default Purchase Option is set to "Drop-in rate" then the value will be `true`, `false` otherwise.</dd>
   * </dl>
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
   * <dl>
   *   <dt>array `a_client`</dt>
   *   <dd>
   *     List of clients who occupy assets of class.
   * It is a double nesting array.
   * Keys - keys - asset index.
   * Values - sub array with keys:
   * <dl><dt>string <var>text_client</var></dt><dd>User's name.</dd>
   * <dt>string <var>uid</var></dt><dd>User's primary key.</dd></dl>
   *     <dl>
   *       <dt>string `text_client`</dt>
   *       <dd>User's name.</dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>User's primary key.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string[] `a_resource_available`</dt>
   *   <dd>Key of asset. 
   * 
   *   <dt>string `k_resource_layout`</dt>
   *   <dd>Key of layout. 
   * 
   *   <dt>string `text_resource_type`</dt>
   *   <dd>Title of asset category.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_resource_layout;

  /**
   * List of staff members who provide service:
   *
   * <dl>
   *   <dt>array `a_logo`</dt>
   *   <dd>
   *     Data of staff member's photo. Empty if staff has no photo. Otherwise contains next keys:
   * <dl>
   *   <dt>
   *     int <var>i_height</var>
   *   </dt>
   *   <dd>
   *     Height in pixels.
   *   </dd>
   *   <dt>
   *     int <var>i_width</var>
   *   </dt>
   *   <dd>
   *     Width in pixels.
   *   </dd>
   *   <dt>
   *     string <var>url_logo</var>
   *   </dt>
   *   <dd>
   *     Image URL.
   *   </dd>
   * </dl>
   *     <dl>
   *       <dt>int `i_height`</dt>
   *       <dd>Height in pixels.</dd>
   * 
   *       <dt>int `i_width`</dt>
   *       <dd>Width in pixels.</dd>
   * 
   *       <dt>string `url_logo`</dt>
   *       <dd>Image URL.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `k_staff`</dt>
   *   <dd>deprecated Legacy staff key. Returned only for applications from allow-list.</dd>
   * 
   *   <dt>string `uid_staff`</dt>
   *   <dd>Staff user key. 
   * 
   *   <dt>string `html_firstname`</dt>
   *   <dd>Staff member's first name.</dd>
   * 
   *   <dt>string `html_lastname`</dt>
   *   <dd>Staff member's last name.</dd>
   * </dl>
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