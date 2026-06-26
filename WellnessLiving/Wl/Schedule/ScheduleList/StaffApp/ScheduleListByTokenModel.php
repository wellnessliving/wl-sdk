<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffApp;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Visit\WlVisitSid;
use WellnessLiving\Wl\WlServiceSid;

/**
 * An endpoint that returns information about a business schedule for a specified date.
 * Version of {@link ScheduleListModel} for access validation by security token.
 *
 * @method WlModelRequest get() Gets schedule of business {@link \Wl\Schedule\ScheduleList\StaffApp\ScheduleListApi::$k_business} for day {@link \Wl\Schedule\ScheduleList\StaffApp\ScheduleListApi::$dt_date}.  Returns all classes and appointments scheduled for the given business on the specified date, sorted chronologically. Supports both single-day and date-range modes, and includes full session details such as staff, visit counts, assets, and class images.
 */
class ScheduleListByTokenModel extends WlModelAbstract
{
  /**
   * Configuration options for schedule.
   * Key is option name, value is boolean.
   *
   * May contain the following keys:
   *
   * <dl>
   *   <dt>bool `is_appointment_cancel_recurring`</dt>
   *   <dd>If needed to show recurring canceled appointments on schedule.</dd>
   * 
   *   <dt>bool `is_appointment_cancel_single`</dt>
   *   <dd>If needed to show single canceled appointments on schedule.</dd>
   * 
   *   <dt>bool `is_class_cancel`</dt>
   *   <dd>If needed to show canceled classes on schedule.</dd>
   * </dl>
   * @get get
   * @var array
   */
  public $a_config = [];

