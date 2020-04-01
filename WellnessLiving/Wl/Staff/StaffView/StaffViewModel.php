<?php

namespace WellnessLiving\Wl\Staff\StaffView;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about a staff member.
 *
 * This method can accept or one staff key {@link StaffViewApi::$k_staff} or staff list
 * {@link StaffViewApi::$a_staff_list} but not both (exception would be thrown).
 */
class StaffViewModel extends WlModelAbstract
{
  /**
   * Contains staff schedule of classes per day.
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
   *   <dd>Day of week. One of {@link ADateWeekSid} constants.</dd>
   * </dl>
   *
   * <tt>null</tt> if data is not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_class_day = null;

  /**
   * Staff list of staff data and class day.
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
   *       <dd>Day of week. One of {@link ADateWeekSid} constants.</dd>
   *     </dl>
   *   </dd>
   *   <dt>array <var>a_staff</var></dt>
   *   <dd>
   *     Staff information:
   *     <dl>
   *       <dt>int <var>id_gender</var></dt>
   *       <dd>Staff member's gender. One of {@link \AGenderSid} constants.</dd>
   *       <dt>string <var>s_biography</var></dt>
   *       <dd>Staff biography.</dd>
   *       <dt>string <var>s_family</var></dt>
   *       <dd>1st letter of surname.</dd>
   *       <dt>string <var>s_name</var></dt>
   *       <dd>Staff name.</dd>
   *       <dt>string <var>s_position</var></dt>
   *       <dd>Staff job name.</dd>
   *       <dt>string <var>uid</var></dt>
   *       <dd>Staff user ID.</dd>
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
   * Staff information.
   *
   * <dl>
   *   <dt>int <var>id_gender</var></dt>
   *   <dd>Staff member's gender. One of {@link \AGenderSid} constants.</dd>
   *   <dt>string <var>s_biography</var></dt>
   *   <dd>Staff biography.</dd>
   *   <dt>string <var>s_family</var></dt>
   *   <dd>1st letter of surname.</dd>
   *   <dt>string <var>s_name</var></dt>
   *   <dd>Staff name.</dd>
   *   <dt>string <var>s_position</var></dt>
   *   <dd>Staff job name.</dd>
   *   <dt>string <var>uid</var></dt>
   *   <dd>Staff user ID.</dd>
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
   * ID of a business to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Staff ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_staff = null;
}

?>