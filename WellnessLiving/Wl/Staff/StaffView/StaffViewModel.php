<?php

namespace WellnessLiving\Wl\Staff\StaffView;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\AGenderSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Staff\StaffList\StaffListModel;

/**
 * An endpoint that returns information about a specified staff member.
 *
 * This method can accept one staff key {@link StaffViewModel::$k_staff} or a staff list
 * {@link StaffViewModel::$a_staff_list} but not both (an exception would be thrown).
 */
class StaffViewModel extends WlModelAbstract
{
  /**
   * An array containing information about the classes this staff member is running.
   * Each element contains another array with three elements:
   *
   * <dl>
   *   <dt>
   *     array <var>a_class_period</var>
   *   </dt>
   *   <dd>
   *     A list of sessions in the day:
   *     <dl>
   *       <dt>string <var>dt_time</var></dt>
   *       <dd>The session start time in MySQL format.</dd>
   *       <dt>int <var>i_duration</var></dt>
   *       <dd>The session duration in seconds.</dd>
   *       <dt>string <var>s_title</var></dt>
   *       <dd>The class name.</dd>
   *       <dt>string <var>url_book</var></dt>
   *       <dd>Direct book URL of this class.</dd>
   *     </dl>
   *   </dd>
   *   <dt>int <var>i_day</var></dt>
   *   <dd>The day of week. One of {@link ADateWeekSid} constants.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_class_day;

  /**
   * An array listing the class sessions the staff member provides at each location.
   *
   * <dl>
   *   <dt>array <var>a_class_day</var></dt>
   *   <dd>
   *     Contains a schedule of classes per day.
   *     Each element has a structure like in {@link StaffViewModel::$a_class_day} property.
   *   </dd>
   *   <dt>array <var>a_staff</var></dt>
   *   <dd>
   *     Staff information.
   *     Each element has a structure like in {@link StaffViewModel::$a_staff} property.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_result_list;

  /**
   * An array containing information about the staff member.
   *
   * <dl>
   *   <dt>array <var>a_location_work</var></dt>
   *   <dd>A list of locations keys where staff works.</dd>
   *   <dt>array <var>a_photo</var></dt>
   *   <dd>Staff`s photo.</dd>
   *   <dt>string <var>html_biography</var></dt>
   *   <dd>
   *     A description of the staff member. This description can include HTML tags.
   *     Same as `s_biography` offset.
   *   </dd>
   *   <dt>string <var>html_first</var></dt>
   *   <dd>The first name of the staff.</dd>
   *   <dt>string <var>html_last</var></dt>
   *   <dd>The last name of the staff.</dd>
   *   <dt>string <var>html_location_title</var></dt>
   *   <dd>Name of the current staff location.</dd>
   *   <dt>int <var>id_gender</var></dt>
   *   <dd>The staff member's gender. One of the {@link AGenderSid} constants.</dd>
   *   <dt>bool <var>is_classes_events</var></dt>
   *   <dd>`true` in case when staff provides classes/events in home location, `false` otherwise.</dd>
   *   <dt>bool <var>is_publish_business_page</var></dt>
   *   <dd>Whether staff member should be published on business pages.</dd>
   *   <dt>bool <var>is_schedule_enabled</var></dt>
   *   <dd>`true` in case when for schedule exists for staff, `false` otherwise.</dd>
   *   <dt>string <var>k_location</var></dt>
   *   <dd>Staff`s current location.</dd>
   *   <dt>string <var>k_staff</var></dt>
   *   <dd>Staff key.</dd>
   *   <dt>string <var>s_biography</var></dt>
   *   <dd>
   *     A description of the staff member. This description can include HTML tags.
   *     <b>Deprecated</b> use `html_biography` instead of this.
   *   </dd>
   *   <dt>string <var>s_family</var></dt>
   *   <dd>The staff member surname. If there are rights, the full surname, if not, then depending on the business settings.</dd>
   *   <dt>string <var>s_name</var></dt>
   *   <dd>The staff member first name. If there are rights, the full first name, if not, then depending on the business settings.</dd>
   *   <dt>string <var>s_position</var></dt>
   *   <dd>The staff member position in the organization.</dd>
   *   <dt>string <var>text_business_role</var></dt>
   *   <dd>Name of the staff role.</dd>
   *   <dt>string <var>text_full_name</var></dt>
   *   <dd>Full name of the staff according to business settings.</dd>
   *   <dt>string <var>uid</var></dt>
   *   <dd>
   *     The user ID. Each staff member in WellnessLiving can also access the system as a client of their business.
   *     This is the ID number used to represent the staff member as a client.
   *   </dd>
   *   <dt>string <var>url_schedule</var></dt>
   *   <dd>
   *     URL to the schedule with this staff.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_staff;

  /**
   * A list of staff keys.
   *
   * @get get
   * @var string[]
   */
  public $a_staff_list;

  /**
   * Image height in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_image_height = 0;

  /**
   * Image width in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_image_width = 0;

  /**
   * The key of the business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The staff member key.
   * A staff member can work for more than one business.
   * This key can be found using the {@link StaffListModel} endpoint.
   *
   * @get get
   * @var string
   */
  public $k_staff = '0';
}

?>