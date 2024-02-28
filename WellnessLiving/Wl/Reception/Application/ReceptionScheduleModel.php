<?php

namespace WellnessLiving\Wl\Reception\Application;

use WellnessLiving\WlModelAbstract;

/**
 * Shows schedule for check in process.
 *
 * Returns html code as we have ready functionality for this and want to save time avoiding re-building it into API and
 * javascript generation.
 */
class ReceptionScheduleModel extends WlModelAbstract
{
  /**
   * List of sessions to display. Contains:
   * <dl>
   *   <dt>array <var>a_resources_shared</var></dt>
   *   <dd>List of shared resources. Contains:<dl>
   *       <dt>string <var>k_resource</var></dt><dd>Resource key.</dd>
   *       <dt>string <var>s_title</var></dt><dd>Resource title.</dd>
   *   </dl></dd>
   *   <dt>array <var>a_staff_all</var></dt>
   *   <dd>List of staff members instructing. Contains:<dl>
   *       <dt>string <var>s_name_full</var></dt><dd>Full name of the staff member.</dd>
   *   </dl></dd>
   *   <dt>string <var>dtu_date</var></dt>
   *   <dd>Date of the session.</dd>
   *   <dt>string <var>html_class_js</var></dt>
   *   <dd>Javascript classes to display icon depending on type of service.</dd>
   *   <dt>int <var>i_duration</var></dt>
   *   <dd>Duration of the session in minutes.</dd>
   *   <dt>int <var>id_service</var></dt>
   *   <dd>Service ID. One of the {@link \WellnessLiving\Wl\Service\ServiceSid} constants.</dd>
   *   <dt>bool <var>is_auto</var></dt>
   *   <dd>`true` if the session can be checked in automatically, `false` otherwise.</dd>
   *   <dt>bool <var>is_book</var></dt>
   *   <dd>`true` if client should be notified that the visit is booked. `false` otherwise.</dd>
   *   <dt>bool <var>is_wait</var></dt>
   *   <dd>`true` if client should be notified that they are on the waitlist. `false` otherwise.</dd>
   *   <dt>string|null <var>k_appointment</var></dt>
   *   <dd>Appointment key. `null` if not an appointment.</dd>
   *   <dt>string|null <var>k_class_period</var></dt>
   *   <dd>Class period key. `null` if not a class or event.</dd>
   *   <dt>string|null <var>k_visit</var></dt>
   *   <dd>Visit key if the session has been checked in, `null` otherwise.</dd>
   *   <dt>string <var>s_class</var></dt>
   *   <dd>Name of the service.</dd>
   *   <dt>string <var>s_duration</var></dt>
   *   <dd>Duration of the session, formatted by business configuration.</dd>
   *   <dt>string <var>s_time</var></dt>
   *   <dd>Time the session takes place.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_class = [];

  /**
   * Data for the confirmation screen. Contains:
   * <dl>
   *   <dt>array <var>a_payment</var></dt>
   *   <dd>Data for the promotion payment informational card. Each element contains:<dl>
   *     <dt>array <var>a_restrict</var></dt>
   *     <dd>Calendar restrictions. A duration pass will only have elements if a restriction has been met. Contains: <dl>
   *       <dt>int <var>i_limit</var></dt><dd>Count of possible visits.</dd>
   *       <dt>int <var>i_remain</var></dt><dd>Count of remaining visits.</dd>
   *       <dt>bool <var>s_date</var></dt><dd>Name of the calendar period.</dd>
   *     </dl></dd>
   *     <dt>bool <var>has_visit_past</var></dt>
   *     <dd>`true` if the promotion was renewed in the past, `false` otherwise.</dd>
   *     <dt>bool <var>hide_visit_additional_info</var></dt>
   *     <dd>`true` if additional info should be excluded, `false otherwise.</dd>
   *     <dt>int <var>i_book</var></dt><dd>Count of upcoming uses of the promotion.</dd>
   *     <dt>int <var>i_book_duration</var></dt>
   *     <dd>
   *       Number of minutes used for upcoming visits.
   *       Has sense only for promotions of program type {@link \WellnessLiving\Wl\WlProgramTypeSid::DURATION}.
   *     </dd>
   *     <dt>int <var>i_limit</var></dt><dd>Limit on the visit count of the promotion.</dd>
   *     <dt>int <var>i_remain</var></dt><dd>Remaining count of visits.</dd>
   *     <dt>int <var>i_remain_duration</var></dt>
   *     <dd>
   *       Number of minutes left in this promotion.
   *       Has sense only for promotions of program type {@link \WellnessLiving\Wl\WlProgramTypeSid::DURATION}.
   *     </dd>
   *     <dt>int <var>i_use</var></dt><dd>Count of held uses in the pass.</dd>
   *     <dt>int <var>i_use_duration</var></dt>
   *     <dd>
   *       Number of minutes used for past visits by this promotion.
   *       Has sense only for promotions of program type {@link \WellnessLiving\Wl\WlProgramTypeSid::DURATION}.
   *     </dd>
   *     <dt>int <var>i_visit_past</var></dt>
   *     <dd>
   *       Count of attended sessions before last renew.
   *       `0` if there are no sessions before last renew or promotion is not auto-renew.
   *     </dd>
   *     <dt>int <var>id_program_type</var></dt><dd>ID of the promotion's program type.</dd>
   *     <dt>bool <var>is_last_use</var></dt>
   *     <dd>`true` if the promotion has a usage limit and no remaining visits. `false` otherwise.</dd>
   *     <dt>bool <var>is_package</var></dt><dd>`true` if promotion is a package, `false` otherwise.</dd>
   *     <dt>bool <var>is_restrict_multiply</var></dt>
   *     <dd>`true` if there is more than 1 calendar restriction on the pass, `false` otherwise.</dd>
   *     <dt>string <var>k_login_promotion</var></dt>
   *     <dd>Login promotion key.</dd>
   *     <dt>string <var>s_remain_measure</var></dt><dd>The formatted remaining duration on the promotion.</dd>
   *     <dt>bool <var>show_remain</var></dt>
   *     <dd>`true` if there is rollover on a pass with calendar restrictions, `false` otherwise.</dd>
   *     <dt>string <var>sid_program_type</var></dt><dd>SID of the promotion's program type.</dd>
   *   </dl></dd>
   *   <dt>array <var>a_resources_not_shared</var></dt>
   *   <dd>List of assets reserved individually at the time of booking. Contains:<dl>
   *       <dt>int <var>i_index</var></dt><dd>Busy resource index.</dd>
   *       <dt>string <var>s_title</var></dt><dd>Resource name.</dd>
   *   </dl></dd>
   *   <dt>string <var>dl_renew</var></dt>
   *   <dd>Promotion renewal date in local time.</dd>
   *   <dt>int <var>i_visits</var></dt>
   *   <dd>The total workouts attended.</dd>
   *   <dt>string <var>s_expire</var></dt>
   *   <dd>Short format of the promotion expiration date.</dd>
   *   <dt>string <var>s_payment</var></dt>
   *   <dd>The payment method used to book (free, unpaid, single buy or promotion name).</dd>
   *   <dt>string <var>s_renew</var></dt>
   *   <dd>Short format of the promotion renewal date.</dd>
   *   <dt>string <var>show_visits</var></dt>
   *   <dd>Whether to show the client's total workouts attended on the confirmation screen.</dd>
   * </dl>
   *
   * @post result
   * @var array
   */
  public $a_confirmation_data = [];

