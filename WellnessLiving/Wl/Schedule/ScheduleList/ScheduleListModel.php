<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Classes\Tab\TabSid;

/**
 * Schedule of sessions.
 *
 * @method WlModelRequest get() Retrieves schedule of sessions.
 */
class ScheduleListModel extends WlModelAbstract
{
  /**
   * Schedule of sessions in location {@link ScheduleListModel::$k_location} in day {@link ScheduleListModel::$dt_date}. Every element has keys:
   *
   * <dl>
   *   <dt>array `a_staff`</dt>
   *   <dd>
   *     List of staff:
   *     <dl>
   *       <dt>bool `is_quick_substitute`</dt>
   *       <dd>Whether staff or pay rate changed due quick substitution.</dd>
   * 
   *       <dt>bool `is_substitute`</dt>
   *       <dd>Determines current staff member as substituted.</dd>
   * 
   *       <dt>string `s_staff`</dt>
   *       <dd>Full name of staff.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `can_book`</dt>
   *   <dd><tt>true</tt> - session can be booked. <tt>false</tt> - otherwise.</dd>
   * 
   *   <dt>string `dt_date_local`</dt>
   *   <dd>Date/time of session start (in local timezone).</dd>
   * 
   *   <dt>string `dt_date_gmt`</dt>
   *   <dd>Date/time of session start (in GMT).</dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>Session duration (in minutes).</dd>
   * 
   *   <dt>bool `is_wait_list`</dt>
   *   <dd><tt>true</tt> if user can take place in wait list only; <tt>false</tt> otherwise.</dd>
   * 
   *   <dt>string `k_class_period`</dt>
   *   <dd>Session ID.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>Class title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_schedule;

  /**
   * Date to show information for.
   * In MySQL format, without time.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * ID of group of category tab. One of {@link TabSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_class_tab = 0;

  /**
   * Is there any classes available for booking.
   *
   * @get result
   * @var bool
   */
  public $is_classes_available;

  /**
   * ID of category tab in database.
   *
   * @get get
   * @var string
   */
  public $k_class_tab = '0';

  /**
   * ID of business location to show information for.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * ID of user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>