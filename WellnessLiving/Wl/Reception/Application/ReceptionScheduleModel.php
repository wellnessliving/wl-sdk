<?php

namespace WellnessLiving\Wl\Reception\Application;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Service\ServiceSid;
use WellnessLiving\Wl\WlProgramTypeSid;

/**
 * Shows the schedule for the check-in process.
 *
 * Returns the HTML code that is normally presented for the check-in process.
 *
 * @method WlModelRequest get() Returns the schedule and HTML for the Self Check-In Web App for the given user.  Returns the rendered schedule HTML, a structured list of upcoming sessions, and a map of service type HTML classes for the authenticated user at the given location.
 * @method WlModelRequest post() Performs check-in for the given user and returns the confirmation HTML and data.  Books or checks the user into the specified class period or appointment, then returns confirmation HTML and structured data including payment info, assigned assets, and visit counts.
 */
class ReceptionScheduleModel extends WlModelAbstract
{
  /**
   * A list of sessions to display with the following fields:
   *
   * <dl>
   *   <dt>array `a_resources_shared`</dt>
   *   <dd>
   *     A list of shared resources containing:
   *     <dl>
   *       <dt>string `k_resource`</dt>
   *       <dd>The resource key.</dd>
   * 
   *       <dt>string `s_title`</dt>
   *       <dd>The resource title.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_staff_all`</dt>
   *   <dd>
   *     A list of staff members instructing the service, containing:
   *     <dl>
   *       <dt>string `s_name_full`</dt>
   *       <dd>The staff member's full name.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `dtu_date`</dt>
   *   <dd>The session date.</dd>
   * 
   *   <dt>string `html_class_js`</dt>
   *   <dd>The name of the HTML class that JavaScript uses to display the icon, depending on the service type.</dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>The session duration in minutes.</dd>
   * 
   *   <dt>int `id_service`</dt>
   *   <dd>Service ID. One of the {@link ServiceSid} constants.</dd>
   * 
   *   <dt>bool `is_auto`</dt>
   *   <dd>If `true`, the session can be checked in automatically. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_book`</dt>
   *   <dd>If `true`, the client should be notified that the visit is booked. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_wait`</dt>
   *   <dd>If `true`, the client should be notified that they're on the wait list. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>string|null `k_appointment`</dt>
   *   <dd>The appointment key. If `null`, this isn't an appointment.</dd>
   * 
   *   <dt>string|null `k_class_period`</dt>
   *   <dd>The class period key. If `null`, this isn't a class or event.</dd>
   * 
   *   <dt>string|null `k_visit`</dt>
   *   <dd>The visit key if the session has been checked in. Otherwise, this will be `null`.</dd>
   * 
   *   <dt>string `s_class`</dt>
   *   <dd>The service name.</dd>
   * 
   *   <dt>string `s_duration`</dt>
   *   <dd>The session duration, formatted by the business configuration.</dd>
   * 
   *   <dt>string `s_time`</dt>
   *   <dd>The time the session takes place.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_class = [];

  /**
   * Data for the confirmation screen with the following fields:
   *
   * <dl>
   *   <dt>array `a_payment`</dt>
   *   <dd>
   *     Data for the promotion payment informational card. Each element contains:
   *     <dl>
   *       <dt>array `a_restrict`</dt>
   *       <dd>
   *         Calendar restrictions. A duration pass will only have elements if a restriction has been met. This contains:
   *         <dl>
   *           <dt>int `i_limit`</dt>
   *           <dd>The count of possible visits.</dd>
   * 
   *           <dt>int `i_remain`</dt>
   *           <dd>The count of remaining visits.</dd>
   * 
   *           <dt>string `s_date`</dt>
   *           <dd>The calendar period name.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>bool `has_visit_past`</dt>
   *       <dd>If `true`, the promotion was renewed in the past. Otherwise, this will be `false`.</dd>
   * 
   *       <dt>bool `hide_visit_additional_info`</dt>
   *       <dd>If `true`, additional info should be excluded. Otherwise, this will be `false`.</dd>
   * 
   *       <dt>int `i_book`</dt>
   *       <dd>The count of upcoming uses of the promotion.</dd>
   * 
   *       <dt>int `i_book_duration`</dt>
   *       <dd>
   *         Number of minutes used for upcoming visits.
   *   Has sense only for promotions of program type {@link WlProgramTypeSid::DURATION}.
   *       </dd>
   * 
   *       <dt>int `i_limit`</dt>
   *       <dd>The promotion's visit count limit.</dd>
   * 
   *       <dt>int `i_remain`</dt>
   *       <dd>The remaining count of visits.</dd>
   * 
   *       <dt>int `i_remain_duration`</dt>
   *       <dd>
   *         Number of minutes left in this promotion.
   *   Has sense only for promotions of program type {@link WlProgramTypeSid::DURATION}.
   *       </dd>
   * 
   *       <dt>int `i_use`</dt>
   *       <dd>Count of held uses in the pass.</dd>
   * 
   *       <dt>int `i_use_duration`</dt>
   *       <dd>
   *         Number of minutes used for past visits by this promotion.
   *   Has sense only for promotions of program type {@link WlProgramTypeSid::DURATION}.
   *       </dd>
   * 
   *       <dt>int `i_visit_past`</dt>
   *       <dd>
   *         The count of attended sessions before the last renewal.
   *   If `0`, there were no sessions before last renewal or the promotion doesn't auto-renew.
   *       </dd>
   * 
   *       <dt>int `id_program_type`</dt>
   *       <dd>The promotion's program type ID. One of {@link WlProgramTypeSid} constants.</dd>
   * 
   *       <dt>bool `is_last_use`</dt>
   *       <dd>If `true`, the promotion has a usage limit and no remaining visits. Otherwise, this will be `false`.</dd>
   * 
   *       <dt>bool `is_package`</dt>
   *       <dd>If `true`, the promotion is a package. Otherwise, this will be `false`.</dd>
   * 
   *       <dt>bool `is_restrict_multiply`</dt>
   *       <dd>If `true`, there's more than one calendar restriction on the pass. Otherwise, this will be `false`.</dd>
   * 
   *       <dt>string `k_login_promotion`</dt>
   *       <dd>The login promotion key. </dd>
   * 
   *       <dt>string `s_remain_measure`</dt>
   *       <dd>The formatted remaining duration on the promotion.</dd>
   * 
   *       <dt>bool `show_remain`</dt>
   *       <dd>If `true`, there's a rollover on the pass with calendar restrictions. Otherwise, this will be `false`.</dd>
   * 
   *       <dt>string `sid_program_type`</dt>
   *       <dd>The promotion's program type SID.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_resources_not_shared`</dt>
   *   <dd>
   *     The list of assets reserved individually at the time of booking containing:
   *     <dl>
   *       <dt>int `i_index`</dt>
   *       <dd>The busy resource index.</dd>
   * 
   *       <dt>string `s_title`</dt>
   *       <dd>The resource name.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `dl_renew`</dt>
   *   <dd>The promotion renewal date in local time.</dd>
   * 
   *   <dt>int `i_visits`</dt>
   *   <dd>The total workouts attended.</dd>
   * 
   *   <dt>string `s_expire`</dt>
   *   <dd>The short format of the promotion expiration date.</dd>
   * 
   *   <dt>string `s_payment`</dt>
   *   <dd>The payment method used to book (free, unpaid, single buy, or promotion name).</dd>
   * 
   *   <dt>string `s_renew`</dt>
   *   <dd>The short format of the promotion renewal date.</dd>
   * 
   *   <dt>bool `show_visits`</dt>
   *   <dd>Determines whether to show the client's total workouts attended on the confirmation screen.</dd>
   * </dl>
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