  /**
   * The sessions present on the business schedule. These are sorted chronologically in ascending order.
   * Every element has the following keys:
   *
   * <dl>
   *   <dt>string[] `a_note`</dt>
   *   <dd>List of notes.</dd>
   * 
   *   <dt>array `a_appointment_visit_info`</dt>
   *   <dd>
   *     Additional visit information about this appointment. Empty array if it's a class.
   *     <dl>
   *       <dt>int `id_visit`</dt>
   *       <dd>Visit id. One of {@link WlVisitSid} constants.</dd>
   * 
   *       <dt>bool `is_confirmed`</dt>
   *       <dd>`true` means that appointment was requested and confirmed by the staff.</dd>
   * 
   *       <dt>bool `is_deny`</dt>
   *       <dd>`true` means that appointment was requested and denied by the staff.</dd>
   * 
   *       <dt>bool `is_notify_request_accept`</dt>
   *       <dd>`true` means that the client will receive a notification, if appointment will be confirmed by the staff.</dd>
   * 
   *       <dt>bool `is_notify_request_deny`</dt>
   *       <dd>`true` means that the client will receive a notification, if appointment will be denied by the staff.</dd>
   * 
   *       <dt>bool `is_request`</dt>
   *       <dd>`true` means that appointment was requested, but not confirmed by the staff.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string[] `a_resource`</dt>
   *   <dd>A list of assets involved in the session.
   * </dd>
   * 
   *   <dt>string[] `a_staff`</dt>
   *   <dd>
   *     A list of staff members who will conduct the session.
   * 
   * Deprecated, use <var>a_staff_list</var> instead.
   *   </dd>
   * 
   *   <dt>array `a_staff_info`</dt>
   *   <dd>
   *     Information about staff members who conduct this session. The keys are .
   * Values are array with data:
   *     <dl>
   *       <dt>string `text_staff`</dt>
   *       <dd>Staff full name.</dd>
   * 
   *       <dt>bool `is_staff_change`</dt>
   *       <dd><tt>true</tt> means staff is substituted, <tt>false</tt> simple staff member.</dd>
   * 
   *       <dt>string `k_staff`</dt>
   *       <dd>Staff key. </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string[] `a_user`</dt>
   *   <dd>For appointments, this is a list of the names of users who are scheduled to attend the session.</dd>
   * 
   *   <dt>string[] `a_virtual_location`</dt>
   *   <dd>List of virtual locations. Each value is .</dd>
   * 
   *   <dt>string `dt_date`</dt>
   *   <dd>The date/time of the session in UTC.</dd>
   * 
   *   <dt>string `dt_date_cancel`</dt>
   *   <dd>The date/time when the session was canceled in UTC. Only used for appointments.</dd>
   * 
   *   <dt>string `dt_date_local`</dt>
   *   <dd>The date/time of the session in local time.</dd>
   * 
   *   <dt>int `i_book`</dt>
   *   <dd>The number of clients booked into the session.</dd>
   * 
   *   <dt>int `i_capacity`</dt>
   *   <dd>The maximum capacity of the session.</dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>The duration of the session in minutes.</dd>
   * 
   *   <dt>int `i_padding_after`</dt>
   *   <dd>The padding time after the session in minutes. Only used for appointments.</dd>
   * 
   *   <dt>int `i_padding_before`</dt>
   *   <dd>The padding time before the session in minutes. Only used for appointments.</dd>
   * 
   *   <dt>int `i_start`</dt>
   *   <dd>
   *     The start time in minutes after midnight.
   * For example, a class starting at 10:30 in the morning local time will have an `i_start` value of 630.
   *   </dd>
   * 
   *   <dt>int `i_wait`</dt>
   *   <dd>Count clients on waitlist.</dd>
   * 
   *   <dt>int `id_option`</dt>
   *   <dd>
   *     Appointment title display style.
   *  Set only for appointments, for others it will be equal to 0.
   *
   *   </dd>
   * 
   *   <dt>int `id_service`</dt>
   *   <dd>The ID of the service type. One of {@link WlServiceSid} constants.</dd>
   * 
   *   <dt>bool `is_arrive`</dt>
   *   <dd>
   *     For appointments: <tt>true</tt> if user has checked-in; <tt>false</tt> otherwise.
   * For classes always <tt>null</tt>.
   *   </dd>
   * 
   *   <dt>bool `is_pay`</dt>
   *   <dd>
   *     For appointments: <tt>true</tt> if appointment is paid; <tt>false</tt> otherwise.
   * For classes always <tt>null</tt>.
   *   </dd>
   * 
   *   <dt>bool `is_repeat`</dt>
   *   <dd>
   *     For appointments: <tt>true</tt> if appointment is recurring; <tt>false</tt> otherwise.
   * For classes always <tt>null</tt>.
   *   </dd>
   * 
   *   <dt>string `k_appointment`</dt>
   *   <dd>
   *     The appointment key. 
   * If the session isn't an appointment, this will be `0`.
   *   </dd>
   * 
   *   <dt>string `dt_confirm`</dt>
   *   <dd>
   *     Confirmation date for appointment in MySQL format. Will be zero date + time in case appointment
   * is not yet confirmed by client.
   *   </dd>
   * 
   *   <dt>string `k_class`</dt>
   *   <dd>
   *     The class key. 
   * If the session isn't a class, this will be `0`.
   *   </dd>
   * 
   *   <dt>string `k_class_period`</dt>
   *   <dd>
   *     The class period key. 
   * If the session isn't a class, this will be `0`.
   *   </dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>The location key for where the session takes place. </dd>
   * 
   *   <dt>string `k_service`</dt>
   *   <dd>
   *     This is the key of the appointment type, while `k_appointment` is the specific instance.
   * 
   * For other cases, this will be `0`.
   *   </dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>The name of the session.</dd>
   * 
   *   <dt>string `text_alert`</dt>
   *   <dd>Alert message.</dd>
   * 
   *   <dt>string `text_color_background`</dt>
   *   <dd>The background color in hex representation as used on WellnessLiving.</dd>
   * 
   *   <dt>string `text_color_border`</dt>
   *   <dd>The border color in hex representation as used on WellnessLiving.</dd>
   * 
   *   <dt>bool `is_virtual_service`</dt>
   *   <dd><tt>true</tt> - If the business has at least one virtual service, <tt>false</tt> - otherwise.</dd>
   * 
   *   <dt>string `url_image`</dt>
   *   <dd>URL to image. Empty if image not exist.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_schedule;

  /**
   * The end date of the range from which the list of schedule sessions should be retrieved.
   *
   * This will be `null` if the range has no end date. If this value is used,
   * {@link ScheduleListModel::$dt_date} should not be set.
   *
   * @get get
   * @var string
   */
  public $dl_end = '';

  /**
   * The start date of the range from which the list of scheduled sessions should be retrieved.
   *
   * This will be `null` if the range has no start date. If this value is used,
   * {@link ScheduleListModel::$dt_date} should not be set.
   *
   * @get get
   * @var string
   */
  public $dl_start = '';

  /**
   * The date of the sessions in Coordinated Universal Time (UTC) and MySQL format.
   *
   * If this value is used, then
   * {@link ScheduleListModel::$dl_end} and
   * {@link ScheduleListModel::$dl_start} should not be set.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * <tt>true</tt> - If the business has at least one virtual service, <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_virtual_service;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = null;

  /**
   * The security token.
   *
   * @get get
   * @var string
   */
  public $text_token = '';

  /**
   * User key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $uid = null;
}

?>