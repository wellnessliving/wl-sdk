<?php

namespace WellnessLiving\Wl\Appointment\Book\Schedule;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\AGenderSid;
use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of all calendar days in a specified month with
 * available and unavailable appointment bookings in the schedule.
 *
 * @deprecated Use {@link Calendar73Api}
 */
class CalendarModel extends WlModelAbstract
{
  /**
   * A list with all calendar days in the specified month with
   * available and unavailable appointment bookings in the schedule.
   *
   * @get result
   * @var array[]
   */
  public $a_date;

  /**
   * An array with a schedule of available appointment booking times.
   *
   * @get result
   * @var array
   */
  public $a_time;

  /**
   * Information about timezone.
   *
   * @get result
   * @var array
   */
  public $a_timezone_data = [];

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
   * Array with short week day's names (2 letters, i.e. 'Fr') for calendar month view. Week days order according to business's settings.
   *
   * @get result
   * @var array
   */
  public $a_week_name = [];

  /**
   * Whether previous calendar period can be shown (start of shown period later than current date).
   *
   * @get result
   * @var bool
   */
  public $can_backwards = false;

  /**
   * The date to show the available appointment booking schedule.
   *
   * @get get,result
   * @var string
   */
  public $dt_date = '';

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
   * Last day of the week. One of {@link ADateWeekSid} constants.
   *
   * @get result
   * @var int
   */
  public $i_week_end;

  /**
   * First day of the week. One of {@link ADateWeekSid} constants.
   *
   * @get result
   * @var int
   */
  public $i_week_start;

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
   * If calendar should be displayed in month view mode.
   *
   * @get get
   * @var bool
   */
  public $is_month_view = true;

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
   * `true` - return service categories that have no staff members able to conduct them.
   * `false` - return only service categories that have staff members able to conduct them.
   *
   * @get get
   * @var bool
   */
  public $is_unavailable = false;

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
   * The staff member key used for showing the available appointment booking schedule.
   * In case of back-to-back booking - staff key of first appointment.
   * `0` means any available staff.
   *
   * 
   * @get get
   * @var string
   * @deprecated This property will be removed in the future. Use {@link DayTimeModel::$uid_staff} instead.
   */
  public $k_staff = '0';

  /**
   * Key of timezone.
   *
   * `null` if not set to use client's profile timezone.
   *
   * @get get
   * @var string|null
   */
  public $k_timezone = null;

  /**
   * The staff key to show what days are available for booking.
   *
   * For back-to-back booking ({@link DayTimeModel::$is_back_to_back} == `true`): array of appointments for back-to-back booking.
   * Converted to JSON string to be usable as model key. Each item is an array with next structure:
   *
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