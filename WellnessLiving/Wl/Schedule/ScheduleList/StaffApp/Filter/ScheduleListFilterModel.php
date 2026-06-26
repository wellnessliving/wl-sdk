<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffApp\Filter;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlServiceSid;

/**
 * Information about saved templates of schedule filters.
 *
 * @method WlModelRequest get() Gets list of schedule filters available for given user.
 */
class ScheduleListFilterModel extends WlModelAbstract
{
  /**
   * List of schedule filters. Keys - filters IDs; Values - sub arrays with next keys:
   *
   * <dl>
   *   <dt>array `a_config`</dt>
   *   <dd>
   *     Configurations of filter chapters. If configuration of filter chapter is empty, there are no limits from this chapter.
   *     <dl>
   *       <dt>string[] `a_class`</dt>
   *       <dd>Classes.</dd>
   * 
   *       <dt>string[] `a_event`</dt>
   *       <dd>Events.</dd>
   * 
   *       <dt>string[] `a_location`</dt>
   *       <dd>Locations.</dd>
   * 
   *       <dt>string[] `a_resource`</dt>
   *       <dd>Assets.</dd>
   * 
   *       <dt>string[] `a_service`</dt>
   *       <dd>Appointment services.</dd>
   * 
   *       <dt>string[] `a_staff`</dt>
   *       <dd>Staff members.</dd>
   * 
   *       <dt>int[] `a_type`</dt>
   *       <dd>Service types. Constants of {@link WlServiceSid} class (excluding {@link WlServiceSid::VISIT}).</dd>
   * 
   *       <dt>bool `is_staff_all`</dt>
   *       <dd>
   *         <tt>true</tt> to show all staff members.
   * <tt>false</tt> to show only staff members from <var>a_staff</var> field.
   *       </dd>
   * 
   *       <dt>bool `is_staff_available`</dt>
   *       <dd><tt>true</tt> to show only available staff members; <tt>false</tt> to show any staff member.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `can_edit`</dt>
   *   <dd><tt>true</tt> - filter may be changed by given user; <tt>false</tt> - otherwise.</dd>
   * 
   *   <dt>bool `is_default`</dt>
   *   <dd><tt>true</tt> - filter is default for given user; <tt>false</tt> - otherwise.</dd>
   * 
   *   <dt>bool `is_public`</dt>
   *   <dd><tt>true</tt> - filter is public; <tt>false</tt> - filter is private.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>Filter title.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_filter;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = null;

  /**
   * User key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $uid = null;
}

?>