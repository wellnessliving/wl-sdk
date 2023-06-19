<?php

namespace WellnessLiving\Wl\Staff\StaffView;

use WellnessLiving\WlModelAbstract;

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
   *   <dt>array <var>a_class_period</var></dt>
   *   <dd>A list of sessions in the day:<dl>
   *     <dt>string <var>dt_time</var></dt>
   *     <dd>The session start time in MySQL format.</dd>
   *     <dt>int <var>i_duration</var></dt>
   *     <dd>The session duration in seconds.</dd>
   *     <dt>string <var>s_title</var></dt>
   *     <dd>The class name.</dd>
   *   </dl></dd>
   *   <dt>int <var>i_day</var></dt>
   *   <dd>The day of week. One of {@link \WellnessLiving\Core\a\ADateWeekSid} constants.</dd>
   * </dl>
   *
   * This will be `null` if data isn't loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_class_day = null;

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
   *       <dd>The staff member’s surname.</dd>
   *       <dt>string <var>s_name</var></dt>
   *       <dd>The staff member’s first name.</dd>
   *       <dt>string <var>s_position</var></dt>
   *       <dd>The staff member’s position in the organization.</dd>
   *       <dt>string <var>uid</var></dt>
   *       <dd>The user ID. Each staff member in WellnessLiving can also access the system as a client of their business.
   *       This is the ID number used to represent the staff member as a client.</dd>
   *     </dl>
   *   </dd>
   * </dl>
   *
   * This will be `null` if data isn't loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_result_list = null;

  /**
   * An array containing information about the staff member.
   *
   * <dl>
   *   <dt>int <var>id_gender</var></dt>
   *   <dd>The staff member's gender. One of the {@link AGenderSid} constants.</dd>
   *   <dt>string <var>s_biography</var></dt>
   *   <dd>A description of the staff member. This description can include HTML tags.</dd>
   *   <dt>string <var>s_family</var></dt>
   *   <dd>The staff member’s surname.</dd>
   *   <dt>string <var>s_name</var></dt>
   *   <dd>The staff member’s first name.</dd>
   *   <dt>string <var>s_position</var></dt>
   *   <dd>The staff member’s position in the organization.</dd>
   *   <dt>string <var>uid</var></dt>
   *   <dd>The user ID. Each staff member in WellnessLiving can also access the system as a client of their business.
   *   This is the ID number used to represent the staff member as a client.</dd>
   * </dl>
   *
   * This will be `null` if data isn't loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_staff = null;

  /**
   * A list of staff keys.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string[]|null
   */
  public $a_staff_list = null;

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
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The staff member’s ID number. A staff member can work for more than one business. This ID can be found using the
   * {@link \WellnessLiving\Wl\Staff\StaffList\StaffListModel} endpoint.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_staff = null;
}

?>