<?php

namespace WellnessLiving\Wl\Login\Attendance;

use WellnessLiving\Core\Quiz\ResponseStatusSid;
use WellnessLiving\Core\a\AGenderSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Login\Type\ShapeSid;
use WellnessLiving\Wl\Member\Progress\Field\MeasurementSid;
use WellnessLiving\Wl\Member\Progress\Field\ProgressFieldSid;
use WellnessLiving\Wl\Member\Progress\Field\TypeSid;
use WellnessLiving\Wl\Profile\PurchaseList\PurchaseListElementModel;
use WellnessLiving\Wl\Profile\Sensor\SensorTypesSid;
use WellnessLiving\Wl\Visit\PassProspectSid;
use WellnessLiving\Wl\Visit\WlVisitSid;
use WellnessLiving\Wl\WlProgramSid;

/**
 * Retrieves information about clients attending a class, appointment, or event session.
 *
 * @method WlModelRequest get() Returns the attendance list for a class period or appointment session.  Accepts either a class period key with a local date or an appointment key, validates access and date, and returns the active list, wait list, and confirmed list of attending clients, along with session capacity, wait list limit, and per-client details such as purchase option, visit status, wearables, and quiz responses.
 */
class AttendanceListModel extends WlModelAbstract
{
  /**
   * The list of clients in the active attendance list who haven't confirmed or canceled.
   * Each element is an array with the following fields:
   *
   * <dl>
   *   <dt>array `a_info`</dt>
   *   <dd>
   *     Information about member.
   * 
   *     <dl>
   *       <dt>array[] `a_icon`</dt>
   *       <dd>
   *         List of icons with additional information about business member.
   *    
   *         <dl>
   *           <dt>string `s_color_background`</dt>
   *           <dd>Color of background.</dd>
   * 
   *           <dt>string `s_color_foreground`</dt>
   *           <dd>Color of letter.</dd>
   * 
   *           <dt>string `s_letter`</dt>
   *           <dd>Icon letter.</dd>
   * 
   *           <dt>string `s_shape`</dt>
   *           <dd>Symbol from font of shapes.</dd>
   * 
   *           <dt>string `s_title`</dt>
   *           <dd>Title.</dd>
   * 
   *           <dt>string `sid_shape`</dt>
   *           <dd>SID of the icon type shape. Constant from {@link ShapeSid}.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array[] `a_vaccination_status`</dt>
   *       <dd>
   *         Information about users vaccination status.
   *         <dl>
   *           <dt>string `sid_vaccination_status`</dt>
   *           <dd>
   *             Vaccination status sid.
   *           </dd>
   * 
   *           <dt>string `text_vaccination_status`</dt>
   *           <dd>Vaccination status.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array[] `a_note`</dt>
   *       <dd>
   *         List of client's notes. Every element has keys:
   *         <dl>
   *           <dt>string `html_note`</dt>
   *           <dd>HTML text ready to be pasted in browser.</dd>
   * 
   *           <dt>bool `is_flag`</dt>
   *           <dd><tt>true</tt> if this note has a flag; <tt>false</tt> otherwise.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `html_credit`</dt>
   *       <dd>Amount the client owns to the business.</dd>
   * 
   *       <dt>string `html_note`</dt>
   *       <dd>User`s login notes.</dd>
   * 
   *       <dt>int `i_visit_credit`</dt>
   *       <dd>Count of unpaid visits if client has at least one.</dd>
   * 
   *       <dt>bool `is_account_positive`</dt>
   *       <dd>If the user has a positive balance on his account.</dd>
   * 
   *       <dt>bool `is_birthday`</dt>
   *       <dd>If a user has a birthday today.</dd>
   * 
   *       <dt>bool `is_contract`</dt>
   *       <dd><tt>true</tt> if client has some contracts that he should agree.</dd>
   * 
   *       <dt>bool `is_family_payer`</dt>
   *       <dd>`true` if the user makes payments for a family member, `false` otherwise.</dd>
   * 
   *       <dt>bool `is_first`</dt>
   *       <dd><tt>true</tt> if this is a first visit of the client.</dd>
   * 
   *       <dt>bool `is_form`</dt>
   *       <dd>`true` if the client has uncompleted one or more forms.</dd>
   * 
   *       <dt>bool `is_task_active`</dt>
   *       <dd><tt>true</tt> if for user exists not completed tasks.</dd>
   * 
   *       <dt>bool `is_task_urgent`</dt>
   *       <dd><tt>true</tt> if for user exists urgent tasks.</dd>
   * 
   *       <dt>bool `is_waiver`</dt>
   *       <dd><tt>true</tt> if client has not agreed with online waiver.</dd>
   * 
   *       <dt>string `k_currency`</dt>
   *       <dd>
   *         Currency of business <var>$k_business</var>.
   *    
   *    It is currency of amount <var>m_credit</var>.
   *       </dd>
   * 
   *       <dt>string `m_credit`</dt>
   *       <dd>User's account balance.</dd>
   * 
   *       <dt>bool `show_amount`</dt>
   *       <dd>Display user balance or not.</dd>
   * 
   *       <dt>string `text_address`</dt>
   *       <dd>User's address.</dd>
   * 
   *       <dt>string `text_age`</dt>
   *       <dd>Users age. Appears only on the day of birth.</dd>
   * 
   *       <dt>string `text_mail`</dt>
   *       <dd>User's email.</dd>
   * 
   *       <dt>string `text_phone`</dt>
   *       <dd>User's cell phone.</dd>
   * 
   *       <dt>string `text_firstname`</dt>
   *       <dd>Users first name.</dd>
   * 
   *       <dt>string `text_visit_credit`</dt>
   *       <dd>Link to the page with client's attendance.</dd>
   * 
   *       <dt>string `url_attendance`</dt>
   *       <dd>Link to the page with information about client's account balance.</dd>
   * 
   *       <dt>string `url_billing`</dt>
   *       <dd>Link to user's billing page.</dd>
   * 
   *       <dt>string `url_contract`</dt>
   *       <dd>Link to user's contract page</dd>
   * 
   *       <dt>string `url_form`</dt>
   *       <dd>Link to user's forms page.</dd>
   * 
   *       <dt>string `url_overview`</dt>
   *       <dd>Link to the client's overview page. Empty if for user not existing active or urgent tasks.</dd>
   * 
   *       <dt>string `url_profile`</dt>
   *       <dd>Link to user's profile.</dd>
   * 
   *       <dt>string `url_waiver`</dt>
   *       <dd>Link to user's waiver page.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_photo`</dt>
   *   <dd>
   *     Information about the user's photo. The information returned has the following structure:
   *     <dl>
   *       <dt>int `i_height`</dt>
   *       <dd>The height of the photo.</dd>
   * 
   *       <dt>int `i_width`</dt>
   *       <dd>The width of the photo.</dd>
   * 
   *       <dt>bool `is_empty`</dt>
   *       <dd>This will be `true` if a photo hasn't been set yet.</dd>
   * 
   *       <dt>string `s_url`</dt>
   *       <dd>The URL of the photo.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_progress`</dt>
   *   <dd>
   *     Information about a user's current progress. By default, this information isn't sent.
   *     <dl>
   *       <dt>int `id_field`</dt>
   *       <dd>Field ID. One of the {@link ProgressFieldSid}.</dd>
   * 
   *       <dt>int `id_measurement_unit`</dt>
   *       <dd>Field measurement unit ID. One of the {@link MeasurementSid} constants.</dd>
   * 
   *       <dt>int `id_type`</dt>
   *       <dd>Field type ID. One of the {@link TypeSid} constants.</dd>
   * 
   *       <dt>string `k_field`</dt>
   *       <dd>Field key. </dd>
   * 
   *       <dt>mixed `x_value`</dt>
   *       <dd>Progress field log value.</dd>
   * 
   *       <dt>string `text_name`</dt>
   *       <dd>Translated field name.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_quiz`</dt>
   *   <dd>
   *     Quiz information that concerns current visit.
   *   
   *     <dl>
   *       <dt>int `id_status`</dt>
   *       <dd>Response status ID. One of {@link ResponseStatusSid} constants.</dd>
   * 
   *       <dt>bool `is_hide`</dt>
   *       <dd>Whether it's hidden. `true` quiz is hidden, `false` otherwise.</dd>
   * 
   *       <dt>bool `is_require`</dt>
   *       <dd>Whether it's required. `true` quiz is required, `false` otherwise.</dd>
   * 
   *       <dt>string `k_quiz`</dt>
   *       <dd>Quiz key. </dd>
   * 
   *       <dt>string `k_quiz_login`</dt>
   *       <dd>Quiz login key. </dd>
   * 
   *       <dt>string `k_quiz_response`</dt>
   *       <dd>Quiz response key. </dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Quiz title.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_resource`</dt>
   *   <dd>
   *     A list of information for any associated resources for this visit. Each element:
   *     <dl>
   *       <dt>int `i_index`</dt>
   *       <dd>Index of the resource among multiple assets. `0` if the resource was booked from the wait list.</dd>
   * 
   *       <dt>string `k_resource`</dt>
   *       <dd>Resource key. </dd>
   * 
   *       <dt>string `text_alias`</dt>
   *       <dd>Resource layout alias.</dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Resource title.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_wait_confirm`</dt>
   *   <dd>
   *     The date and time when the client transitioned from the wait list to the active list, in human-readable
   * format. Empty array if the visit is not awaiting confirmation. Each element:
   *     <dl>
   *       <dt>string `s_day`</dt>
   *       <dd>The formatted date string (for example, "Monday, Nov 08, 2021").</dd>
   * 
   *       <dt>string `s_time`</dt>
   *       <dd>The formatted time string (for example, "10:00 AM").</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_wearable`</dt>
   *   <dd>
   *     A list of information pertaining to the client's wearables.
   *     <dl>
   *       <dt>int `id_type`</dt>
   *       <dd>Device type ID. One of {@link SensorTypesSid} constants.</dd>
   * 
   *       <dt>bool `is_remove`</dt>
   *       <dd>`true` if the device has been removed.</dd>
   * 
   *       <dt>string `s_sensor`</dt>
   *       <dd>Sensor identifier. Also used as the array key.</dd>
   * 
   *       <dt>string `text_name`</dt>
   *       <dd>Device name.</dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>User key. </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `can_profile`</dt>
   *   <dd>If `true`, the current user can access this client profile.</dd>
   * 
   *   <dt>string `dt_book`</dt>
   *   <dd>The date the session was booked, in UTC.</dd>
   * 
   *   <dt>string `dt_date`</dt>
   *   <dd>The date of the session, in UTC.</dd>
   * 
   *   <dt>string `dt_expire`</dt>
   *   <dd>The date the Purchase Option that was used will expire, in UTC.</dd>
   * 
   *   <dt>string `dt_register`</dt>
   *   <dd>The date the client checked in for the visit, in UTC.</dd>
   * 
   *   <dt>string `html_age`</dt>
   *   <dd>The client age.</dd>
   * 
   *   <dt>string `html_book_by`</dt>
   *   <dd>The name of the person who booked this visit.</dd>
   * 
   *   <dt>string `html_gender_class`</dt>
   *   <dd>The name of the icon to show under gender in the class attendance list.</dd>
   * 
   *   <dt>string `html_member`</dt>
   *   <dd>The client's member ID, if set.</dd>
   * 
   *   <dt>string `html_tooltip_book_by`</dt>
   *   <dd>When and where this visit was booked, along with who booked it.</dd>
   * 
   *   <dt>int `i`</dt>
   *   <dd>The default place in the list to show this client. This is a deprecated copy of the `i_order` field.</dd>
   * 
   *   <dt>int `i_left`</dt>
   *   <dd>The number of visits left on this Purchase Option. This will be `NULL` if there's no limit.</dd>
   * 
   *   <dt>int `i_order`</dt>
   *   <dd>The default place in the list to show this client.</dd>
   * 
   *   <dt>int `i_total`</dt>
   *   <dd>The total visits available from this Purchase Option.</dd>
   * 
   *   <dt>int `i_visit_return`</dt>
   *   <dd>Number of purchase option usages that was returned to user.</dd>
   * 
   *   <dt>int `id_gender`</dt>
   *   <dd>The gender ID of the client. One of the {@link AGenderSid} constants.</dd>
   * 
   *   <dt>int `id_pass_prospect`</dt>
   *   <dd>
   *     If this visit was paid for by an external system, this ID will be set. Otherwise, it will be `0`. One of {@link PassProspectSid} constants.
   *   </dd>
   * 
   *   <dt>int `id_program`</dt>
   *   <dd>The program ID of the Purchase Option. One of the {@link WlProgramSid} constants.</dd>
   * 
   *   <dt>int `id_visit`</dt>
   *   <dd>The status of the visit. One of the {@link WlVisitSid} constants.</dd>
   * 
   *   <dt>bool `is_attend`</dt>
   *   <dd>This will be `true` if the client has attended the visit.</dd>
   * 
   *   <dt>bool `is_duration_pass`</dt>
   *   <dd>This will be `true` if the Purchase Option used is a duration pass.</dd>
   * 
   *   <dt>bool `is_deposit`</dt>
   *   <dd>This will be `true` if the client has paid a deposit for the visit.</dd>
   * 
   *   <dt>bool `is_early`</dt>
   *   <dd>
   *     This will be `true` if the client has canceled the visit early, incurring no penalty.
   * This will be `false` if canceled late or if not canceled at all.
   *   </dd>
   * 
   *   <dt>bool `is_free`</dt>
   *   <dd>This will be `true` if the visit is free.</dd>
   * 
   *   <dt>bool `is_hidden`</dt>
   *   <dd>This will be `true` if details on this visit should be hidden from staff members.</dd>
   * 
   *   <dt>bool `is_penalty`</dt>
   *   <dd>This will be `true` if this visit was cancelled late and a penalty is applied.</dd>
   * 
   *   <dt>bool `is_promotion_first`</dt>
   *   <dd>This will be `true` if this was the first visit for the Purchase Option used.</dd>
   * 
   *   <dt>bool `is_promotion_last`</dt>
   *   <dd>This will be `true` if this was the latest visit for the Purchase Option used.</dd>
   * 
   *   <dt>bool `is_unlimited`</dt>
   *   <dd>This will be `true` if the Purchase Option used has no usage limits.</dd>
   * 
   *   <dt>bool `is_visit`</dt>
   *   <dd>
   *     This will be `true` if this visit is still considered valid.
   * If visit was removed by the system or a staff member, this will be `false`.
   *   </dd>
   * 
   *   <dt>bool `is_wait`</dt>
   *   <dd>This will be `true` if the visit is on the waiting list.</dd>
   * 
   *   <dt>bool `is_wait_confirm`</dt>
   *   <dd>This will be `true` if the visit is awaiting confirmation.</dd>
   * 
   *   <dt>bool `is_wait_priority`</dt>
   *   <dd>This will be `true` if the visit has priority on the wait list.</dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>The key of the location.</dd>
   * 
   *   <dt>string `k_login_promotion`</dt>
   *   <dd>The key of the client's Purchase Option.</dd>
   * 
   *   <dt>string `k_visit`</dt>
   *   <dd>The key of the visit.</dd>
   * 
   *   <dt>object|null `o_purchase_item`</dt>
   *   <dd>
   *     The purchase used to pay for the session. Instance of {@link PurchaseListElementModel}.
   * `null` if the visit has no associated purchase or access is denied. Only present when
   * `is_purchase_info_return` is `true`.
   *   </dd>
   * 
   *   <dt>string `s_expire`</dt>
   *   <dd>The expiry information for the Purchase Option. This field is deprecated, use the text_ version instead.</dd>
   * 
   *   <dt>string `s_firstname`</dt>
   *   <dd>The client's first name. This field is deprecated, use the text_ version instead.</dd>
   * 
   *   <dt>string `s_lastname`</dt>
   *   <dd>The client's last name. This field is deprecated, use the text_ version instead.</dd>
   * 
   *   <dt>string `s_note`</dt>
   *   <dd>Any notes tied to the client. This field is deprecated, use the text_ version instead.</dd>
   * 
   *   <dt>string `s_promotion`</dt>
   *   <dd>The description of the type of Purchase Option. This field is deprecated, use the text_ version instead.</dd>
   * 
   *   <dt>string `text_expire`</dt>
   *   <dd>The expiry information for the Purchase Option.</dd>
   * 
   *   <dt>string `text_firstname`</dt>
   *   <dd>The client first name.</dd>
   * 
   *   <dt>string `text_lastname`</dt>
   *   <dd>The client last name.</dd>
   * 
   *   <dt>string `text_note`</dt>
   *   <dd>Any notes tied to the client.</dd>
   * 
   *   <dt>string `text_promotion_return`</dt>
   *   <dd>Title of purchase option usages of that was returned to user.</dd>
   * 
   *   <dt>string `text_promotion`</dt>
   *   <dd>The description of the type of Purchase Option.</dd>
   * 
   *   <dt>string `text_restrict_title`</dt>
   *   <dd>
   *     The Purchase Option restriction description. It can be empty string when the Purchase Option has no restrictions.
   *   </dd>
   * 
   *   <dt>string `text_visit_status_class`</dt>
   *   <dd>The class visit status.</dd>
   * 
   *   <dt>string `text_visit_status_icon`</dt>
   *   <dd>The icon to use for the class visit status.</dd>
   * 
   *   <dt>string `text_wearable`</dt>
   *   <dd>The wearable device ID.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>The client user key.</dd>
   * 
   *   <dt>string `uid_book`</dt>
   *   <dd>
   *     The key of the user who made the booking.
   * If differing from `uid`, the booking could have been made by a staff or family member.
   *   </dd>
   * 
   *   <dt>string `url-cancel`</dt>
   *   <dd>The URL that can be used to cancel the visit.</dd>
   * 
   *   <dt>string `url-cancel-admin`</dt>
   *   <dd>The URL that can be used by an admin to cancel the visit.</dd>
   * 
   *   <dt>string `url-login-view`</dt>
   *   <dd>The URL that for the user's page.</dd>
   * 
   *   <dt>string `url-mail`</dt>
   *   <dd>The URL to a page for sending an email to the client.</dd>
   * 
   *   <dt>string `url-profile`</dt>
   *   <dd>The URL that for the client's profile.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_list_active = [];

  /**
   * The list of clients who have confirmed their attendance.
   *
   * <dl>
   *   <dt>array `a_info`</dt>
   *   <dd>
   *     Information about member.
   * 
   *     <dl>
   *       <dt>array[] `a_icon`</dt>
   *       <dd>
   *         List of icons with additional information about business member.
   *    
   *         <dl>
   *           <dt>string `s_color_background`</dt>
   *           <dd>Color of background.</dd>
   * 
   *           <dt>string `s_color_foreground`</dt>
   *           <dd>Color of letter.</dd>
   * 
   *           <dt>string `s_letter`</dt>
   *           <dd>Icon letter.</dd>
   * 
   *           <dt>string `s_shape`</dt>
   *           <dd>Symbol from font of shapes.</dd>
   * 
   *           <dt>string `s_title`</dt>
   *           <dd>Title.</dd>
   * 
   *           <dt>string `sid_shape`</dt>
   *           <dd>SID of the icon type shape. Constant from {@link ShapeSid}.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array[] `a_vaccination_status`</dt>
   *       <dd>
   *         Information about users vaccination status.
   *         <dl>
   *           <dt>string `sid_vaccination_status`</dt>
   *           <dd>
   *             Vaccination status sid.
   *           </dd>
   * 
   *           <dt>string `text_vaccination_status`</dt>
   *           <dd>Vaccination status.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array[] `a_note`</dt>
   *       <dd>
   *         List of client's notes. Every element has keys:
   *         <dl>
   *           <dt>string `html_note`</dt>
   *           <dd>HTML text ready to be pasted in browser.</dd>
   * 
   *           <dt>bool `is_flag`</dt>
   *           <dd><tt>true</tt> if this note has a flag; <tt>false</tt> otherwise.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `html_credit`</dt>
   *       <dd>Amount the client owns to the business.</dd>
   * 
   *       <dt>string `html_note`</dt>
   *       <dd>User`s login notes.</dd>
   * 
   *       <dt>int `i_visit_credit`</dt>
   *       <dd>Count of unpaid visits if client has at least one.</dd>
   * 
   *       <dt>bool `is_account_positive`</dt>
   *       <dd>If the user has a positive balance on his account.</dd>
   * 
   *       <dt>bool `is_birthday`</dt>
   *       <dd>If a user has a birthday today.</dd>
   * 
   *       <dt>bool `is_contract`</dt>
   *       <dd><tt>true</tt> if client has some contracts that he should agree.</dd>
   * 
   *       <dt>bool `is_family_payer`</dt>
   *       <dd>`true` if the user makes payments for a family member, `false` otherwise.</dd>
   * 
   *       <dt>bool `is_first`</dt>
   *       <dd><tt>true</tt> if this is a first visit of the client.</dd>
   * 
   *       <dt>bool `is_form`</dt>
   *       <dd>`true` if the client has uncompleted one or more forms.</dd>
   * 
   *       <dt>bool `is_task_active`</dt>
   *       <dd><tt>true</tt> if for user exists not completed tasks.</dd>
   * 
   *       <dt>bool `is_task_urgent`</dt>
   *       <dd><tt>true</tt> if for user exists urgent tasks.</dd>
   * 
   *       <dt>bool `is_waiver`</dt>
   *       <dd><tt>true</tt> if client has not agreed with online waiver.</dd>
   * 
   *       <dt>string `k_currency`</dt>
   *       <dd>
   *         Currency of business <var>$k_business</var>.
   *    
   *    It is currency of amount <var>m_credit</var>.
   *       </dd>
   * 
   *       <dt>string `m_credit`</dt>
   *       <dd>User's account balance.</dd>
   * 
   *       <dt>bool `show_amount`</dt>
   *       <dd>Display user balance or not.</dd>
   * 
   *       <dt>string `text_address`</dt>
   *       <dd>User's address.</dd>
   * 
   *       <dt>string `text_age`</dt>
   *       <dd>Users age. Appears only on the day of birth.</dd>
   * 
   *       <dt>string `text_mail`</dt>
   *       <dd>User's email.</dd>
   * 
   *       <dt>string `text_phone`</dt>
   *       <dd>User's cell phone.</dd>
   * 
   *       <dt>string `text_firstname`</dt>
   *       <dd>Users first name.</dd>
   * 
   *       <dt>string `text_visit_credit`</dt>
   *       <dd>Link to the page with client's attendance.</dd>
   * 
   *       <dt>string `url_attendance`</dt>
   *       <dd>Link to the page with information about client's account balance.</dd>
   * 
   *       <dt>string `url_billing`</dt>
   *       <dd>Link to user's billing page.</dd>
   * 
   *       <dt>string `url_contract`</dt>
   *       <dd>Link to user's contract page</dd>
   * 
   *       <dt>string `url_form`</dt>
   *       <dd>Link to user's forms page.</dd>
   * 
   *       <dt>string `url_overview`</dt>
   *       <dd>Link to the client's overview page. Empty if for user not existing active or urgent tasks.</dd>
   * 
   *       <dt>string `url_profile`</dt>
   *       <dd>Link to user's profile.</dd>
   * 
   *       <dt>string `url_waiver`</dt>
   *       <dd>Link to user's waiver page.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_photo`</dt>
   *   <dd>
   *     Information about the user's photo. The information returned has the following structure:
   *     <dl>
   *       <dt>int `i_height`</dt>
   *       <dd>The height of the photo.</dd>
   * 
   *       <dt>int `i_width`</dt>
   *       <dd>The width of the photo.</dd>
   * 
   *       <dt>bool `is_empty`</dt>
   *       <dd>This will be `true` if a photo hasn't been set yet.</dd>
   * 
   *       <dt>string `s_url`</dt>
   *       <dd>The URL of the photo.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_progress`</dt>
   *   <dd>
   *     Information about a user's current progress. By default, this information isn't sent.
   *     <dl>
   *       <dt>int `id_field`</dt>
   *       <dd>Field ID. One of the {@link ProgressFieldSid}.</dd>
   * 
   *       <dt>int `id_measurement_unit`</dt>
   *       <dd>Field measurement unit ID. One of the {@link MeasurementSid} constants.</dd>
   * 
   *       <dt>int `id_type`</dt>
   *       <dd>Field type ID. One of the {@link TypeSid} constants.</dd>
   * 
   *       <dt>string `k_field`</dt>
   *       <dd>Field key. </dd>
   * 
   *       <dt>mixed `x_value`</dt>
   *       <dd>Progress field log value.</dd>
   * 
   *       <dt>string `text_name`</dt>
   *       <dd>Translated field name.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_quiz`</dt>
   *   <dd>
   *     Quiz information that concerns current visit.
   *   
   *     <dl>
   *       <dt>int `id_status`</dt>
   *       <dd>Response status ID. One of {@link ResponseStatusSid} constants.</dd>
   * 
   *       <dt>bool `is_hide`</dt>
   *       <dd>Whether it's hidden. `true` quiz is hidden, `false` otherwise.</dd>
   * 
   *       <dt>bool `is_require`</dt>
   *       <dd>Whether it's required. `true` quiz is required, `false` otherwise.</dd>
   * 
   *       <dt>string `k_quiz`</dt>
   *       <dd>Quiz key. </dd>
   * 
   *       <dt>string `k_quiz_login`</dt>
   *       <dd>Quiz login key. </dd>
   * 
   *       <dt>string `k_quiz_response`</dt>
   *       <dd>Quiz response key. </dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Quiz title.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_resource`</dt>
   *   <dd>
   *     A list of information for any associated resources for this visit. Each element:
   *     <dl>
   *       <dt>int `i_index`</dt>
   *       <dd>Index of the resource among multiple assets. `0` if the resource was booked from the wait list.</dd>
   * 
   *       <dt>string `k_resource`</dt>
   *       <dd>Resource key. </dd>
   * 
   *       <dt>string `text_alias`</dt>
   *       <dd>Resource layout alias.</dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Resource title.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_wait_confirm`</dt>
   *   <dd>
   *     The date and time when the client transitioned from the wait list to the active list, in human-readable
   * format. Empty array if the visit is not awaiting confirmation. Each element:
   *     <dl>
   *       <dt>string `s_day`</dt>
   *       <dd>The formatted date string (for example, "Monday, Nov 08, 2021").</dd>
   * 
   *       <dt>string `s_time`</dt>
   *       <dd>The formatted time string (for example, "10:00 AM").</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_wearable`</dt>
   *   <dd>
   *     A list of information pertaining to the client's wearables.
   *     <dl>
   *       <dt>int `id_type`</dt>
   *       <dd>Device type ID. One of {@link SensorTypesSid} constants.</dd>
   * 
   *       <dt>bool `is_remove`</dt>
   *       <dd>`true` if the device has been removed.</dd>
   * 
   *       <dt>string `s_sensor`</dt>
   *       <dd>Sensor identifier. Also used as the array key.</dd>
   * 
   *       <dt>string `text_name`</dt>
   *       <dd>Device name.</dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>User key. </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `can_profile`</dt>
   *   <dd>If `true`, the current user can access this client profile.</dd>
   * 
   *   <dt>string `dt_book`</dt>
   *   <dd>The date the session was booked, in UTC.</dd>
   * 
   *   <dt>string `dt_date`</dt>
   *   <dd>The date of the session, in UTC.</dd>
   * 
   *   <dt>string `dt_expire`</dt>
   *   <dd>The date the Purchase Option that was used will expire, in UTC.</dd>
   * 
   *   <dt>string `dt_register`</dt>
   *   <dd>The date the client checked in for the visit, in UTC.</dd>
   * 
   *   <dt>string `html_age`</dt>
   *   <dd>The client age.</dd>
   * 
   *   <dt>string `html_book_by`</dt>
   *   <dd>The name of the person who booked this visit.</dd>
   * 
   *   <dt>string `html_gender_class`</dt>
   *   <dd>The name of the icon to show under gender in the class attendance list.</dd>
   * 
   *   <dt>string `html_member`</dt>
   *   <dd>The client's member ID, if set.</dd>
   * 
   *   <dt>string `html_tooltip_book_by`</dt>
   *   <dd>When and where this visit was booked, along with who booked it.</dd>
   * 
   *   <dt>int `i`</dt>
   *   <dd>The default place in the list to show this client. This is a deprecated copy of the `i_order` field.</dd>
   * 
   *   <dt>int `i_left`</dt>
   *   <dd>The number of visits left on this Purchase Option. This will be `NULL` if there's no limit.</dd>
   * 
   *   <dt>int `i_order`</dt>
   *   <dd>The default place in the list to show this client.</dd>
   * 
   *   <dt>int `i_total`</dt>
   *   <dd>The total visits available from this Purchase Option.</dd>
   * 
   *   <dt>int `i_visit_return`</dt>
   *   <dd>Number of purchase option usages that was returned to user.</dd>
   * 
   *   <dt>int `id_gender`</dt>
   *   <dd>The gender ID of the client. One of the {@link AGenderSid} constants.</dd>
   * 
   *   <dt>int `id_pass_prospect`</dt>
   *   <dd>
   *     If this visit was paid for by an external system, this ID will be set. Otherwise, it will be `0`. One of {@link PassProspectSid} constants.
   *   </dd>
   * 
   *   <dt>int `id_program`</dt>
   *   <dd>The program ID of the Purchase Option. One of the {@link WlProgramSid} constants.</dd>
   * 
   *   <dt>int `id_visit`</dt>
   *   <dd>The status of the visit. One of the {@link WlVisitSid} constants.</dd>
   * 
   *   <dt>bool `is_attend`</dt>
   *   <dd>This will be `true` if the client has attended the visit.</dd>
   * 
   *   <dt>bool `is_duration_pass`</dt>
   *   <dd>This will be `true` if the Purchase Option used is a duration pass.</dd>
   * 
   *   <dt>bool `is_deposit`</dt>
   *   <dd>This will be `true` if the client has paid a deposit for the visit.</dd>
   * 
   *   <dt>bool `is_early`</dt>
   *   <dd>
   *     This will be `true` if the client has canceled the visit early, incurring no penalty.
   * This will be `false` if canceled late or if not canceled at all.
   *   </dd>
   * 
   *   <dt>bool `is_free`</dt>
   *   <dd>This will be `true` if the visit is free.</dd>
   * 
   *   <dt>bool `is_hidden`</dt>
   *   <dd>This will be `true` if details on this visit should be hidden from staff members.</dd>
   * 
   *   <dt>bool `is_penalty`</dt>
   *   <dd>This will be `true` if this visit was cancelled late and a penalty is applied.</dd>
   * 
   *   <dt>bool `is_promotion_first`</dt>
   *   <dd>This will be `true` if this was the first visit for the Purchase Option used.</dd>
   * 
   *   <dt>bool `is_promotion_last`</dt>
   *   <dd>This will be `true` if this was the latest visit for the Purchase Option used.</dd>
   * 
   *   <dt>bool `is_unlimited`</dt>
   *   <dd>This will be `true` if the Purchase Option used has no usage limits.</dd>
   * 
   *   <dt>bool `is_visit`</dt>
   *   <dd>
   *     This will be `true` if this visit is still considered valid.
   * If visit was removed by the system or a staff member, this will be `false`.
   *   </dd>
   * 
   *   <dt>bool `is_wait`</dt>
   *   <dd>This will be `true` if the visit is on the waiting list.</dd>
   * 
   *   <dt>bool `is_wait_confirm`</dt>
   *   <dd>This will be `true` if the visit is awaiting confirmation.</dd>
   * 
   *   <dt>bool `is_wait_priority`</dt>
   *   <dd>This will be `true` if the visit has priority on the wait list.</dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>The key of the location.</dd>
   * 
   *   <dt>string `k_login_promotion`</dt>
   *   <dd>The key of the client's Purchase Option.</dd>
   * 
   *   <dt>string `k_visit`</dt>
   *   <dd>The key of the visit.</dd>
   * 
   *   <dt>object|null `o_purchase_item`</dt>
   *   <dd>
   *     The purchase used to pay for the session. Instance of {@link PurchaseListElementModel}.
   * `null` if the visit has no associated purchase or access is denied. Only present when
   * `is_purchase_info_return` is `true`.
   *   </dd>
   * 
   *   <dt>string `s_expire`</dt>
   *   <dd>The expiry information for the Purchase Option. This field is deprecated, use the text_ version instead.</dd>
   * 
   *   <dt>string `s_firstname`</dt>
   *   <dd>The client's first name. This field is deprecated, use the text_ version instead.</dd>
   * 
   *   <dt>string `s_lastname`</dt>
   *   <dd>The client's last name. This field is deprecated, use the text_ version instead.</dd>
   * 
   *   <dt>string `s_note`</dt>
   *   <dd>Any notes tied to the client. This field is deprecated, use the text_ version instead.</dd>
   * 
   *   <dt>string `s_promotion`</dt>
   *   <dd>The description of the type of Purchase Option. This field is deprecated, use the text_ version instead.</dd>
   * 
   *   <dt>string `text_expire`</dt>
   *   <dd>The expiry information for the Purchase Option.</dd>
   * 
   *   <dt>string `text_firstname`</dt>
   *   <dd>The client first name.</dd>
   * 
   *   <dt>string `text_lastname`</dt>
   *   <dd>The client last name.</dd>
   * 
   *   <dt>string `text_note`</dt>
   *   <dd>Any notes tied to the client.</dd>
   * 
   *   <dt>string `text_promotion_return`</dt>
   *   <dd>Title of purchase option usages of that was returned to user.</dd>
   * 
   *   <dt>string `text_promotion`</dt>
   *   <dd>The description of the type of Purchase Option.</dd>
   * 
   *   <dt>string `text_restrict_title`</dt>
   *   <dd>
   *     The Purchase Option restriction description. It can be empty string when the Purchase Option has no restrictions.
   *   </dd>
   * 
   *   <dt>string `text_visit_status_class`</dt>
   *   <dd>The class visit status.</dd>
   * 
   *   <dt>string `text_visit_status_icon`</dt>
   *   <dd>The icon to use for the class visit status.</dd>
   * 
   *   <dt>string `text_wearable`</dt>
   *   <dd>The wearable device ID.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>The client user key.</dd>
   * 
   *   <dt>string `uid_book`</dt>
   *   <dd>
   *     The key of the user who made the booking.
   * If differing from `uid`, the booking could have been made by a staff or family member.
   *   </dd>
   * 
   *   <dt>string `url-cancel`</dt>
   *   <dd>The URL that can be used to cancel the visit.</dd>
   * 
   *   <dt>string `url-cancel-admin`</dt>
   *   <dd>The URL that can be used by an admin to cancel the visit.</dd>
   * 
   *   <dt>string `url-login-view`</dt>
   *   <dd>The URL that for the user's page.</dd>
   * 
   *   <dt>string `url-mail`</dt>
   *   <dd>The URL to a page for sending an email to the client.</dd>
   * 
   *   <dt>string `url-profile`</dt>
   *   <dd>The URL that for the client's profile.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_list_confirm = [];

  /**
   * The list of clients who are on the wait list.
   *
   * <dl>
   *   <dt>array `a_info`</dt>
   *   <dd>
   *     Information about member.
   * 
   *     <dl>
   *       <dt>array[] `a_icon`</dt>
   *       <dd>
   *         List of icons with additional information about business member.
   *    
   *         <dl>
   *           <dt>string `s_color_background`</dt>
   *           <dd>Color of background.</dd>
   * 
   *           <dt>string `s_color_foreground`</dt>
   *           <dd>Color of letter.</dd>
   * 
   *           <dt>string `s_letter`</dt>
   *           <dd>Icon letter.</dd>
   * 
   *           <dt>string `s_shape`</dt>
   *           <dd>Symbol from font of shapes.</dd>
   * 
   *           <dt>string `s_title`</dt>
   *           <dd>Title.</dd>
   * 
   *           <dt>string `sid_shape`</dt>
   *           <dd>SID of the icon type shape. Constant from {@link ShapeSid}.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array[] `a_vaccination_status`</dt>
   *       <dd>
   *         Information about users vaccination status.
   *         <dl>
   *           <dt>string `sid_vaccination_status`</dt>
   *           <dd>
   *             Vaccination status sid.
   *           </dd>
   * 
   *           <dt>string `text_vaccination_status`</dt>
   *           <dd>Vaccination status.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array[] `a_note`</dt>
   *       <dd>
   *         List of client's notes. Every element has keys:
   *         <dl>
   *           <dt>string `html_note`</dt>
   *           <dd>HTML text ready to be pasted in browser.</dd>
   * 
   *           <dt>bool `is_flag`</dt>
   *           <dd><tt>true</tt> if this note has a flag; <tt>false</tt> otherwise.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `html_credit`</dt>
   *       <dd>Amount the client owns to the business.</dd>
   * 
   *       <dt>string `html_note`</dt>
   *       <dd>User`s login notes.</dd>
   * 
   *       <dt>int `i_visit_credit`</dt>
   *       <dd>Count of unpaid visits if client has at least one.</dd>
   * 
   *       <dt>bool `is_account_positive`</dt>
   *       <dd>If the user has a positive balance on his account.</dd>
   * 
   *       <dt>bool `is_birthday`</dt>
   *       <dd>If a user has a birthday today.</dd>
   * 
   *       <dt>bool `is_contract`</dt>
   *       <dd><tt>true</tt> if client has some contracts that he should agree.</dd>
   * 
   *       <dt>bool `is_family_payer`</dt>
   *       <dd>`true` if the user makes payments for a family member, `false` otherwise.</dd>
   * 
   *       <dt>bool `is_first`</dt>
   *       <dd><tt>true</tt> if this is a first visit of the client.</dd>
   * 
   *       <dt>bool `is_form`</dt>
   *       <dd>`true` if the client has uncompleted one or more forms.</dd>
   * 
   *       <dt>bool `is_task_active`</dt>
   *       <dd><tt>true</tt> if for user exists not completed tasks.</dd>
   * 
   *       <dt>bool `is_task_urgent`</dt>
   *       <dd><tt>true</tt> if for user exists urgent tasks.</dd>
   * 
   *       <dt>bool `is_waiver`</dt>
   *       <dd><tt>true</tt> if client has not agreed with online waiver.</dd>
   * 
   *       <dt>string `k_currency`</dt>
   *       <dd>
   *         Currency of business <var>$k_business</var>.
   *    
   *    It is currency of amount <var>m_credit</var>.
   *       </dd>
   * 
   *       <dt>string `m_credit`</dt>
   *       <dd>User's account balance.</dd>
   * 
   *       <dt>bool `show_amount`</dt>
   *       <dd>Display user balance or not.</dd>
   * 
   *       <dt>string `text_address`</dt>
   *       <dd>User's address.</dd>
   * 
   *       <dt>string `text_age`</dt>
   *       <dd>Users age. Appears only on the day of birth.</dd>
   * 
   *       <dt>string `text_mail`</dt>
   *       <dd>User's email.</dd>
   * 
   *       <dt>string `text_phone`</dt>
   *       <dd>User's cell phone.</dd>
   * 
   *       <dt>string `text_firstname`</dt>
   *       <dd>Users first name.</dd>
   * 
   *       <dt>string `text_visit_credit`</dt>
   *       <dd>Link to the page with client's attendance.</dd>
   * 
   *       <dt>string `url_attendance`</dt>
   *       <dd>Link to the page with information about client's account balance.</dd>
   * 
   *       <dt>string `url_billing`</dt>
   *       <dd>Link to user's billing page.</dd>
   * 
   *       <dt>string `url_contract`</dt>
   *       <dd>Link to user's contract page</dd>
   * 
   *       <dt>string `url_form`</dt>
   *       <dd>Link to user's forms page.</dd>
   * 
   *       <dt>string `url_overview`</dt>
   *       <dd>Link to the client's overview page. Empty if for user not existing active or urgent tasks.</dd>
   * 
   *       <dt>string `url_profile`</dt>
   *       <dd>Link to user's profile.</dd>
   * 
   *       <dt>string `url_waiver`</dt>
   *       <dd>Link to user's waiver page.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_photo`</dt>
   *   <dd>
   *     Information about the user's photo. The information returned has the following structure:
   *     <dl>
   *       <dt>int `i_height`</dt>
   *       <dd>The height of the photo.</dd>
   * 
   *       <dt>int `i_width`</dt>
   *       <dd>The width of the photo.</dd>
   * 
   *       <dt>bool `is_empty`</dt>
   *       <dd>This will be `true` if a photo hasn't been set yet.</dd>
   * 
   *       <dt>string `s_url`</dt>
   *       <dd>The URL of the photo.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_progress`</dt>
   *   <dd>
   *     Information about a user's current progress. By default, this information isn't sent.
   *     <dl>
   *       <dt>int `id_field`</dt>
   *       <dd>Field ID. One of the {@link ProgressFieldSid}.</dd>
   * 
   *       <dt>int `id_measurement_unit`</dt>
   *       <dd>Field measurement unit ID. One of the {@link MeasurementSid} constants.</dd>
   * 
   *       <dt>int `id_type`</dt>
   *       <dd>Field type ID. One of the {@link TypeSid} constants.</dd>
   * 
   *       <dt>string `k_field`</dt>
   *       <dd>Field key. </dd>
   * 
   *       <dt>mixed `x_value`</dt>
   *       <dd>Progress field log value.</dd>
   * 
   *       <dt>string `text_name`</dt>
   *       <dd>Translated field name.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_quiz`</dt>
   *   <dd>
   *     Quiz information that concerns current visit.
   *   
   *     <dl>
   *       <dt>int `id_status`</dt>
   *       <dd>Response status ID. One of {@link ResponseStatusSid} constants.</dd>
   * 
   *       <dt>bool `is_hide`</dt>
   *       <dd>Whether it's hidden. `true` quiz is hidden, `false` otherwise.</dd>
   * 
   *       <dt>bool `is_require`</dt>
   *       <dd>Whether it's required. `true` quiz is required, `false` otherwise.</dd>
   * 
   *       <dt>string `k_quiz`</dt>
   *       <dd>Quiz key. </dd>
   * 
   *       <dt>string `k_quiz_login`</dt>
   *       <dd>Quiz login key. </dd>
   * 
   *       <dt>string `k_quiz_response`</dt>
   *       <dd>Quiz response key. </dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Quiz title.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_resource`</dt>
   *   <dd>
   *     A list of information for any associated resources for this visit. Each element:
   *     <dl>
   *       <dt>int `i_index`</dt>
   *       <dd>Index of the resource among multiple assets. `0` if the resource was booked from the wait list.</dd>
   * 
   *       <dt>string `k_resource`</dt>
   *       <dd>Resource key. </dd>
   * 
   *       <dt>string `text_alias`</dt>
   *       <dd>Resource layout alias.</dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Resource title.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_wait_confirm`</dt>
   *   <dd>
   *     The date and time when the client transitioned from the wait list to the active list, in human-readable
   * format. Empty array if the visit is not awaiting confirmation. Each element:
   *     <dl>
   *       <dt>string `s_day`</dt>
   *       <dd>The formatted date string (for example, "Monday, Nov 08, 2021").</dd>
   * 
   *       <dt>string `s_time`</dt>
   *       <dd>The formatted time string (for example, "10:00 AM").</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_wearable`</dt>
   *   <dd>
   *     A list of information pertaining to the client's wearables.
   *     <dl>
   *       <dt>int `id_type`</dt>
   *       <dd>Device type ID. One of {@link SensorTypesSid} constants.</dd>
   * 
   *       <dt>bool `is_remove`</dt>
   *       <dd>`true` if the device has been removed.</dd>
   * 
   *       <dt>string `s_sensor`</dt>
   *       <dd>Sensor identifier. Also used as the array key.</dd>
   * 
   *       <dt>string `text_name`</dt>
   *       <dd>Device name.</dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>User key. </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `can_profile`</dt>
   *   <dd>If `true`, the current user can access this client profile.</dd>
   * 
   *   <dt>string `dt_book`</dt>
   *   <dd>The date the session was booked, in UTC.</dd>
   * 
   *   <dt>string `dt_date`</dt>
   *   <dd>The date of the session, in UTC.</dd>
   * 
   *   <dt>string `dt_expire`</dt>
   *   <dd>The date the Purchase Option that was used will expire, in UTC.</dd>
   * 
   *   <dt>string `dt_register`</dt>
   *   <dd>The date the client checked in for the visit, in UTC.</dd>
   * 
   *   <dt>string `html_age`</dt>
   *   <dd>The client age.</dd>
   * 
   *   <dt>string `html_book_by`</dt>
   *   <dd>The name of the person who booked this visit.</dd>
   * 
   *   <dt>string `html_gender_class`</dt>
   *   <dd>The name of the icon to show under gender in the class attendance list.</dd>
   * 
   *   <dt>string `html_member`</dt>
   *   <dd>The client's member ID, if set.</dd>
   * 
   *   <dt>string `html_tooltip_book_by`</dt>
   *   <dd>When and where this visit was booked, along with who booked it.</dd>
   * 
   *   <dt>int `i`</dt>
   *   <dd>The default place in the list to show this client. This is a deprecated copy of the `i_order` field.</dd>
   * 
   *   <dt>int `i_left`</dt>
   *   <dd>The number of visits left on this Purchase Option. This will be `NULL` if there's no limit.</dd>
   * 
   *   <dt>int `i_order`</dt>
   *   <dd>The default place in the list to show this client.</dd>
   * 
   *   <dt>int `i_total`</dt>
   *   <dd>The total visits available from this Purchase Option.</dd>
   * 
   *   <dt>int `i_visit_return`</dt>
   *   <dd>Number of purchase option usages that was returned to user.</dd>
   * 
   *   <dt>int `id_gender`</dt>
   *   <dd>The gender ID of the client. One of the {@link AGenderSid} constants.</dd>
   * 
   *   <dt>int `id_pass_prospect`</dt>
   *   <dd>
   *     If this visit was paid for by an external system, this ID will be set. Otherwise, it will be `0`. One of {@link PassProspectSid} constants.
   *   </dd>
   * 
   *   <dt>int `id_program`</dt>
   *   <dd>The program ID of the Purchase Option. One of the {@link WlProgramSid} constants.</dd>
   * 
   *   <dt>int `id_visit`</dt>
   *   <dd>The status of the visit. One of the {@link WlVisitSid} constants.</dd>
   * 
   *   <dt>bool `is_attend`</dt>
   *   <dd>This will be `true` if the client has attended the visit.</dd>
   * 
   *   <dt>bool `is_duration_pass`</dt>
   *   <dd>This will be `true` if the Purchase Option used is a duration pass.</dd>
   * 
   *   <dt>bool `is_deposit`</dt>
   *   <dd>This will be `true` if the client has paid a deposit for the visit.</dd>
   * 
   *   <dt>bool `is_early`</dt>
   *   <dd>
   *     This will be `true` if the client has canceled the visit early, incurring no penalty.
   * This will be `false` if canceled late or if not canceled at all.
   *   </dd>
   * 
   *   <dt>bool `is_free`</dt>
   *   <dd>This will be `true` if the visit is free.</dd>
   * 
   *   <dt>bool `is_hidden`</dt>
   *   <dd>This will be `true` if details on this visit should be hidden from staff members.</dd>
   * 
   *   <dt>bool `is_penalty`</dt>
   *   <dd>This will be `true` if this visit was cancelled late and a penalty is applied.</dd>
   * 
   *   <dt>bool `is_promotion_first`</dt>
   *   <dd>This will be `true` if this was the first visit for the Purchase Option used.</dd>
   * 
   *   <dt>bool `is_promotion_last`</dt>
   *   <dd>This will be `true` if this was the latest visit for the Purchase Option used.</dd>
   * 
   *   <dt>bool `is_unlimited`</dt>
   *   <dd>This will be `true` if the Purchase Option used has no usage limits.</dd>
   * 
   *   <dt>bool `is_visit`</dt>
   *   <dd>
   *     This will be `true` if this visit is still considered valid.
   * If visit was removed by the system or a staff member, this will be `false`.
   *   </dd>
   * 
   *   <dt>bool `is_wait`</dt>
   *   <dd>This will be `true` if the visit is on the waiting list.</dd>
   * 
   *   <dt>bool `is_wait_confirm`</dt>
   *   <dd>This will be `true` if the visit is awaiting confirmation.</dd>
   * 
   *   <dt>bool `is_wait_priority`</dt>
   *   <dd>This will be `true` if the visit has priority on the wait list.</dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>The key of the location.</dd>
   * 
   *   <dt>string `k_login_promotion`</dt>
   *   <dd>The key of the client's Purchase Option.</dd>
   * 
   *   <dt>string `k_visit`</dt>
   *   <dd>The key of the visit.</dd>
   * 
   *   <dt>object|null `o_purchase_item`</dt>
   *   <dd>
   *     The purchase used to pay for the session. Instance of {@link PurchaseListElementModel}.
   * `null` if the visit has no associated purchase or access is denied. Only present when
   * `is_purchase_info_return` is `true`.
   *   </dd>
   * 
   *   <dt>string `s_expire`</dt>
   *   <dd>The expiry information for the Purchase Option. This field is deprecated, use the text_ version instead.</dd>
   * 
   *   <dt>string `s_firstname`</dt>
   *   <dd>The client's first name. This field is deprecated, use the text_ version instead.</dd>
   * 
   *   <dt>string `s_lastname`</dt>
   *   <dd>The client's last name. This field is deprecated, use the text_ version instead.</dd>
   * 
   *   <dt>string `s_note`</dt>
   *   <dd>Any notes tied to the client. This field is deprecated, use the text_ version instead.</dd>
   * 
   *   <dt>string `s_promotion`</dt>
   *   <dd>The description of the type of Purchase Option. This field is deprecated, use the text_ version instead.</dd>
   * 
   *   <dt>string `text_expire`</dt>
   *   <dd>The expiry information for the Purchase Option.</dd>
   * 
   *   <dt>string `text_firstname`</dt>
   *   <dd>The client first name.</dd>
   * 
   *   <dt>string `text_lastname`</dt>
   *   <dd>The client last name.</dd>
   * 
   *   <dt>string `text_note`</dt>
   *   <dd>Any notes tied to the client.</dd>
   * 
   *   <dt>string `text_promotion_return`</dt>
   *   <dd>Title of purchase option usages of that was returned to user.</dd>
   * 
   *   <dt>string `text_promotion`</dt>
   *   <dd>The description of the type of Purchase Option.</dd>
   * 
   *   <dt>string `text_restrict_title`</dt>
   *   <dd>
   *     The Purchase Option restriction description. It can be empty string when the Purchase Option has no restrictions.
   *   </dd>
   * 
   *   <dt>string `text_visit_status_class`</dt>
   *   <dd>The class visit status.</dd>
   * 
   *   <dt>string `text_visit_status_icon`</dt>
   *   <dd>The icon to use for the class visit status.</dd>
   * 
   *   <dt>string `text_wearable`</dt>
   *   <dd>The wearable device ID.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>The client user key.</dd>
   * 
   *   <dt>string `uid_book`</dt>
   *   <dd>
   *     The key of the user who made the booking.
   * If differing from `uid`, the booking could have been made by a staff or family member.
   *   </dd>
   * 
   *   <dt>string `url-cancel`</dt>
   *   <dd>The URL that can be used to cancel the visit.</dd>
   * 
   *   <dt>string `url-cancel-admin`</dt>
   *   <dd>The URL that can be used by an admin to cancel the visit.</dd>
   * 
   *   <dt>string `url-login-view`</dt>
   *   <dd>The URL that for the user's page.</dd>
   * 
   *   <dt>string `url-mail`</dt>
   *   <dd>The URL to a page for sending an email to the client.</dd>
   * 
   *   <dt>string `url-profile`</dt>
   *   <dd>The URL that for the client's profile.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_list_wait = [];

  /**
   * The local date of the class or event session.
   *
   * @get get
   * @var string
   */
  public $dt_date_local = '';

  /**
   * The maximum capacity of the class or event session.
   *
   * @get result
   * @var int
   */
  public $i_capacity;

  /**
   * Count client on the attendance.
   *
   * @get result
   * @var int
   */
  public $i_client;

  /**
   * The maximum number of clients on wait list of the class or event session.
   *
   * @get result
   * @var int
   */
  public $i_wait_list_limit;

  /**
   * If `true`, then return the purchase used to pay for session.
   * Otherwise, do not return any purchase information.
   *
   * @get get
   * @var bool
   */
  public $is_purchase_info_return = false;

  /**
   * `true` to use class/event specific wait list limit, `false` to use the limit from default policies.
   * `false` for appointments.
   *
   * @get result
   * @var bool
   */
  public $is_wait_list_limit;

  /**
   * The appointment key. Not used if requesting information for a class or event session.
   *
   * @get get
   * @var string
   */
  public $k_appointment = '0';

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The class period key. Not used if requesting information for an appointment.
   *
   * @get get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * The Location key.
   *
   * @get result
   * @var string
   */
  public $k_location;
}

?>