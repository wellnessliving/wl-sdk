<?php

namespace WellnessLiving\Wl\Staff\StaffView;

use WellnessLiving\WlModelAbstract;

/**
 * Returns information about a specified staff member.
 *
 * This method can accept one staff key {@link StaffViewApi::$k_staff} or a staff list
 * {@link StaffViewApi::$a_staff_list} but not both (exception would be thrown).
 */
class StaffViewModel extends WlModelAbstract
{
  /**
   * An array containing information about the classes this staff member is running.
   * Each element contains another array with three elements:
   *
   * <dl>
   *   <dt>array <var>a_class_period</var></dt>
   *   <dd>List of sessions in day:<dl>
   *     <dt>string <var>dt_time</var></dt>
   *     <dd>Session start time in MySQL format.</dd>
   *     <dt>int <var>i_duration</var></dt>
   *     <dd>Session duration in seconds.</dd>
   *     <dt>string <var>s_title</var></dt>
   *     <dd>Class name.</dd>
   *   </dl></dd>
   *   <dt>int <var>i_day</var></dt>
   *   <dd>Day of week. One of {@link \WellnessLiving\Core\a\ADateWeekSid} constants.</dd>
   * </dl>
   *
   * <tt>null</tt> if data is not loaded yet.
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
   *     Contains schedule of classes per day:
   *     <dl>
   *       <dt>array <var>a_class_period</var></dt>
   *       <dd>List of sessions in day:<dl>
   *         <dt>string <var>dt_time</var></dt>
   *         <dd>Session start time in MySQL format.</dd>
   *         <dt>int <var>i_duration</var></dt>
   *         <dd>Session duration in seconds.</dd>
   *         <dt>string <var>s_title</var></dt>
   *         <dd>Class name.</dd>
   *       </dl></dd>
   *       <dt>int <var>i_day</var></dt>
   *       <dd>Day of week. One of {@link \WellnessLiving\Core\a\ADateWeekSid} constants.</dd>
   *     </dl>
   *   </dd>
   *   <dt>array <var>a_staff</var></dt>
   *   <dd>
   *     Staff information:
   *     <dl>
   *       <dt>int <var>id_gender</var></dt>
   *       <dd>Staff member's gender. One of the {@link \WellnessLiving\Core\a\AGenderSid} constants.</dd>
   *       <dt>string <var>s_biography</var></dt>
   *       <dd>A description of the staff member. This description can include HTML tags.</dd>
   *       <dt>string <var>s_family</var></dt>
   *       <dd>The staff member’s surname.</dd>
   *       <dt>string <var>s_name</var></dt>
   *       <dd>The staff member’s first name.</dd>
   *       <dt>string <var>s_position</var></dt>
   *       <dd>The staff member’s position in the organization.</dd>
   *       <dt>string <var>uid</var></dt>
   *       <dd>User ID. Each staff member in WellnessLiving can also access the system as a client of their business.
   *       This is the ID number used to represent the staff member as a client.</dd>
   *     </dl>
   *   </dd>
   * </dl>
   *
   * <tt>null</tt> if data is not loaded yet.
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
   *   <dd>Staff member's gender. One of the {@link \AGenderSid} constants.</dd>
   *   <dt>string <var>s_biography</var></dt>
   *   <dd>A description of the staff member. This description can include HTML tags.</dd>
   *   <dt>string <var>s_family</var></dt>
   *   <dd>The staff member’s surname.</dd>
   *   <dt>string <var>s_name</var></dt>
   *   <dd>The staff member’s first name.</dd>
   *   <dt>string <var>s_position</var></dt>
   *   <dd>The staff member’s position in the organization.</dd>
   *   <dt>string <var>uid</var></dt>
   *   <dd>User ID. Each staff member in WellnessLiving can also access the system as a client of their business.
   *   This is the ID number used to represent the staff member as a client.</dd>
   * </dl>
   *
   * <tt>null</tt> if data is not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_staff = null;

  /**
   * List of staff keys.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string[]|null
   */
  public $a_staff_list = null;

  /**
   * The key of the business to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The staff member’s ID number. A staff member can work for more than one business. This ID can be found using the
   * Staff\StaffList\StaffListModel endpoint.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_staff = null;
}

?>