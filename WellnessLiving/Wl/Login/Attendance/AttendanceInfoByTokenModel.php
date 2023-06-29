<?php

namespace WellnessLiving\Wl\Login\Attendance;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that displays information for certain sessions.
 * Version of {@link \WellnessLiving\Wl\Login\Attendance\AttendanceInfoModel} for access validation by security token.
 */
class AttendanceInfoByTokenModel extends WlModelAbstract
{
  /**
   * Service logo information:
   * <dl>
   *   <dt>
   *     bool <var>is_empty</var>
   *   </dt>
   *   <dd>
   *     Whether service image is empty.
   *   </dd>
   *   <dt>
   *     string <var>s_url</var>
   *   </dt>
   *   <dd>
   *     Url link to image.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_logo;

  /**
   * Assets which are bound to this session.
   *
   * @get result
   * @var string[]
   */
  public $a_resource;

  /**
   * Asset layouts of session:
   * <dl>
   *   <dt>
   *     array <var>a_client</var>
   *   </dt>
   *   <dd>
   *     List of clients who occupy assets of class.
   *     It is a double nesting array.
   *     Keys - primary keys of assets in {@link \RsResourceSql} table; sub keys - asset index;
   *     values - sub array with keys:
   *     <dl><dt>string <var>text_client</var></dt><dd>User's name.</dd>
   *     <dt>string <var>uid</var></dt><dd>User's primary key.</dd></dl>
   *   </dd>
   *   <dt>
   *     string[] <var>a_resource_available</var>
   *   </dt>
   *   <dd>
   *   </dd>
   *   <dt>
   *     string <var>k_resource_layout</var>
   *   </dt>
   *   <dd>
   *     Key of layout in {@link \Wl\Resource\Layout\Sql} table.
   *   </dd>
   *   <dt>
   *     string <var>text_resource_type</var>
   *   </dt>
   *   <dd>
   *     Title of asset category.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_resource_layout;

  /**
   * List of staff members who provide service:
   * <dl>
   *   <dt>
   *     array <var>a_logo</var>
   *   </dt>
   *   <dd>
   *     Data of staff member's photo. Empty if staff has no photo. Otherwise contains next keys:
   *     <dl>
   *       <dt>
   *         int <var>i_height</var>
   *       </dt>
   *       <dd>
   *         Height in pixels.
   *       </dd>
   *       <dt>
   *         int <var>i_width</var>
   *       </dt>
   *       <dd>
   *         Width in pixels.
   *       </dd>
   *       <dt>
   *         string <var>url_logo</var>
   *       </dt>
   *       <dd>
   *         Image URL.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string <var>k_staff</var>
   *   </dt>
   *   <dd>
   *     Staff key, primary key in {@link \RsStaffSql}.
   *   </dd>
   *   <dt>
   *     string <var>html_firstname</var>
   *   </dt>
   *   <dd>
   *     Staff member's first name.
   *   </dd>
   *   <dt>
   *     string <var>html_lastname</var>
   *   </dt>
   *   <dd>
   *     Staff member's last name.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_staff;

  /**
   * Start date of ste session in MySQL format in GMT.
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
   * Type of note. One of {@link \WellnessLiving\Wl\Visit\Note\Sid\NoteSid} constants. <tt>false</tt> if notes not allowed.
   *
   * @get result
   * @var int|false
   */
  public $id_note;

  /**
   * Service type, one of {@link \WellnessLiving\WlServiceSid}.
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
   * Class identifier, primary key in {@link \RsClassSql}. Not empty if service is class/event reservation.
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
   * Location identifier, primary key in {@link \RsLocationSql}.
   *
   * @get result
   * @var string
   */
  public $k_location;

  /**
   * Resource identifier, primary key in {@link \RsResourceSql}. Not empty if service is asset reservation.
   *
   * @get result
   * @var string
   */
  public $k_resource;

  /**
   * Service identifier, primary key in {@link \RsServiceSql}. Not empty if service is appointment reservation.
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
   * The security token.
   *
   * @get get
   * @var string
   */
  public $text_token = '';
}

?>