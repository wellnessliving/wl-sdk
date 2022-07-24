<?php

namespace WellnessLiving\Wl\Book\Process\Info;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Book\WlBookModeSid;

/**
 * The booking wizard for the "Class and Location" page.
 */
class InfoModel extends WlModelAbstract
{
  /**
   * The IDs of users' activity.
   *
   * @post result
   * @var array
   */
  public $a_login_activity = [];

  /**
   * A list of assets which are being booked. Every element has the next keys:
   * <ul><li>Number <tt>i_index</tt> Number of asset. Actual for assets with quantity greater <tt>1</tt>.</li>
   * <li>String <tt>k_resource</tt> ID of asset.</li></ul>
   *
   * @post post
   * @var array
   */
  public $a_resource = [];

  /**
   * A list of all class sessions which can be booked together. Every element has the next keys:
   * <ul><li>String <tt>dt_date</tt> Date/time when session starts in MySQL format and in GMT.</li>
   * <li>Boolean <tt>is_select</tt> <tt>true</tt> if this session should be selected when page is initialized;
   *   <tt>false</tt> otherwise.
   * </li>
   * <li>String <tt>k_class_period</tt> The ID of the session in the database.</li>
   * <li>String <tt>s_location</tt> The name of the location where the session occurred.</li>
   * <li>String <tt>s_start</tt> The date/time when the session starts in human readable format.
   *   In the timezone of location.
   * </li></ul>
   *
   * @get result
   * @var array
   */
  public $a_session_all = [];

  /**
   * The selected sessions.
   *
   * Fields - The IDs of the sessions in the database.
   * Values - Arrays of date/time when the session occurred in MySQL format and in GMT.
   *
   * @post post
   * @var array
   */
  public $a_session_select = [];

  /**
   * The staff member conducting the session. Every element has the next keys:
   * <ul><li>{} <tt>a_logo</tt> Staff photo:
   *   <ul><li>Number <tt>i_height</tt> Height.</li>
   *   <li>Number <tt>i_width</tt> Width.</li>
   *   <li>String <tt>s_url</tt> URL.</li></ul>
   *   </li><li>String <tt>s_family</tt> The first letter of staff member surname.</li>
   *   <li>String <tt>s_staff</tt> The staff member's name.</li>
   * </ul>
   *
   * @get result
   * @var array
   */
  public $a_staff = [];

  /**
   * The IDs of the bookings made.
   *
   * @post result
   * @var array
   */
  public $a_visit = [];

  /**
   * The date/time of the session the user is booking in MySQL format and GMT.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $dt_date_gmt = null;

  /**
   * The date/time of the session the user is booking in MySQL format in the location's timezone.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_date_local = null;

  /**
   * The text of the contract to which the user must agree before book this session.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $html_contract = null;

  /**
   * The special instructions for the class.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $html_special = null;

  /**
   * The duration of the session in minutes.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var int|null
   */
  public $i_duration = null;

  /**
   * The WellnessLiving mode type, one of {@link \WellnessLiving\Wl\Book\WlBookModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = WlBookModeSid::APP_FRONTEND;

  /**
   * Does user agree to the liability release?
   * <tt>true</tt> - user agrees; <tt>false</tt> - user doesn't agree or the agreement isn't required.
   *
   * @post post
   * @var bool
   */
  public $is_agree = 0;

  /**
   * <tt>true</tt> if next steps of the wizard needed (need to purchase something to book the selected session);
   * <tt>false</tt> if no need for next steps (all that's needed already purchased).
   *
   * @post result
   * @var bool
   */
  public $is_next = false;

  /**
   * The ID of session which is booked.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * The class title.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_class = null;

  /**
   * The location address.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_location_address = null;

  /**
   * The location title.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_location_title = null;

  /**
   * The time when the session takes place in the location's timezone.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_time = null;

  /**
   * The ID of the user making the booking.
   * The ID of the user making the booking.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>