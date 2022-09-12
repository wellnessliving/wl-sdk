<?php

namespace WellnessLiving\Wl\Classes\ClassView;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about class element.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * Class schedule information. Each element has next structure:
   * <dl>
   *   <dt>array <var>a_schedule</var></dt>
   *   <dd>List of class schedules. Each element has next structure:
   *     <dl>
   *       <dt>array <var>a_repeat</var></dt>
   *       <dd>Schedule repeat options:
   *         <dl>
   *           <dt>int <var>i_repeat</var></dt>
   *           <dd>Count of the periods which specified in <var>id_repeat</var>.</dd>
   *           <dt>int <var>id_repeat</var></dt>
   *           <dd>Measuring unit of <var>i_repeat</var>.</dd>
   *           </dl>
   *       </dd>
   *       <dt>string[] <var>a_staff_key</var></dt>
   *       <dd>List of staff member keys who provide sessions for this schedule.</dd>
   *       <dt>string <var>dl_end</var></dt>
   *       <dd>
   *         End date of the schedule in locale timezone of the location.
   *         Empty or zero date in a case if schedule is ongoing.
   *       </dd>
   *       <dt>string <var>dl_start</var></dt>
   *       <dd>Start date of the schedule in locale timezone of the location.</dd>
   *       <dt>int <var>i_day</var></dt>
   *       <dd>Day of the week where class schedule exist. # 1 - Monday, 7 - Sunday.</dd>
   *       <dt>int <var>i_duration</var></dt>
   *       <dd>Duration of the schedule sessions in a minutes.</dd>
   *       <dt>int <var>is_cancel</var></dt>
   *       <dd>Defines whether schedule cancelled or not.</dd>
   *       <dt>string <var>k_location</var></dt>
   *       <dd>Location key of the schedule.</dd>
   *       <dt>string <var>m_price</var></dt>
   *       <dd>Price of single session of the schedule.</dd>
   *       <dt>string <var>text_time</var></dt>
   *       <dd>Time of the session in format: `[start_time] - [end_time]` in locale timezone.</dd>
   *      </dl>
   *   </dd>
   *   <dt>string <var>k_class</var></dt>
   *   <dd>Class key. Primary key in {@link \RsClassSql} table.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_class_list = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Class key to get information of specific class only.
   *
   * Empty value to return information for all classes of the business.
   *
   * @get get
   * @var string
   */
  public $k_class = '';

  /**
   * Defines if cancelled schedules should be included in result.
   *
   * `true` to show cancelled schedules, `false` otherwise.
   *
   * @get get
   * @var bool
   */
  public $show_cancelled = '';
}

?>