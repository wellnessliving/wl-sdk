<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffApp;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns information about a business schedule for a specified date.
 * This version of the endpoint is used for token validation.
 */
class ScheduleListByTokenModel extends WlModelAbstract
{
  /**
   * The scheduled sessions sorted chronologically in ascending order. Every element has the following keys:
   * <dl>
   *   <dt>
   *     array[] <var>a_schedule</var>
   *   </dt>
   *   <dd>
   *     The scheduled sessions sorted chronologically in ascending order. Every element has the following keys:
   *     <dl>
   *       <dt>
   *         string[] <var>a_resource</var>
   *       </dt>
   *       <dd>
   *         A list of assets associated with this session.
   *       </dd>
   *       <dt>
   *         string[] <var>a_staff</var>
   *       </dt>
   *       <dd>
   *         A list of staff members who conduct this session.
   *       </dd>
   *       <dt>
   *         string[] <var>a_user</var>
   *       </dt>
   *       <dd>
   *         A list of names of users for whom session is appointed. This won't be empty for appointments.
   *       </dd>
   *       <dt>
   *         string <var>dt_date</var>
   *       </dt>
   *       <dd>
   *         The date/time of the session in UTC.
   *       </dd>
   *       <dt>
   *         string <var>dt_date_cancel</var>
   *       </dt>
   *       <dd>
   *         The date/time when the session was canceled in UTC.
   *         This is used for appointments only.
   *       </dd>
   *       <dt>
   *         string <var>dt_date_local</var>
   *       </dt>
   *       <dd>
   *         The date/time of session in local time.
   *       </dd>
   *       <dt>
   *         int <var>i_book</var>
   *       </dt>
   *       <dd>
   *         The quantity of sessions that were booked.
   *       </dd>
   *       <dt>
   *         int <var>i_capacity</var>
   *       </dt>
   *       <dd>
   *         The capacity of the booked session.
   *       </dd>
   *       <dt>
   *         int <var>i_duration</var>
   *       </dt>
   *       <dd>
   *         The session duration in minutes.
   *       </dd>
   *       <dt>
   *         int <var>i_padding_after</var>
   *       </dt>
   *       <dd>
   *         The padding time after the session.
   *         This is used for appointments only.
   *       </dd>
   *       <dt>
   *         int <var>i_padding_before</var>
   *       </dt>
   *       <dd>
   *         The padding time before the session.
   *         This is used for appointments only.
   *       </dd>
   *       <dt>
   *         int <var>i_start</var>
   *       </dt>
   *       <dd>
   *         The start time in minutes.
   *       </dd>
   *       <dt>
   *         int <var>id_service</var>
   *       </dt>
   *       <dd>
   *         The service type ID. One of the {@link \WellnessLiving\WlServiceSid} constants.
   *       </dd>
   *       <dt>
   *         string <var>k_appointment</var>
   *       </dt>
   *       <dd>
   *         The appointment key.
   *         This will be `0` if this session isn't an appointment.
   *       </dd>
   *       <dt>
   *         string <var>k_class</var>
   *       </dt>
   *       <dd>
   *         The class key.
   *         This will be `0` if this session isn't a class session.
   *       </dd>
   *       <dt>
   *         string <var>k_class_period</var>
   *       </dt>
   *       <dd>
   *         The class session key.
   *         This will be `0` if this session isn't a class session.
   *       </dd>
   *       <dt>
   *         string <var>k_location</var>
   *       </dt>
   *       <dd>
   *         The location where this session takes place.
   *       </dd>
   *       <dt>
   *         string <var>k_service</var>
   *       </dt>
   *       <dd>
   *         The service key of the appointment.
   *         If this isn't an appointment, this will be `0`.
   *       </dd>
   *       <dt>
   *         string <var>s_title</var>
   *       </dt>
   *       <dd>
   *         The session title.
   *       </dd>
   *       <dt>
   *         string <var>text_color_background</var>
   *       </dt>
   *       <dd>
   *         The background color for the session in hex representation.
   *       </dd>
   *       <dt>
   *         string <var>text_color_border</var>
   *       </dt>
   *       <dd>
   *         The border color for the session in hex representation.
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
   * The date to show information for.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * The security token.
   *
   * @get get
   * @var string
   */
  public $text_token = '';
}

?>