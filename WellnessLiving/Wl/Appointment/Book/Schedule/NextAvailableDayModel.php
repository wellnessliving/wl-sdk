<?php

namespace WellnessLiving\Wl\Appointment\Book\Schedule;

use WellnessLiving\Core\a\AGenderSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns next day with available.
 *
 * @method WlModelRequest get() Finds and returns the next available date for appointment booking starting from the given date.  Searches forward from the specified start date until it finds a day with at least one available  time slot for the given service, location, and optional staff member. Returns the first available  date so the client side can pre-select it in the booking calendar. This request may take longer  than usual on production and uses an extended execution time limit.
 */
class NextAvailableDayModel extends WlModelAbstract
{
  /**
   * List of user keys to book appointments.
   * There may be empty values in this list, which means that this is a walk-in.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * Start date to search next available date in MySQL format. If empty, the search will start from the current date.
   *
   * @get get,result
   * @var string
   */
  public $dt_date = '';

  /**
   * Next available date in MySQL format.
   *
   * @get result
   * @var string
   */
  public $dt_next = '';

  /**
   * Maximum number of clients that can simultaneously book this service.
   * `null` for asset bookings where this limit does not apply.
   *
   * @get result
   * @var int|null
   */
  public $i_capacity = null;

  /**
   * Maximum number of clients that can be placed on the waitlist for this service.
   * `null` if waitlist is disabled, the waitlist has no capacity limit, or for asset bookings.
   *
   * @get result
   * @var int|null
   */
  public $i_capacity_waitlist = null;

  /**
   * The duration of the asset booking or custom appointment duration in minutes. Zero in case of service predefined duration.
   * In case of back-to-back booking - custom duration of first appointment.
   *
   * @get get
   * @var int
   */
  public $i_duration = 0;

  /**
   * An index of the selected asset. `0` for booking of service or if asset is not on layout.
   *
   * @get get
   * @var int
   */
  public $i_index = 0;

  /**
   * The ID of the staff member's gender.
   * In case of back-to-back booking - staff gender of first appointment.
   * One of the {@link AGenderSid} constants. `0` means no limitations on staff gender.
   *
   * @get get
   * @var int
   */
  public $id_gender_staff = 0;

  /**
   * Determines whether multiple appointments are booked in back-to-back mode.
   *
   * @get get
   * @var bool
   */
  public $is_back_to_back = false;

  /**
   * `true` if the request is made by staff member; in this case booking policy restrictions are ignored.
   * `false` if the request is made by client; booking policy restrictions are applied.
   *
   * @get get
   * @var bool
   */
  public $is_staff = false;

  /**
   * `true` - search in all tabs.
   * `false` - search only for the selected bookable tab.
   *
   * Cannot be set simultaneously with {DayTimeApi::$k_class_tab}.
   *
   * @get get
   * @var bool
   */
  public $is_tab_all = false;

  /**
   * Whether list of available times contains slots with only waitlist booking available.
   *
   * @get result
   * @var bool
   */
  public $is_waitlist;

  /**
   * If `true`, the client is a walk-in. Otherwise, this will be `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * Current booking tab.
   * Only used for asset booking with "Allow clients to select a date and time, then the available asset" booking policy enabled.
   *
   * Cannot be set simultaneously with {DayTimeApi::$is_tab_all}.
   *
   * @get get
   * @var string|null
   */
  public $k_class_tab = null;

  /**
   * Location to show available appointment booking schedule.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * The resource key to show which days are available for booking.
   * Should be `0` in case of back-to-back booking.
   *
   * @get get
   * @var string
   */
  public $k_resource = '0';

  /**
   * The service key used for showing the available appointment booking schedule.
   * In case of back-to-back booking - service key of first appointment.
   *
   * @get get
   * @var string
   */
  public $k_service = '0';

  /**
   * Key of timezone.
   *
   * `null` if not set then use default timezone client.
   *
   * @get get
   * @var null|string
   */
  public $k_timezone = null;

  /**
   * The staff key to show what days are available for booking.
   *
   * For back-to-back booking ({@link DayTimeModel::$is_back_to_back} == `true`): array of appointments for back-to-back booking.
   * Converted to JSON string to be usable as model key. Each item is an array with next structure:
   *
   * <dl>
   *   <dt>array `a_addon`</dt>
   *   <dd>Array of appointment addons.</dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>Custom duration of the appointment in minutes. Zero in case of service predefined duration.</dd>
   * 
   *   <dt>int `id_gender_staff`</dt>
   *   <dd>Staff gender. One of {@link AGenderSid} constants. Zero mean no limitations on staff gender.</dd>
   * 
   *   <dt>string `k_service`</dt>
   *   <dd>Service key. </dd>
   * 
   *   <dt>string `k_staff`</dt>
   *   <dd>@deprecated Staff key. Zero means any available staff. </dd>
   * 
   *   <dt>string `uid_staff`</dt>
   *   <dd>Staff user key. Zero means any available staff. </dd>
   * </dl>
   * 
   * <dl>
   *   <dt>string `dtl_date`</dt>
   *   <dd>Local date and time of appointment start in MySQL format.</dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>Duration of the appointment in minutes.</dd>
   * 
   *   <dt>string `k_service`</dt>
   *   <dd>Service key. </dd>
   * 
   *   <dt>string `uid_staff`</dt>
   *   <dd>Staff user key. Zero means any available staff. </dd>
   * </dl>
   * @get get
   * @var string
   */
  public $s_appointment = '';

  /**
   * A list of service add-ons keys(encoded as JSON string).
   * In case of back-to-back booking - add-ons of first appointment.
   *
   * @get get
   * @var string
   */
  public $s_product = '';

  /**
   * The user key.
   *
   * This field is used if the client books for himself or for the relative.
   *
   * This field is incorrect to use for guest booking since in this case the client will be checked as a relative.
   *
   * In case of a group booking or a guest booking, the key of the client who is making the booking is set here.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';

  /**
   * The staff user key used for showing the available appointment booking schedule.
   * In case of back-to-back booking - staff user key of first appointment.
   * `0` means any available staff.
   *
   * @get get
   * @var string
   */
  public $uid_staff = '0';
}

?>