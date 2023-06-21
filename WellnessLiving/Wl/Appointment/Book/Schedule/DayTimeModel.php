<?php

namespace WellnessLiving\Wl\Appointment\Book\Schedule;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves a list of information about the booking schedule for available appointments.
 */
class DayTimeModel extends WlModelAbstract
{
  /**
   * An array with a schedule of available appointment booking times.
   * <dl>
   *   <dt>string <var>dt_date</var></dt>
   *   <dd>Date of the calendar.</dd>
   *   <dt>int <var>i_count</var></dt>
   *   <dd>Amount of clients that have already booked this appointment.</dd>
   *   <dt>int <var>i_time</var></dt>
   *   <dd>Integer representation of appointment schedule time.</dd>
   *   <dt>bool <var>is_waitlist</var></dt>
   *   <dd>Whether the appointment can be booked only in a wait list.</dd>
   *   <dt>string <var>k_staff</var></dt>
   *   <dd>If this time is already occupied by any client and staff member (but service capacity is not exhausted),
   *       this key contains key of staff member (primary key in {@link \RsStaffSql} table). Otherwise `0`.</dd>
   *   <dt>string <var>s_title</var></dt>
   *   <dd>String representation of appointment schedule time.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_time;

  /**
   * List of user keys to book appointments - primary keys in {@link \PassportLoginSql}.
   * There may be empty values in this list, which means that this is a walk-in.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * The date to show the available appointment booking schedule.
   *
   * @get get,result
   * @var string
   */
  public $dt_date = '';

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
   * One of the {@link \WellnessLiving\Core\a\AGenderSid} constants. `0` means no limitations on staff gender.
   *
   * @get get
   * @var int
   */
  public $id_gender_staff = 0;

  /**
   * Whether multiple appointments booked in back-to-back mode.
   *
   * @get get
   * @var bool
   */
  public $is_back_to_back = false;

  /**
   * <tt>true</tt> if the request is made by staff member; in this case booking policy restrictions are ignored.
   * <tt>false</tt> if the request is made by client; booking policy restrictions are applied.
   *
   * @get get
   * @var bool
   */
  public $is_staff = false;

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
   * `true` if client is walk-in, otherwise `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

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
   * @get get
   * @var string
   */
  public $k_staff = '0';

  /**
   * Key of timezone.
   *
   * `null` if not set then use default timezone client {@link Wl\Profile\Timezone\ProfileTimezone::createInBusiness()}.
   *
   * @get get
   * @var null|string
   */
  public $k_timezone;

  /**
   * Empty string for single appointment/asset booking.
   *
   * For back-to-back booking ({@link \Wellnessliving\Wl\Appointment\Book\Schedule\DayTimeModel::$is_back_to_back} == `true`): array of appointments for back-to-back booking.
   * Converted to JSON string to be usable as model key. Each item is an array with next structure:
   * <dl>
   * <dt>array <var>a_addon</var></dt><dd>Array of appointment addons. Each value is primary key in {@link \RsShopProductSql} table.</dd>
   * <dt>int <var>i_duration</var></dt><dd>Custom duration of the appointment in minutes. Zero in case of service predefined duration.</dd>
   * <dt>int <var>id_gender_staff</var></dt><dd>Staff gender. One of {@link \WellnessLiving\Core\a\AGenderSid} constants. Zero mean no limitations on staff gender.</dd>
   * <dt>string <var>k_service</var></dt><dd>Service key.</dd>
   * <dt>string <var>k_staff</var></dt><dd>Staff key. Zero means any available staff.</dd>
   * </dl>
   *
   * For multiple appointment booking ({@link \Wellnessliving\Wl\Appointment\Book\Schedule\DayTimeModel::$is_back_to_back} == `false`): array of previously booked appointments.
   * Converted to JSON string to be usable as model key. Each item is an array with next structure:
   * <dl>
   * <dt>string <var>dtl_date</var></dt><dd>Local date and time of appointment start in MySQL format.</dd>
   * <dt>int <var>i_duration</var></dt><dd>Duration of the appointment in minutes.</dd>
   * <dt>string <var>k_service</var></dt><dd>Service key.</dd>
   * </dl>
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
   * User to get information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>