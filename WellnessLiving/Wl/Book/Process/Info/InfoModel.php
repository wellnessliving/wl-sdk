<?php

namespace WellnessLiving\Wl\Book\Process\Info;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Book\WlBookModeSid;

/**
 * An endpoint that offers functionality for the class booking wizard on the "Class and Location" page.
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
   * A list of assets being booked. Every element has the next keys:
   * <dl><dt>int <var>i_index</var></dt><dd>The number of asset(s). This is the actual number for assets with quantity greater <tt>1</tt>.</dd>
   * <dt>string <var>k_resource</var></dt><dd>The ID of asset.</dd></dl>
   *
   * @post post
   * @var array
   */
  public $a_resource = [];

  /**
   * A list of all class sessions that can be booked together. Every element has the next keys:
   * <dl>
   * <dt>string <var>dt_date</var></dt><dd>The date/time when session starts in MySQL format and in GMT.</dd>
   * <dt>boolean <var>is_select</var></dt><dd><tt>true</tt> if this session should be selected when page is initialized;
   *   <tt>false</tt> if otherwise.</dd>
   * <dt>string <var>k_class_period</var></dt><dd>The ID of the session in the database.</dd>
   * <dt>string <var>s_location</var></dt><dd>The name of the location where the session occurred.</dd>
   * <dt>string <var>s_start</var></dt><dd>The date/time when the session starts in human-readable format.
   *   Returned in the time zone of the location.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_session_all = [];

  /**
   * The selected sessions.
   *
   * <b>Fields -</b> The IDs of the sessions in the database.
   *
   * <b>Values -</b> Arrays of date/time when the session occurred in MySQL format and in GMT.
   *
   * @post post
   * @var array
   */
  public $a_session_select = [];

  /**
   * The staff member conducting the session. Every element has the next keys:
   * <dl>
   * <dt>array <var>a_logo</var></dt><dd>The staff member photo:
   *   <dl>
   *     <dt>int <var>i_height</var></dt><dd>The image height.</dd>
   *     <dt>int <var>i_width</var></dt><dd>The image width.</dd>
   *     <dt>string <var>s_url</var></dt><dd>The image URL.</dd>
   *   </dl></dd>
   * <dt>string <var>s_family</var></dt><dd>The first letter of staff member surname.</dd>
   * <dt>string <var>s_staff</var></dt><dd>The staff member's name.</dd>
   * </dl>
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
   * This will be `null` if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $dt_date_gmt = null;

  /**
   * The date/time of the session the user is booking in MySQL format in the location's timezone.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_date_local = null;

  /**
   * The text of the contract to which the user must agree before book this session.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $html_contract = null;

  /**
   * The special instructions for the class.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $html_special = null;

  /**
   * The duration of the session in minutes.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var int|null
   */
  public $i_duration = null;

  /**
   * The WellnessLiving mode type, one of the {@link \WellnessLiving\Wl\Book\WlBookModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = WlBookModeSid::APP_FRONTEND;

  /**
   * Determines if the user has agreed to the liability release.
   * If `true`, the user has agreed. Otherwise, this will be `false` if the user hasn't agreed or the agreement isn't required.
   *
   * @post post
   * @var bool
   */
  public $is_agree = 0;

  /**
   * <b>true</b> - next steps of the wizard are needed (for example, to purchase something to book the selected session).
   *
   * <b>false</b> - no need for next steps (all that's needed has already been purchased).
   *
   * @post result
   * @var bool
   */
  public $is_next = false;

  /**
   * The ID of session booked.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * The class title.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_class = null;

  /**
   * The location address.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_location_address = null;

  /**
   * The location title.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_location_title = null;

  /**
   * The time when the session takes place in the location's time zone.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_time = null;

  /**
   * The ID of the user making the booking.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>