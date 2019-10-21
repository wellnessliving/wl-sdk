<?php

namespace WellnessLiving\Wl\Profile\Edit;

use WellnessLiving\WlModelAbstract;

/**
 * Information about business schedule in a certain date.
 * Version for validation by token.
 */
class ScheduleListByTokenModel extends WlModelAbstract
{
  /**
   * Sessions of schedule. They are sorted chronologically in ascending order. Every element has keys:
   * <dl>
   *   <dt>
   *     array[] <var>a_schedule</var>
   *   </dt>
   *   <dd>
   *     Sessions of schedule. Are sorted chronological order in ascending order. Every element has keys:
   *     <dl>
   *       <dt>
   *         string[] <var>a_resource</var>
   *       </dt>
   *       <dd>
   *         List of assets involved in this session.
   *       </dd>
   *       <dt>
   *         string[] <var>a_staff</var>
   *       </dt>
   *       <dd>
   *         List of staff members who conduct this session.
   *       </dd>
   *       <dt>
   *         string[] <var>a_user</var>
   *       </dt>
   *       <dd>
   *         List of names of users for who session is appointed. Not empty for appointments.
   *       </dd>
   *       <dt>
   *         string <var>dt_date</var>
   *       </dt>
   *       <dd>
   *         Date/time of session in UTC.
   *       </dd>
   *       <dt>
   *         string <var>dt_date_cancel</var>
   *       </dt>
   *       <dd>
   *         Date/time when session was cancelled in UTC.
   *         Has sense for appointments only.
   *       </dd>
   *       <dt>
   *         string <var>dt_date_local</var>
   *       </dt>
   *       <dd>
   *         Date/time of session in local time.
   *       </dd>
   *       <dt>
   *         int <var>i_book</var>
   *       </dt>
   *       <dd>
   *         Quantity of this session books.
   *       </dd>
   *       <dt>
   *         int <var>i_capacity</var>
   *       </dt>
   *       <dd>
   *         Capacity of session books.
   *       </dd>
   *       <dt>
   *         int <var>i_duration</var>
   *       </dt>
   *       <dd>
   *         Duration in minutes.
   *       </dd>
   *       <dt>
   *         int <var>i_padding_after</var>
   *       </dt>
   *       <dd>
   *         Padding after session.
   *         Has sense for appointments only.
   *       </dd>
   *       <dt>
   *         int <var>i_padding_before</var>
   *       </dt>
   *       <dd>
   *         Padding before session.
   *         Has sense for appointments only.
   *       </dd>
   *       <dt>
   *         int <var>i_start</var>
   *       </dt>
   *       <dd>
   *         Start time in minutes.
   *       </dd>
   *       <dt>
   *         int <var>id_service</var>
   *       </dt>
   *       <dd>
   *         ID of service type. One of {@link \WellnessLiving\WlServiceSid} constants.
   *       </dd>
   *       <dt>
   *         string <var>k_appointment</var>
   *       </dt>
   *       <dd>
   *         Appointment key.
   *         <tt>0</tt> if this session is not an appointment.
   *       </dd>
   *       <dt>
   *         string <var>k_class</var>
   *       </dt>
   *       <dd>
   *         Class key.
   *         <tt>0</tt> if this session is not a class session.
   *       </dd>
   *       <dt>
   *         string <var>k_class_period</var>
   *       </dt>
   *       <dd>
   *         Class session key.
   *         <tt>0</tt> if this session is not a class session.
   *       </dd>
   *       <dt>
   *         string <var>k_location</var>
   *       </dt>
   *       <dd>
   *         Location where session takes place.
   *       </dd>
   *       <dt>
   *         string <var>k_service</var>
   *       </dt>
   *       <dd>
   *         For appointments of service - service service.
   *         For other cases - always <tt>0</tt>.
   *       </dd>
   *       <dt>
   *         string <var>s_title</var>
   *       </dt>
   *       <dd>
   *         Session title.
   *       </dd>
   *       <dt>
   *         string <var>text_color_background</var>
   *       </dt>
   *       <dd>
   *         Background color for session in hex representation.
   *       </dd>
   *       <dt>
   *         string <var>text_color_border</var>
   *       </dt>
   *       <dd>
   *         Border color for session in hex representation.
   *       </dd>
   *     </dl>
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_schedule = [];

  /**
   * Date to show information for.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * Security token.
   *
   * @get get
   * @var string
   */
  public $text_token = '';
}

?>