<?php

namespace WellnessLiving\Wl\Staff\StaffView;

use WellnessLiving\WlModelAbstract;

/**
 * Returns information about a specified staff member.
 *
 * This method can accept one staff key {@link \WellnessLiving\Wl\Staff\StaffView\StaffViewModel::$k_staff} or a staff list
 * {@link \WellnessLiving\Wl\Staff\StaffView\StaffViewModel::$a_staff_list} but not both (an exception would be thrown).
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
   *     </dl>
   *   </dd>
   *   <dt>int <var>i_day</var></dt>
   *   <dd>The day of week. One of {@link \WellnessLiving\Core\a\ADateWeekSid} constants.</dd>
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
   *     Contains a schedule of classes per day:
   *     <dl>
   *       <dt>array <var>a_class_period</var></dt>
   *       <dd>A list of sessions in the day:<dl>
   *         <dt>string <var>dt_time</var></dt>
   *         <dd>The session start time in MySQL format.</dd>
   *         <dt>int <var>i_duration</var></dt>
   *         <dd>The session duration in seconds.</dd>
   *         <dt>string <var>s_title</var></dt>
   *         <dd>The class name.</dd>
   *       </dl></dd>
   *       <dt>int <var>i_day</var></dt>
   *       <dd>The day of week. One of {@link \WellnessLiving\Core\a\ADateWeekSid} constants.</dd>
   *     </dl>
   *   </dd>
   *   <dt>array <var>a_staff</var></dt>
   *   <dd>
   *     Staff information:
   *     <dl>
   *       <dt>int <var>id_gender</var></dt>
   *       <dd>The staff member's gender. One of the {@link \WellnessLiving\Core\a\AGenderSid} constants.</dd>
   *       <dt>string <var>s_biography</var></dt>
   *       <dd>A description of the staff member. This description can include HTML tags.</dd>
   *       <dt>string <var>s_family</var></dt>
   *       <dd>The staff member surname.</dd>
   *       <dt>string <var>s_name</var></dt>
   *       <dd>The staff member first name.</dd>
   *       <dt>string <var>s_position</var></dt>
   *       <dd>The staff member position in the organization.</dd>
   *       <dt>string <var>uid</var></dt>
   *       <dd>The user ID. Each staff member in WellnessLiving can also access the system as a client of their business.
   *       This is the ID number used to represent the staff member as a client.</dd>
   *     </dl>
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
   *   <dt>array <var>a_photo</var></dt>
   *   <dd>Staff`s photo.</dd>
   *   <dt>int <var>id_gender</var></dt>
   *   <dd>The staff member's gender. One of the {@link \WellnessLiving\Core\a\AGenderSid} constants.</dd>
   *   <dt>string <var>k_location</var></dt>
   *   <dd>Staff`s current location.</dd>
   *   <dt>string <var>s_biography</var></dt>
   *   <dd>A description of the staff member. This description can include HTML tags.</dd>
   *   <dt>string <var>s_family</var></dt>
   *   <dd>The staff member surname.</dd>
   *   <dt>string <var>s_name</var></dt>
   *   <dd>The staff member first name.</dd>
   *   <dt>string <var>s_position</var></dt>
   *   <dd>The staff member position in the organization.</dd>
   *   <dt>string <var>uid</var></dt>
   *   <dd>
   *     The user ID. Each staff member in WellnessLiving can also access the system as a client of their business.
   *     This is the ID number used to represent the staff member as a client.
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
   * A staff member can work for more than one business. This key can be found using the
   * {@link \WellnessLiving\Wl\Staff\StaffList\StaffListModel} endpoint.
   *
   * @get get
   * @var string
   */
  public $k_staff = '0';
}

?>