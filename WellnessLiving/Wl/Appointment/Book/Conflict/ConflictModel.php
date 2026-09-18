<?php

namespace WellnessLiving\Wl\Appointment\Book\Conflict;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Appointment\Book\Finish\FinishModel;

/**
 * Appointment booking conflicts data.
 *
 * @deprecated New version {@link Conflict56Model} should be used instead.
 *
 * @method WlModelRequest get() Gets booking conflicts.  Validates the requested date, duration, location, staff member, and either the selected  asset or service, then checks for scheduling conflicts (staff working hours, holidays,  asset availability) and, for services with an age restriction, for client age conflicts.  The result is written to {@link \Wl\Appointment\Book\Conflict\Conflict56Api::$a_conflict}.
 */
class ConflictModel extends WlModelAbstract
{
  /**
 * List of appointment booking conflicts.
 *
 * <dl>
 *   <dt>string[] `a_resource`</dt>
 *   <dd>Titles of assets that cause the conflict. Not empty only if the conflict is caused by assets.</dd>
 * 
 *   <dt>string `dt_date_global`</dt>
 *   <dd>Date and time of the conflict in UTC, in MySQL format.</dd>
 * 
 *   <dt>string `dt_date_local`</dt>
 *   <dd>Date and time of the conflict in the location timezone, in MySQL format.</dd>
 * 
 *   <dt>string `html_title`</dt>
 *   <dd>Message describing a client age restriction conflict, already HTML-escaped.</dd>
 * 
 *   <dt>bool `is_age_conflict`</dt>
 *   <dd>`true` if the conflict is caused by a client age restriction.</dd>
 * 
 *   <dt>bool `is_holiday`</dt>
 *   <dd>`true` if the conflict is caused by a holiday, `false` for another reason.</dd>
 * 
 *   <dt>bool `is_staff_conflict`</dt>
 *   <dd>`true` if the conflict is caused by the staff member's working hours, `false` for another reason.</dd>
 * 
 *   <dt>string `k_staff`</dt>
 *   <dd>Staff member key, kept only for applications still using the deprecated legacy staff identifier.</dd>
 * 
 *   <dt>string `text_staff`</dt>
 *   <dd>Name of the staff member who conducts the appointment.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID of the client whose age restriction caused the conflict.</dd>
 * 
 *   <dt>string `uid_staff`</dt>
 *   <dd>Staff member user ID resolved for the conflict entry.</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_conflict = [];

  /**
 * List of add-ons.
 *
 * @get get
 * @var string[]
 */
  public $a_product = [];

  /**
 * Data of appointment repeat.
 * See key <tt>a_repeat</tt> of {@link FinishModel::$a_book_data} for details.
 *
 * <tt>null</tt> if repeat is not required. Empty array if the appointment is not recurring, otherwise: 
 *
 * <dl>
 *   <dt>int[] `a_week`</dt>
 *   <dd>
 *     Days of week when the appointment repeats. One of {@link ADateWeekSid} constants.
 *    Empty if the appointment does not repeat weekly.
 *   </dd>
 * 
 *   <dt>string `dl_end`</dt>
 *   <dd>Date when the repeat cycle stops. Empty if the repeat cycle does not stop at a certain date.</dd>
 * 
 *   <dt>int `i_occurrence`</dt>
 *   <dd>
 *     Number of occurrences after which the repeat cycle stops. Empty if the repeat cycle does
 *    not stop after a certain number of occurrences.
 *   </dd>
 * 
 *   <dt>int `i_period`</dt>
 *   <dd>Frequency of the repeat cycle.</dd>
 * 
 *   <dt>int `id_period`</dt>
 *   <dd>Measurement unit of `i_period`. One of {@link ADurationSid} constants.</dd>
 * 
 *   <dt>bool `is_month`</dt>
 *   <dd>
 *     `true` if the appointment repeats monthly on the same date, `false` if it repeats
 *    monthly on the same day of the week, `null` if the appointment does not repeat monthly.
 *   </dd>
 * </dl>
 * @get get
 * @var null|array
 */
  public $a_repeat = null;

  /**
 * List of assets.
 *
 * May be specified for service booking only.
 *
 * <dl>
 *   <dt>int `i_index`</dt>
 *   <dd>Asset index in layout.</dd>
 * 
 *   <dt>string `k_resource`</dt>
 *   <dd>Asset key. </dd>
 * </dl>
 * @get get
 * @var array[]
 */
  public $a_resource = [];

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
 * Date/time of appointment. In location timezone.
 *
 * @get get
 * @var string
 */
  public $dt_date = '';

  /**
 * Appointment duration.
 * Must be specified for asset booking only.
 *
 * @get get
 * @var int
 */
  public $i_duration = 0;

  /**
 * If `true`, the client is a walk-in. Otherwise, this will be `false`.
 *
 * @get get
 * @post get
 * @var bool
 */
  public $is_walk_in = false;

  /**
 * Appointment key. Empty for a new appointment.
 *
 * @get get
 * @var string
 */
  public $k_appointment = '0';

  /**
 * Location to show available appointment booking schedule.
 *
 * @get get,result
 * @post get
 * @var string
 */
  public $k_location = '0';

  /**
 * Asset key. Empty for service booking.
 *
 * @get get
 * @var string
 */
  public $k_resource = '0';

  /**
 * Service key. Empty for asset booking.
 *
 * @get get
 * @var string
 */
  public $k_service = '0';

  /**
 * Staff member key.
 *
 * @get get
 * @var string
 * @deprecated Use {@link Conflict56Model::$uid_staff}.
 */
  public $k_staff = '0';

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
 * Staff member user ID.
 *
 * @get get
 * @var string
 */
  public $uid_staff = '0';
}

?>