<?php

namespace WellnessLiving\Wl\Appointment\Info;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Appointment\WlAppointmentPaySid;

/**
 * Appointment information.
 *
 * @method WlModelRequest get() Gets information about appointment.  Returns detailed information about the specified appointment, including service details, staff member,  date and time in the location's timezone, booking status, client information, and any associated  assets or add-ons. Access is validated against the current user's permissions.
 */
class InfoModel extends WlModelAbstract
{
  /**
   * Next appointment data, or empty array if there are no appointments in the future:
   *
   * <dl>
   *   <dt>string `dt_date_local`</dt>
   *   <dd>Start date and time of the next appointment in local time in MySQL format.</dd>
   * 
   *   <dt>bool `has_note`</dt>
   *   <dd>`true` if visit has a note, `false` otherwise.</dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>Duration of the next appointment in minutes.</dd>
   * 
   *   <dt>bool `can_view`</dt>
   *   <dd>`true` if employees (staff) can view this appointment, `false` otherwise.</dd>
   * 
   *   <dt>string `k_appointment`</dt>
   *   <dd>Next appointment key. </dd>
   * 
   *   <dt>string `k_visit`</dt>
   *   <dd>Visit key of next appointment.</dd>
   * 
   *   <dt>string `text_appointment_title`</dt>
   *   <dd>Title of next appointment.</dd>
   * 
   *   <dt>string `text_staff_name`</dt>
   *   <dd>Full staff name or empty if no staff assigned.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_next;

  /**
   * Previous appointment data, or empty array if there are no appointments in the past:
   *
   * <dl>
   *   <dt>string `dt_date_local`</dt>
   *   <dd>Start date and time of the previous appointment in local time in MySQL format.</dd>
   * 
   *   <dt>bool `has_note`</dt>
   *   <dd>`true` if visit has a note, `false` otherwise.</dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>Duration of the previous appointment in minutes.</dd>
   * 
   *   <dt>bool `can_view`</dt>
   *   <dd>`true` if employees (staff) can view this appointment, `false` otherwise.</dd>
   * 
   *   <dt>string `k_appointment`</dt>
   *   <dd>Previous appointment key. </dd>
   * 
   *   <dt>string `k_visit`</dt>
   *   <dd>Visit key of previous appointment.</dd>
   * 
   *   <dt>string `text_appointment_title`</dt>
   *   <dd>Title of previous appointment.</dd>
   * 
   *   <dt>string `text_staff_name`</dt>
   *   <dd>Full staff name or empty if no staff assigned.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_previous;

  /**
    * List of questions and answers:
    *
    * <dl>
    *   <dt>int `i_size`</dt>
    *   <dd>Size of rows for answer.</dd>
    * 
    *   <dt>bool `is_multiple`</dt>
    *   <dd>`true` if `i_size` greater than 1, `false` otherwise. Can be empty if answer is loaded.</dd>
    * 
    *   <dt>string `s_answer`</dt>
    *   <dd>Answer for `s_question`.</dd>
    * 
    *   <dt>string `s_key`</dt>
    *   <dd>Answer key.</dd>
    * 
    *   <dt>string `s_question`</dt>
    *   <dd>Question.</dd>
    * </dl>
    * @get result
    * @var array[]
   */
  public $a_question = [];

