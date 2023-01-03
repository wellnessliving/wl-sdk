<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffApp;

use WellnessLiving\WlModelAbstract;

/**
 * Gets information about sessions (both classes and appointments) at a business on a given day.
 */
class ScheduleListModel extends WlModelAbstract
{
  /**
   * The sessions of the schedule. They are sorted in chronological order and in ascending order.
   * Every element has the following keys:
   * <dl>
   *   <dt>
   *     string[] <var>a_resource</var>
   *   </dt>
   *   <dd>
   *     A list of assets involved in the session.
   *   </dd>
   *   <dt>
   *     string[] <var>a_staff</var>
   *   </dt>
   *   <dd>
   *     A list of staff members who will conduct the session.
   *   </dd>
   *   <dt>
   *     string[] <var>a_user</var>
   *   </dt>
   *   <dd>
   *     For Appointments, this is a list of the names of users who are scheduled to attend the session.
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
   *     The date/time when the session was cancelled in UTC. Only used for Appointments.
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
   *     The padding time after the session in minutes. Only used for Appointments.
   *   </dd>
   *   <dt>
   *     int <var>i_padding_before</var>
   *   </dt>
   *   <dd>
   *     The padding time before the session in minutes. Only used for Appointments.
   *   </dd>
   *   <dt>
   *     int <var>i_start</var>
   *   </dt>
   *   <dd>
   *     The start time in minutes.
   *     A Class starting at 10:30 in the morning local time will have an i_start value of 630.
   *   </dd>
   *   <dt>
   *     int <var>id_service</var>
   *   </dt>
   *   <dd>
   *     The key of the service type. One of the {@link \WellnessLiving\WlServiceSid} constants.
   *   </dd>
   *   <dt>
   *     string <var>k_appointment</var>
   *   </dt>
   *   <dd>
   *     The appointment key. If the session is not an Appointment, this will be `0`.
   *   </dd>
   *   <dt>
   *     string <var>k_class</var>
   *   </dt>
   *   <dd>
   *     The class key. If the session is not a Class, this will be `0`.
   *   </dd>
   *   <dt>
   *     string <var>k_class_period</var>
   *   </dt>
   *   <dd>
   *     The class period key. If the session is not a Class, this will be `0`.
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
   *     This is the key of the appointment type, while k_appointment is the specific instance.
   *     For other cases it will be `0`.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     The name of the session.
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
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_schedule = [];

  /**
   * End date of the range from which list of schedule should be retrieved.
   *
   * <tt>null</tt> if range has no end date.
   *
   * @get get
   * @var string
   */
  public $dl_end;

  /**
   * Start date of the range from which list of schedule should be retrieved.
   *
   * <tt>null</tt> if range has no start date.
   *
   * @get get
   * @var string
   */
  public $dl_start;

  /**
   * The date of the sessions in Coordinated Universal Time (UTC) in MySQL format.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * The key of the business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>
