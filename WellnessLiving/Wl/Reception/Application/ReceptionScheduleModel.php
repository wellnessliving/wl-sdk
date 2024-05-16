<?php

namespace WellnessLiving\Wl\Reception\Application;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Service\ServiceSid;
use WellnessLiving\Wl\WlProgramTypeSid;

/**
 * Shows the schedule for the check-in process.
 *
 * Returns the HTML code that is normally presented for the check-in process.
 */
class ReceptionScheduleModel extends WlModelAbstract
{
  /**
   * A list of sessions to display with the following fields:
   * <dl>
   *   <dt>array <var>a_resources_shared</var></dt>
   *   <dd>A list of shared resources containing:<dl>
   *       <dt>string <var>k_resource</var></dt><dd>The resource key.</dd>
   *       <dt>string <var>s_title</var></dt><dd>The resource title.</dd>
   *   </dl></dd>
   *   <dt>array <var>a_staff_all</var></dt>
   *   <dd>A list of staff members instructing the service, containing:<dl>
   *       <dt>string <var>s_name_full</var></dt><dd>The staff member's full name.</dd>
   *   </dl></dd>
   *   <dt>string <var>dtu_date</var></dt>
   *   <dd>The session date.</dd>
   *   <dt>string <var>html_class_js</var></dt>
   *   <dd>The name of the HTML class that JavaScript uses to display the icon, depending on the service type.</dd>
   *   <dt>int <var>i_duration</var></dt>
   *   <dd>The session duration in minutes.</dd>
   *   <dt>int <var>id_service</var></dt>
   *   <dd>Service ID. One of the {@link ServiceSid} constants.</dd>
   *   <dt>bool <var>is_auto</var></dt>
   *   <dd>If `true`, the session can be checked in automatically. Otherwise, this will be `false`.</dd>
   *   <dt>bool <var>is_book</var></dt>
   *   <dd>If `true`, the client should be notified that the visit is booked. Otherwise, this will be `false`.</dd>
   *   <dt>bool <var>is_wait</var></dt>
   *   <dd>If `true`, the client should be notified that they're on the wait list. Otherwise, this will be `false`.</dd>
   *   <dt>string|null <var>k_appointment</var></dt>
   *   <dd>The appointment key. If `null`, this isn't an appointment.</dd>
   *   <dt>string|null <var>k_class_period</var></dt>
   *   <dd>The class period key. If `null`, this isn't a class or event.</dd>
   *   <dt>string|null <var>k_visit</var></dt>
   *   <dd>The visit key if the session has been checked in. Otherwise, this will be `null`.</dd>
   *   <dt>string <var>s_class</var></dt>
   *   <dd>The service name.</dd>
   *   <dt>string <var>s_duration</var></dt>
   *   <dd>The session duration, formatted by the business configuration.</dd>
   *   <dt>string <var>s_time</var></dt>
   *   <dd>The time the session takes place.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_class = [];

  /**
   * Data for the confirmation screen with the following fields:
   * <dl>
   *   <dt>array <var>a_payment</var></dt>
   *   <dd>Data for the promotion payment informational card. Each element contains:<dl>
   *     <dt>array <var>a_restrict</var></dt>
   *     <dd>Calendar restrictions. A duration pass will only have elements if a restriction has been met. This contains: <dl>
   *       <dt>int <var>i_limit</var></dt><dd>The count of possible visits.</dd>
   *       <dt>int <var>i_remain</var></dt><dd>The count of remaining visits.</dd>
   *       <dt>bool <var>s_date</var></dt><dd>The calendar period name.</dd>
   *     </dl></dd>
   *     <dt>bool <var>has_visit_past</var></dt>
   *     <dd>If `true`, the promotion was renewed in the past. Otherwise, this will be `false`.</dd>
   *     <dt>bool <var>hide_visit_additional_info</var></dt>
   *     <dd>If `true`, additional info should be excluded. Otherwise, this will be `false`.</dd>
   *     <dt>int <var>i_book</var></dt><dd>The count of upcoming uses of the promotion.</dd>
   *     <dt>int <var>i_book_duration</var></dt>
   *     <dd>
   *       Number of minutes used for upcoming visits.
   *       Has sense only for promotions of program type {@link WlProgramTypeSid::DURATION}.
   *     </dd>
   *     <dt>int <var>i_limit</var></dt><dd>The promotion's visit count limit.</dd>
   *     <dt>int <var>i_remain</var></dt><dd>The remaining count of visits.</dd>
   *     <dt>int <var>i_remain_duration</var></dt>
   *     <dd>
   *       Number of minutes left in this promotion.
   *       Has sense only for promotions of program type {@link WlProgramTypeSid::DURATION}.
   *     </dd>
   *     <dt>int <var>i_use</var></dt><dd>Count of held uses in the pass.</dd>
   *     <dt>int <var>i_use_duration</var></dt>
   *     <dd>
   *       Number of minutes used for past visits by this promotion.
   *       Has sense only for promotions of program type {@link WlProgramTypeSid::DURATION}.
   *     </dd>
   *     <dt>int <var>i_visit_past</var></dt>
   *     <dd>
   *       The count of attended sessions before the last renewal.
   *       If `0`, there were no sessions before last renewal or the promotion doesn't auto-renew.
   *     </dd>
   *     <dt>int <var>id_program_type</var></dt><dd>The promotion's program type ID.</dd>
   *     <dt>bool <var>is_last_use</var></dt>
   *     <dd>If `true`, the promotion has a usage limit and no remaining visits. Otherwise, this will be `false`.</dd>
   *     <dt>bool <var>is_package</var></dt><dd>If `true`, the promotion is a package. Otherwise, this will be `false`.</dd>
   *     <dt>bool <var>is_restrict_multiply</var></dt>
   *     <dd>If `true`, there's more than one calendar restriction on the pass. Otherwise, this will be `false`.</dd>
   *     <dt>string <var>k_login_promotion</var></dt>
   *     <dd>The login promotion key.</dd>
   *     <dt>string <var>s_remain_measure</var></dt><dd>The formatted remaining duration on the promotion.</dd>
   *     <dt>bool <var>show_remain</var></dt>
   *     <dd>If `true`, there's a rollover on the pass with calendar restrictions. Otherwise, this will be `false`.</dd>
   *     <dt>string <var>sid_program_type</var></dt><dd>The promotion's program type SID.</dd>
   *   </dl></dd>
   *   <dt>array <var>a_resources_not_shared</var></dt>
   *   <dd>The list of assets reserved individually at the time of booking containing:<dl>
   *       <dt>int <var>i_index</var></dt><dd>The busy resource index.</dd>
   *       <dt>string <var>s_title</var></dt><dd>The resource name.</dd>
   *   </dl></dd>
   *   <dt>string <var>dl_renew</var></dt>
   *   <dd>The promotion renewal date in local time.</dd>
   *   <dt>int <var>i_visits</var></dt>
   *   <dd>The total workouts attended.</dd>
   *   <dt>string <var>s_expire</var></dt>
   *   <dd>The short format of the promotion expiration date.</dd>
   *   <dt>string <var>s_payment</var></dt>
   *   <dd>The payment method used to book (free, unpaid, single buy, or promotion name).</dd>
   *   <dt>string <var>s_renew</var></dt>
   *   <dd>The short format of the promotion renewal date.</dd>
   *   <dt>string <var>show_visits</var></dt>
   *   <dd>Determines whether to show the client's total workouts attended on the confirmation screen.</dd>
   * </dl>
   *
   * @post result
   * @var array
   */
  public $a_confirmation_data = [];

