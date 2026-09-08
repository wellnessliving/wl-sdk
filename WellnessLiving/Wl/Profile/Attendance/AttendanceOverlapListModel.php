<?php

namespace WellnessLiving\Wl\Profile\Attendance;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Checks a batch of candidate visits for booking overlaps and reports the result per date.
 *
 * @method WlModelRequest post() Checks whether the specified user has any existing bookings that overlap with a given time range or service.  Used before scheduling to detect conflicts and prompt staff or the client with a warning.
 */
class AttendanceOverlapListModel extends WlModelAbstract
{
  /**
   * Overlap result for every checked session. Key is `i` from {@link AttendanceOverlapListModel::$a_session_list}.
   *   Value has the following keys: 
   *
   * <dl>
   *   <dt>array[] `a_visit_list`</dt>
   *   <dd>
   *     List of visits that overlap with the checked session. Same structure as
   * {@link AttendanceOverlapModel::$a_visit_list}. Present only if the current user has full access to the
   * target user's visits (the target user itself or a family relative).
   * Each element has the following keys:
   * 
   * Empty for guest-level access, to avoid exposing another member's visit details.
   *     <dl>
   *       <dt>string `dtu_date`</dt>
   *       <dd>Date and time of the visit.</dd>
   * 
   *       <dt>int `i_duration`</dt>
   *       <dd>Duration of a service.</dd>
   * 
   *       <dt>int `i_end`</dt>
   *       <dd>End datetime of the visit in unix format.</dd>
   * 
   *       <dt>int `i_end_local`</dt>
   *       <dd>Local end datetime of the visit in unix format.</dd>
   * 
   *       <dt>int `i_start`</dt>
   *       <dd>Start datetime of the visit in unix format.</dd>
   * 
   *       <dt>int `i_start_local`</dt>
   *       <dd>Local start datetime of the visit in unix format.</dd>
   * 
   *       <dt>string `k_appointment`</dt>
   *       <dd>Appointment key. </dd>
   * 
   *       <dt>string `k_business`</dt>
   *       <dd>Business key. </dd>
   * 
   *       <dt>string `k_class_period`</dt>
   *       <dd>Class period key. </dd>
   * 
   *       <dt>string `k_enrollment_book`</dt>
   *       <dd>Enrollment book key. </dd>
   * 
   *       <dt>string `k_location`</dt>
   *       <dd>Location key. </dd>
   * 
   *       <dt>string `text_time_end`</dt>
   *       <dd>Local end time of the visit, formatted according to the business locale.</dd>
   * 
   *       <dt>string `text_time_start`</dt>
   *       <dd>Local start time of the visit, formatted according to the business locale.</dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Title of a service</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `is_overlap`</dt>
   *   <dd>`true` if the checked session overlaps with an already booked visit, `false` otherwise.</dd>
   * </dl>
   * @post result
   * @var array[]
   */
  public $a_date_overlap = [];

  /**
   * List of sessions to check for overlaps. Every element has the following structure: 
   *
   * <dl>
   *   <dt>string `dtu_date`</dt>
   *   <dd>Date and time of the service.</dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>Duration of the service in minutes. Required if `k_resource` is not empty.</dd>
   * 
   *   <dt>bool `is_appointment`</dt>
   *   <dd>
   *     Whether an appointment (asset) is booking. Needed in case when a client is allowed to select a date and
   *  time, then the available asset.
   *   </dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>Location key. </dd>
   * 
   *   <dt>string `k_class_period`</dt>
   *   <dd>Class period key. </dd>
   * 
   *   <dt>string `k_resource`</dt>
   *   <dd>Resource key. </dd>
   * 
   *   <dt>string `k_service`</dt>
   *   <dd>Service key. </dd>
   * 
   *   <dt>string `k_timezone`</dt>
   *   <dd>Timezone key. </dd>
   * </dl>
   * @post post
   * @var array[]
   */
  public $a_session_list = [];

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';

  /**
   * UID of a user to book for.
   *
   * @post post
   * @var string
   */
  public $uid = '';
}

?>