  /**
   * All types of services that appear in the schedule.
   * Keys are constants from {@link \WellnessLiving\Wl\Service\ServiceSid}. Values are the HTML classes associated with that service.
   *
   * @get result
   * @var array
   */
  public $a_schedule_class_all;

  /**
   * Date and time in UTC in MySQL format of the visit.
   *
   * @post post
   * @var string
   */
  public $dtu_date = '';

  /**
   * Confirmation template to be shown in Self Check In web application for selected user.
   *
   * @post result
   * @var string
   */
  public $html_confirmation = '';

  /**
   * Schedule to be shown in Self Check In web application for selected user.
   *
   * @get result
   * @var string
   */
  public $html_schedule = '';

  /**
   * Key of the appointment to check in.
   *
   * `null` if this is class visit or gym visit.
   *
   * @post post
   * @var string|null
   */
  public $k_appointment = null;

  /**
   * Key of the business, where Check In application is started.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the class schedule to check in.
   *
   * `null` if this is appointment visit or gym visit.
   *
   * @post post
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * Key of the location, where Check In application is started.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_location = '';

  /**
   * Key of the visit, which was added or checked in.
   *
   * @post result
   * @var string
   */
  public $k_visit = '';

  /**
   * Key of the Check In application.
   *
   * @get get
   * @post get
   * @var string
   */
  public $s_secret = '';

  /**
   * Key of the user to show schedule for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';
}

?>