  /**
   * All types of services that appear in the schedule.
   * Keys are constants from {@link ServiceSid}. Values are the HTML classes associated with that service.
   *
   * @get result
   * @var array
   */
  public $a_schedule_class_all;

  /**
   * The date and time of the visit in UTC and MySQL format.
   *
   * @post post
   * @var string
   */
  public $dtu_date = '';

  /**
   * The confirmation template to be shown in the Self Check-In Web App for the selected user.
   *
   * @post result
   * @var string
   */
  public $html_confirmation = '';

  /**
   * The schedule to be shown in the Self Check-In Web App for the selected user.
   *
   * @get result
   * @var string
   */
  public $html_schedule = '';

  /**
   * The key of the appointment to check in.
   *
   * If `null`, this is class visit or gym visit.
   *
   * @post post
   * @var string|null
   */
  public $k_appointment = null;

  /**
   * The business key, where the Self Check-In Web App is started.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * The key of the class schedule to check in.
   *
   * If `null`, this is an appointment visit or gym visit.
   *
   * @post post
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * The location key, where the Self Check-In Web App is started.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_location = '';

  /**
   * The visit key, which was added or checked in.
   *
   * @post result
   * @var string
   */
  public $k_visit = '';

  /**
   * The key of the Self Check-In Web App.
   *
   * @get get
   * @post get
   * @var string
   */
  public $s_secret = '';

  /**
   * The key of the user to show the schedule for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';
}

?>