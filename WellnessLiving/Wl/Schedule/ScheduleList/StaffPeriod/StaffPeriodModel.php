<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffPeriod;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Data of working hours of staff member.
 *
 * @method WlModelRequest get() Returns working hours list for business staff members in given day.  Resolves the staff members visible to the current user: a staff member with administrative or  foreign-schedule privileges sees all active staff members, otherwise only their own working  hours are returned. Returns the break and work periods for the requested date for each  resolved staff member.
 */
class StaffPeriodModel extends WlModelAbstract
{
  /**
   * Working hours list keyed by `uid_staff`.
   *
   * Each value describes the working hours of the staff member for the requested date: 
   *
   * <dl>
   *   <dt>array `a_break`</dt>
   *   <dd>
   *     List of break periods. Each element:
   *     <dl>
   *       <dt>string[]|null `a_service`</dt>
   *       <dd>
   *         Services affected by the period. Primary keys in  table.
   *  `null` if the period affects all services.
   *       </dd>
   * 
   *       <dt>string `dtu_create`</dt>
   *       <dd>Date the period was created.</dd>
   * 
   *       <dt>int `i_end`</dt>
   *       <dd>End time, in seconds.</dd>
   * 
   *       <dt>int `i_start`</dt>
   *       <dd>Start time, in seconds.</dd>
   * 
   *       <dt>string `k_location`</dt>
   *       <dd>Primary key of location in  table.</dd>
   * 
   *       <dt>string `text_note`</dt>
   *       <dd>Note about available or unavailable time.</dd>
   * 
   *       <dt>string `html_break_note`</dt>
   *       <dd>Info about the break time. Present only for unavailable time.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_work`</dt>
   *   <dd>
   *     List of working periods. Each element:
   *     <dl>
   *       <dt>string[]|null `a_service`</dt>
   *       <dd>
   *         Services affected by the period. Primary keys in  table.
   *  `null` if the period affects all services.
   *       </dd>
   * 
   *       <dt>string `dtu_create`</dt>
   *       <dd>Date the period was created.</dd>
   * 
   *       <dt>int `i_end`</dt>
   *       <dd>End time, in seconds.</dd>
   * 
   *       <dt>int `i_start`</dt>
   *       <dd>Start time, in seconds.</dd>
   * 
   *       <dt>string `k_location`</dt>
   *       <dd>Primary key of location in  table.</dd>
   * 
   *       <dt>string `text_note`</dt>
   *       <dd>Note about available or unavailable time.</dd>
   * 
   *       <dt>string `html_break_note`</dt>
   *       <dd>Info about the break time. Present only for unavailable time.</dd>
   *     </dl>
   *   </dd>
   * </dl>
   * @get result
   * @var array<string, array>
   */
  public $a_staff_period;

  /**
   * Date for which working hours are required.
   * In business timezone.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * ID of business for which working hours are required.
   * Primary key in the `rs_business` table.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>