  /**
   * Repeat settings for appointment reschedule.
   *
   * Empty array for non-recurring appointment.
   *
   * Has next keys:
   *
   * <dl>
   *   <dt>int[] `a_day`</dt>
   *   <dd>Days of week to repeat appointment. Constants from {@link ADateWeekSid}.</dd>
   * 
   *   <dt>string `dl_edit_from`</dt>
   *   <dd>Start date for range edit in location timezone.
   *   This is a current appointment date.</dd>
   * 
   *   <dt>string `dl_edit_to`</dt>
   *   <dd>
   *     End date for range edit in location timezone.
   *   This is a date of last created appointment in repeatable group.
   *   </dd>
   * 
   *   <dt>string `dl_repeat_end`</dt>
   *   <dd>
   *     Date when the repeat cycle stops, in location timezone.
   * Empty if the repeat cycle does not stop at a certain date.
   *   </dd>
   * 
   *   <dt>int `i_repeat_count`</dt>
   *   <dd>
   *     Number of occurrences after that the repeat cycle stops.
   * `0` if the repeat cycle does not stop after a certain number of occurrences.
   *   </dd>
   * 
   *   <dt>int `i_repeat_period`</dt>
   *   <dd>Frequency of the repeats. For example, `2` for every second week.</dd>
   * 
   *   <dt>int `id_repeat_duration`</dt>
   *   <dd>Measurement unit of `i_repeat_period`. One of {@link ADurationSid} constants.</dd>
   * 
   *   <dt>int `id_repeat_end`</dt>
   *   <dd>Type of repeat cycle end.</dd>
   * 
   *   <dt>bool `is_month`</dt>
   *   <dd>
   *     `true` if the appointment repeats monthly at the same date.
   * `false` if the appointment repeats monthly at the same week day or does not repeat monthly.
   *   </dd>
   * 
   *   <dt>string `s_time`</dt>
   *   <dd>
   *     Current appointment local start time in MySQL time format.
   *  This time is intended to be used to fill in empty fields on the form.
   *  <p><b>WARNING!</b></p>
   *  <p>If the session you are starting the reschedule with was previously changed, its time may NOT match
   *  the time of the remaining sessions.</p>
   *   </dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_repeat = [];

  /**
   * List of assets used by this appointment. Each element contains: 
   *
   * <dl>
   *   <dt>int `i_color_background`</dt>
   *   <dd>Background color of the asset as an integer (RGB).</dd>
   * 
   *   <dt>int `i_color_border`</dt>
   *   <dd>Border color of the asset as an integer (RGB).</dd>
   * 
   *   <dt>int `i_index`</dt>
   *   <dd>Index of the booked asset slot.</dd>
   * 
   *   <dt>bool `is_remove`</dt>
   *   <dd>`true` if the asset was removed from the booking, `false` otherwise.</dd>
   * 
   *   <dt>string `k_resource`</dt>
   *   <dd>Asset key. </dd>
   * 
   *   <dt>string `k_resource_type`</dt>
   *   <dd>Asset category key. </dd>
   * 
   *   <dt>string `s_resource`</dt>
   *   <dd>Asset name.</dd>
   * 
   *   <dt>string `s_resource_type`</dt>
   *   <dd>Asset category name.</dd>
   * 
   *   <dt>string `text_resource_alias`</dt>
   *   <dd>Display alias for the asset slot, if configured.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_resource;

  /**
   * List of appointment add-ons. Every element has next keys:
   *
   * <dl>
   *   <dt>string[] `a_login_product`</dt>
   *   <dd>
   *     List of purchased product keys. Empty if no products were purchased. Each element:
   *     <dl>
   *       <dt>string `k_login_product`</dt>
   *       <dd>Purchased product key. </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `k_login_product`</dt>
   *   <dd>Deprecated, always `null`.</dd>
   * 
   *   <dt>string `k_shop_product`</dt>
   *   <dd>Primary key of add-on.</dd>
   * 
   *   <dt>string `k_shop_product_option`</dt>
   *   <dd>Add-on option. </dd>
   * 
   *   <dt>string `m_amount`</dt>
   *   <dd>Price that it adds to an appointment.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_shop_product_option;

  /**
   * Date/time of appointment in location timezone.
   *
   * @get result
   * @var string
   */
  public $dt_date_local;

  /**
   * Appointment duration (in minutes).
   *
   * @get result
   * @var int|null
   */
  public $i_duration;

  /**
   * Index of booked asset.
   *
   * @get result
   * @var int|null
   */
  public $i_index;

  /**
   * Status of appointment payment. One of {@link WlAppointmentPaySid} constants.
   *
   * @get result
   * @var int
   */
  public $id_appointment_pay;

  /**
   * Appointment key to get information for.
   *
   * @get get
   * @var string
   */
  public $k_appointment = '0';

  /**
   * Location key.
   *
   * @get result
   * @var string
   */
  public $k_location;

  /**
   * Purchased promotion which provides this appointment.
   *
   * @get result
   * @var string|null
   */
  public $k_login_promotion;

  /**
   * Asset key.
   *
   * @get result
   * @var string|null
   */
  public $k_resource;

  /**
   * Asset category key.
   *
   * @get result
   * @var string|null
   */
  public $k_resource_type;

  /**
   * Service key.
   *
   * @get result
   * @var string|null
   */
  public $k_service;

  /**
   * Service category key.
   *
   * @get result
   * @var string|null
   */
  public $k_service_category;

  /**
   * Purchased drop-in which provides this appointment.
   *
   * @get result
   * @var string|null
   */
  public $k_session_pass;

  /**
   * Staff member who conducts this appointment.
   *
   * Deprecated: returned only for a limited list of third-party apps to keep backward compatibility.
   * Use `uid_staff` instead.
   *
   * @get result
   * @var string
   */
  public $k_staff;

  /**
   * Title of the appointment.
   *
   * @get result
   * @var string
   */
  public $text_title;

  /**
   * User for whom this appointment was booked.
   *
   * @get result
   * @var string
   */
  public $uid_appointment;

  /**
   * Staff member who conducts this appointment.
   *
   * @get result
   * @var string|null
   */
  public $uid_staff;
}

?>