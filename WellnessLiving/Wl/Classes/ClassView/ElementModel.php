<?php

namespace WellnessLiving\Wl\Classes\ClassView;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about a class element.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * Displays information about the class schedule(s). Each element has the next structure:
   * <dl>
   *   <dt>array <var>a_schedule</var></dt>
   *   <dd>A list of class schedules. Each element has the next structure:
   *     <dl>
   *       <dt>array <var>a_repeat</var></dt>
   *       <dd>Schedule repeat options:
   *         <dl>
   *           <dt>int <var>i_repeat</var></dt>
   *           <dd>A count of the periods specified in <var>id_repeat</var>.</dd>
   *           <dt>int <var>id_repeat</var></dt>
   *           <dd>The measuring unit of <var>i_repeat</var>.</dd>
   *           </dl>
   *       </dd>
   *       <dt>string[] <var>a_staff_key</var></dt>
   *       <dd>A list of staff member keys that provide sessions for this schedule.</dd>
   *       <dt>string <var>dl_end</var></dt>
   *       <dd>
   *         The end date of the schedule in the location's time zone.
   *         Empty or zero date if the schedule is ongoing.
   *       </dd>
   *       <dt>string <var>dl_start</var></dt>
   *       <dd>The start date of the schedule in location's time zone.</dd>
   *       <dt>int <var>i_day</var></dt>
   *       <dd>The day of the week where the class schedule exists. # 1 - Monday, 7 - Sunday.</dd>
   *       <dt>int <var>i_duration</var></dt>
   *       <dd>The duration of the schedule sessions in minutes.</dd>
   *       <dt>int <var>is_cancel</var></dt>
   *       <dd>Defines whether the schedule canceled or not.</dd>
   *       <dt>string <var>k_location</var></dt>
   *       <dd>The location key of the schedule.</dd>
   *       <dt>string <var>m_price</var></dt>
   *       <dd>The price of a single session of the schedule.</dd>
   *       <dt>string <var>text_time</var></dt>
   *       <dd>The time of the session in the following format: `[start_time] - [end_time]` in locale timezone.</dd>
   *      </dl>
   *   </dd>
   *   <dt>string <var>k_class</var></dt>
   *   <dd>The class key. The primary key in {@link \RsClassSql} table.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_class_list = [];

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The class key used to get information of a specific class.
   *
   * An empty value returns information for all classes of the business.
   *
   * @get get
   * @var string
   */
  public $k_class = '';

  /**
   * Defines if canceled schedules should be included in the result.
   *
   * `true` to show canceled schedules, `false` otherwise.
   *
   * @get get
   * @var bool
   */
  public $show_cancelled = '';
}

?>