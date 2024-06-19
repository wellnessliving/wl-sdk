<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffApp;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Schedule\Design\OptionSid;
use WellnessLiving\Wl\Visit\WlVisitSid;
use WellnessLiving\Wl\WlServiceSid;

/**
 * Gets information about sessions (both classes and appointments) at a business on a given day.
 */
class ScheduleListModel extends WlModelAbstract
{
  /**
   * The sessions present on the business schedule. These are sorted chronologically in ascending order.
   * Every element has the following keys:
   *
   * <dl>
   *   <dt>
   *     string[] <var>a_note</var>
   *   </dt>
   *   <dd>
   *     List of notes.
   *   </dd>
   *   <dt>
   *     array <var>a_appointment_visit_info</var>
   *   </dt>
   *   <dd>
   *     Additional visit information about this appointment. Empty array if it's a class.
   *     <dl>
   *       <dt>
   *         int <var>id_visit</var>
   *       </dt>
   *       <dd>
   *         Visit id. One of {@link WlVisitSid} constants.
   *       </dd>
   *       <dt>
   *         bool <var>is_confirmed</var>
   *       </dt>
   *       <dd>
   *         `true` means that appointment was requested and confirmed by the staff.
   *       </dd>
   *       <dt>
   *         bool <var>is_deny</var>
   *       </dt>
   *       <dd>
   *         `true` means that appointment was requested and denied by the staff.
   *       </dd>
   *       <dt>
   *         bool <var>is_notify_request_accept</var>
   *       </dt>
   *       <dd>
   *         `true` means that the client will receive a notification, if appointment will be confirmed by the staff.
   *       </dd>
   *       <dt>
   *         bool <var>is_notify_request_deny</var>
   *       </dt>
   *       <dd>
   *         `true` means that the client will receive a notification, if appointment will be denied by the staff.
   *       </dd>
   *       <dt>
   *         bool <var>is_request</var>
   *       </dt>
   *       <dd>
   *         `true` means that appointment was requested, but not confirmed by the staff.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string[] <var>a_resource</var>
   *   </dt>
   *   <dd>
   *     A list of assets involved in the session.
   *
   *   </dd>
   *   <dt>
   *     string[] <var>a_resource_removed</var>
   *   </dt>
   *   <dd>
   *     List of removed assets involved in the session.
   *
   *   </dd>
   *   <dt>
   *     string[] <var>a_staff</var>
   *   </dt>
   *   <dd>
   *     A list of staff members who will conduct the session.
   *
   *     Deprecated, use <var>a_staff_list</var> instead.
   *   </dd>
   *   <dt>
   *     array <var>a_staff_info</var>
   *   </dt>
   *   <dd>
   *     Information about staff members who conduct this session.
   *     Values are array with data:
   *     <dl>
   *       <dt>
   *         string <var>text_staff</var>
   *       </dt>
   *       <dd>
   *         Staff full name.
   *       </dd>
   *       <dt>
   *         bool <var>is_staff_change</var>
   *       </dt>
   *       <dd>
   *         <tt>true</tt> means staff is substituted, <tt>false</tt> simple staff member.
   *       </dd>
   *       <dt>
   *         string <var>k_staff</var>
   *       </dt>
   *       <dd>
   *         Staff key.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string[] <var>a_user</var>
   *   </dt>
   *   <dd>
   *     For appointments, this is a list of the names of users who are scheduled to attend the session.
   *   </dd>
   *   <dt>
   *     string[] <var>a_virtual_location</var>
   *   </dt>
   *   <dd>
   *     List of virtual locations.
   *   </dd>
   *   <dt>
   *     string <var>dt_date</var>
   *   </dt>
   *   <dd>
   *     The date/time of the session in UTC.
   *   </dd>
   *   <dt>
   *     string <var>dt_date_cancel</var>
   *   </dt>
   *   <dd>
   *     The date/time when the session was canceled in UTC. Only used for appointments.
   *   </dd>
   *   <dt>
   *     string <var>dt_date_local</var>
   *   </dt>
   *   <dd>
   *     The date/time of the session in local time.
   *   </dd>
   *   <dt>
   *     int <var>i_book</var>
   *   </dt>
   *   <dd>
   *     The number of clients booked into the session.
   *   </dd>
   *   <dt>
   *     int <var>i_capacity</var>
   *   </dt>
   *   <dd>
   *     The maximum capacity of the session.
   *   </dd>
   *   <dt>
   *     int <var>i_duration</var>
   *   </dt>
   *   <dd>
   *     The duration of the session in minutes.
   *   </dd>
   *   <dt>
   *     int <var>i_padding_after</var>
   *   </dt>
   *   <dd>
   *     The padding time after the session in minutes. Only used for appointments.
   *   </dd>
   *   <dt>
   *     int <var>i_padding_before</var>
   *   </dt>
   *   <dd>
   *     The padding time before the session in minutes. Only used for appointments.
   *   </dd>
   *   <dt>
   *     int <var>i_start</var>
   *   </dt>
   *   <dd>
   *     The start time in minutes after midnight.
   *     For example, a class starting at 10:30 in the morning local time will have an `i_start` value of 630.
   *   </dd>
   *   <dt>
   *     int <var>i_wait</var>
   *   </dt>
   *   <dd>
   *     Count clients on waitlist.
   *   </dd>
   *   <dt>
   *      int <var>id_option</var>
   *    </dt>
   *    <dd>
   *      Appointment title display style.
   *      Set only for appointments, for others it will be equal to 0.
   *      Constants from {@link OptionSid}.
   *    </dd>
   *   <dt>
   *     int <var>id_service</var>
   *   </dt>
   *   <dd>
   *     The ID of the service type. One of {@link WlServiceSid} constants.
   *   </dd>
   *   <dt>
   *     bool <var>is_arrive</var>
   *   </dt>
   *   <dd>
   *     For appointments: <tt>true</tt> if user has checked-in; <tt>false</tt> otherwise.
   *     For classes always <tt>null</tt>.
   *   </dd>
   *   <dt>
   *     bool <var>is_pay</var>
   *   </dt>
   *   <dd>
   *     For appointments: <tt>true</tt> if appointment is paid; <tt>false</tt> otherwise.
   *     For classes always <tt>null</tt>.
   *   </dd>
   *   <dt>
   *     bool <var>is_repeat</var>
   *   </dt>
   *   <dd>
   *     For appointments: <tt>true</tt> if appointment is recurring; <tt>false</tt> otherwise.
   *     For classes always <tt>null</tt>.
   *   </dd>
   *   <dt>
   *     string <var>k_appointment</var>
   *   </dt>
   *   <dd>
   *     The appointment key.
   *     If the session isn't an appointment, this will be `0`.
   *   </dd>
   *   <dt>
   *     string <var>dt_confirm</var>
   *   </dt>
   *   <dd>
   *     Confirmation date for appointment in MySQL format. Will be zero date + time in case appointment
   *     is not yet confirmed by client.
   *   </dd>
   *   <dt>
   *     string <var>k_class</var>
   *   </dt>
   *   <dd>
   *     The class key.
   *     If the session isn't a class, this will be `0`.
   *   </dd>
   *   <dt>
   *     string <var>k_class_period</var>
   *   </dt>
   *   <dd>
   *     The class period key.
   *     If the session isn't a class, this will be `0`.
   *   </dd>
   *   <dt>
   *     string <var>k_location</var>
   *   </dt>
   *   <dd>
   *     The location key for where the session takes place.
   *   </dd>
   *   <dt>
   *     string <var>k_service</var>
   *   </dt>
   *   <dd>
   *     This is the key of the appointment type, while `k_appointment` is the specific instance.
   *
   *     For other cases, this will be `0`.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     The name of the session.
   *   </dd>
   *   <dt>
   *     string <var>text_alert</var>
   *   </dt>
   *   <dd>
   *     Alert message.
   *   </dd>
   *   <dt>
   *     string <var>text_color_background</var>
   *   </dt>
   *   <dd>
   *     The background color in hex representation as used on WellnessLiving.
   *   </dd>
   *   <dt>
   *     string <var>text_color_border</var>
   *   </dt>
   *   <dd>
   *     The border color in hex representation as used on WellnessLiving.
   *   </dd>
   *   <dt>
   *     bool<var>is_virtual_service</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> - If the business has at least one virtual service, <tt>false</tt> - otherwise.
   *   </dd>
   *   <dt>
   *     string<var>url_image</var>
   *   </dt>
   *   <dd>
   *     URL to image. Empty if image not exist.
   *   </dd>
   * </dl>
   *
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
  public $dl_end;

  /**
   * The start date of the range from which the list of scheduled sessions should be retrieved.
   *
   * This will be `null` if the range has no start date. If this value is used,
   * {@link ScheduleListModel::$dt_date} should not be set.
   *
   * @get get
   * @var string
   */
  public $dl_start;

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