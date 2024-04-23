<?php

namespace WellnessLiving\Wl\Appointment\Book\Staff;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about staff members for the current service.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of staff members with information about them.
   *
   * <dl>
   *   <dt>int <var>id_gender</var></dt>
   *   <dd>Staff member's gender.</dd>
   *   <dt>bool <var>is_available</var></dt>
   *   <dd>Whether staff member is available for booking. Note, if staff member reached daily limits, this field
   *     will be different for client and staff booking flows. If client books, such staff member is not available and
   *     this field is `false`. If staff member books, such staff member is available.</dd>
   *   <dt>bool <var>is_daily_limit</var></dt>
   *   <dd>Whether staff member reached daily limits on number or total duration of the appointments for one day.</dd>
   *   <dt>bool <var>is_wait_list</var></dt>
   *   <dd>Whether staff member available only for wait list booking.</dd>
   *   <dt>string <var>k_staff</var></dt>
   *   <dd>Primary key of the staff member.</dd>
   *   <dt>string <var>s_position</var></dt>
   *   <dd>Position of the staff member in the business.</dd>
   *   <dt>int <var>s_staff</var></dt>
   *   <dd>Name of the staff member.</dd>
   *   <dt>string <var>uid</var></dt>
   *   <dd>UID of the staff member.</dd>
   *   <dt>string <var>xml_biography</var></dt>
   *   <dd>Biography of the staff member.</dd>
   *  </dl>
   * @get result
   * @var array[]
   */
  public $a_staff;

  /**
   * Can staff booked unavailable staff.
   *
   * @get result
   * @var bool
   */
  public $can_book_unavailable_staff;

  /**
   * The date/time of the appointment selected by user, in the location's time zone.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * Determines whether to select the staff member's gender for the appointment.
   *
   * @get result
   * @var bool
   */
  public $has_gender;

  /**
   * Determines whether to select staff member(s) for the appointment.
   *
   * @get result
   * @var bool
   */
  public $has_staff;

  /**
   * User role by whom this api called.
   * For different roles different results might be generated.
   *
   * @get get
   * @var int
   */
  public $id_role = 2;

  /**
   * Determines if the staff list has male and female members.
   *
   * @get result
   * @var bool
   */
  public $is_gender_different;

  /**
   * `true` - returns service categories that have no staff members available to conduct them.
   * `false` - returns only service categories that have staff members available to conduct them.
   *
   * @get get
   * @var bool
   */
  public $is_unavailable = false;

  /**
   * Key of appointment which must be ignored when searches available staff.
   *
   * @get get
   * @var string
   */
  public $k_appointment_ignore = '0';

  /**
   * The key of the location.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The key of a service for which to show information.
   *
   * @get get
   * @var string
   */
  public $k_service = '0';

  /**
   * User's timezone.
   *
   * `null` until initialized or to use location timezone.
   *
   * @get get
   * @var string|null
   */
  public $k_timezone = null;

  /**
   * The user key for whom the service is booking.
   *
   * `null` when not set.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>