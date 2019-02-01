<?php

namespace WellnessLiving\Wl\Book\Process\Info;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Book\WlBookModeSid;

/**
 * Booking Wizard for page "Class and Location".
 */
class InfoModel extends WlModelAbstract
{
  /**
   * IDs of user's activity.
   *
   * @post result
   * @var array
   */
  public $a_login_activity = [];

  /**
   * List of assets which are being booked. Every element has next keys:
   * <ul><li>Number <tt>i_index</tt> Number of asset. Actual for assets with quantity greater <tt>1</tt>.</li>
   * <li>String <tt>k_resource</tt> ID of asset.</li></ul>
   *
   * @post post
   * @var array
   */
  public $a_resource = [];

  /**
   * List of all sessions of class which can be booked together. Every element has next keys:
   * <ul><li>String <tt>dt_date</tt> Date/time when session starts. In MySQL format. In GMT.</li>
   * <li>Boolean <tt>is_select</tt> <tt>true</tt> if this session should be selected when page is initialized;
   *   <tt>false</tt> otherwise.
   * </li>
   * <li>String <tt>k_class_period</tt> ID of session in database.</li>
   * <li>String <tt>s_location</tt> Title of location where session is occurred.</li>
   * <li>String <tt>s_start</tt> Date/time when session starts. In human readable format.
   *   In timezone of location.
   * </li></ul>
   *
   * @get result
   * @var array
   */
  public $a_session_all = [];

  /**
   * Selected sessions.
   *
   * Fields - IDs of sessions in database.
   * Values - arrays of date/time when session is occurred. In MySQL format. In GMT.
   *
   * <tt>null</tt> if is not set.
   *
   * @post post
   * @var array
   */
  public $a_session_select = null;

  /**
   * Staff who conduct session. Every element has keys:
   * <ul><li>{} <tt>a_logo</tt> Staff photo:
   *   <ul><li>Number <tt>i_height</tt> Height.</li>
   *   <li>Number <tt>i_width</tt> Width.</li>
   *   <li>String <tt>s_url</tt> URL.</li></ul>
   *   </li><li>String <tt>s_family</tt> 1st letter of staff member surname.</li>
   *   <li>String <tt>s_staff</tt> Staff member name.</li>
   * </ul>
   *
   * @get result
   * @var array
   */
  public $a_staff = [];

  /**
   * IDs of books are made.
   *
   * @post result
   * @var array
   */
  public $a_visit = [];

  /**
   * Date/time of the session that user is booking now.
   * In MySQL format. In GMT.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $dt_date_gmt = null;

  /**
   * Date/time of the session that user is booking now.
   * In MySQL format. In local timezone.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_date_local = null;

  /**
   * Text of contract which user needs to agree before book this session.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $html_contract = null;

  /**
   * Special instructions for class.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $html_special = null;

  /**
   * Duration of session.
   * In number of minutes.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var int|null
   */
  public $i_duration = null;

  /**
   * WellnessLiving mode type, one of {@link \WellnessLiving\Wl\Book\WlBookModeSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_mode = WlBookModeSid::APP_FRONTEND;

  /**
   * Does user agree liability release?
   * <tt>true</tt> - user agrees; <tt>false</tt> - user does not agree or agreement not required.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var bool
   */
  public $is_agree = false;

  /**
   * <tt>true</tt> if need next steps of wizard (need to purchase something to book selected session);
   * <tt>false</tt> if no need next steps (all that need was already bought).
   *
   * @post result
   * @var bool
   */
  public $is_next = false;

  /**
   * ID of session which is booked.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * Class title.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_class = null;

  /**
   * Location address.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_location_address = null;

  /**
   * Location title.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_location_title = null;

  /**
   * Time when session takes place.
   * In local timezone.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_time = null;

  /**
   * ID of a user who is making the book.
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