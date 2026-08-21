<?php

namespace WellnessLiving\Wl\Appointment\Book\Staff;

use WellnessLiving\Core\a\AGenderSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about staff members for the current service.
 *
 * @deprecated Use {@link StaffListModel} instead.
 *
 * @method WlModelRequest get() Retrieves an information about staff members for the current service.  Returns the list of staff members who can perform the specified service at the given location  on the specified date and time. Each entry includes the staff member's name, image, gender,  and availability. An 'any staff' option is included when the service allows random staff assignment.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of staff members with information about them.
   *
   * <dl>
   *   <dt>int `id_gender`</dt>
   *   <dd>Staff member's gender. One of {@link AGenderSid} constants.</dd>
   * 
   *   <dt>int|null `i_free_spot`</dt>
   *   <dd>
   *     How many clients can still be booked with the staff member at the requested time.
   * <p>If {@link ListModel::$dt_date} is not passed, this value is `null`.</p>
   * <p>If {@link ListModel::$dt_date} is passed, this is calculated for the specific staff member at that time.</p>
   *   </dd>
   * 
   *   <dt>bool `is_available`</dt>
   *   <dd>
   *     Whether staff member is available for booking. Note, if staff member reached daily limits, this field
   * will be different for client and staff booking flows. If client books, such staff member is not available and
   * this field is `false`. If staff member books, such staff member is available.
   *   </dd>
   * 
   *   <dt>bool `is_daily_limit`</dt>
   *   <dd>Whether staff member reached daily limits on number or total duration of the appointments for one day.</dd>
   * 
   *   <dt>bool `is_wait_list`</dt>
   *   <dd>Whether staff member available only for wait list booking.</dd>
   * 
   *   <dt>string `k_staff`</dt>
   *   <dd>@deprecated Legacy staff key.  Returned only for allow-listed apps.</dd>
   * 
   *   <dt>string `s_position`</dt>
   *   <dd>Position of the staff member in the business.</dd>
   * 
   *   <dt>string `s_staff`</dt>
   *   <dd>Name of the staff member.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>UID of the staff member. </dd>
   * 
   *   <dt>string `xml_biography`</dt>
   *   <dd>Biography of the staff member.</dd>
   * </dl>
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
   * Custom appointment duration in minutes.
   *
   * `null` if not set.
   *
   * @get get
   * @var int|null
   */
  public $i_duration_custom = null;

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