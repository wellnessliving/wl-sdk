<?php

namespace WellnessLiving\Wl\Member\Info;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about a member.
 *
 * @method WlModelRequest get() Returns information about specified member.  Supports both single-user and batch modes: when `$a_uid` is provided, returns a keyed list of user data in `$a_result_list`; otherwise returns data for the single user identified by `$uid`. When `$is_full` is `true`, additional profile details, group membership, visit history, and lifetime value are included.
 */
class InfoModel extends WlModelAbstract
{
  /**
   * Additional member data or `null` if any data can be shown.
   * Will be filled if {@link InfoModel::$is_full} flag is set.
   *
   * <dl>
   *   <dt>array[] `a_icon`</dt>
   *   <dd>
   *     List of icons with additional information about business member.
   *    
   *     <dl>
   *       <dt>string `s_color_background`</dt>
   *       <dd>Color of background.</dd>
   * 
   *       <dt>string `s_color_foreground`</dt>
   *       <dd>Color of letter.</dd>
   * 
   *       <dt>string `s_letter`</dt>
   *       <dd>Icon letter.</dd>
   * 
   *       <dt>string `s_shape`</dt>
   *       <dd>Symbol from font of shapes.</dd>
   * 
   *       <dt>string `s_title`</dt>
   *       <dd>Title.</dd>
   * 
   *       <dt>string `sid_shape`</dt>
   *       <dd>SID of the icon type shape.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_vaccination_status`</dt>
   *   <dd>
   *     Information about users vaccination status.
   *     <dl>
   *       <dt>string `sid_vaccination_status`</dt>
   *       <dd>
   *         Vaccination status sid.
   *       </dd>
   * 
   *       <dt>string `text_vaccination_status`</dt>
   *       <dd>Vaccination status.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_note`</dt>
   *   <dd>
   *     List of client's notes. Every element has keys:
   *     <dl>
   *       <dt>string `html_note`</dt>
   *       <dd>HTML text ready to be pasted in browser.</dd>
   * 
   *       <dt>bool `is_flag`</dt>
   *       <dd><tt>true</tt> if this note has a flag; <tt>false</tt> otherwise.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `html_credit`</dt>
   *   <dd>Amount the client owns to the business.</dd>
   * 
   *   <dt>string `html_note`</dt>
   *   <dd>
   *     User`s login notes.&lt;/dd&gt;
   * 
   *  &lt;dt&gt;int &lt;var&gt;i_visit_credit&lt;/var&gt;&lt;/dt&gt;
   *  &lt;dd&gt;Count of unpaid visits if client has at least one.&lt;/dd&gt;
   * 
   *  &lt;dt&gt;bool &lt;var&gt;is_account_positive&lt;/var&gt;&lt;/dt&gt;
   *  &lt;dd&gt;If the user has a positive balance on his account.&lt;/dd&gt;
   * 
   *  &lt;dt&gt;bool &lt;var&gt;is_birthday&lt;/var&gt;&lt;/dt&gt;
   *  &lt;dd&gt;If a user has a birthday today.&lt;/dd&gt;
   * 
   *  &lt;dt&gt;bool &lt;var&gt;is_contract&lt;/var&gt;&lt;/dt&gt;
   *  &lt;dd&gt;&lt;tt&gt;true&lt;/tt&gt; if client has some contracts that he should agree.&lt;/dd&gt;
   * 
   *  &lt;dt&gt;bool &lt;var&gt;is_family_payer&lt;/var&gt;&lt;/dt&gt;
   *  &lt;dd&gt;`true` if the user makes payments for a family member, `false` otherwise.&lt;/dd&gt;
   * 
   *  &lt;dt&gt;bool &lt;var&gt;is_first&lt;/var&gt;&lt;/dt&gt;
   *  &lt;dd&gt;&lt;tt&gt;true&lt;/tt&gt; if this is a first visit of the client.&lt;/dd&gt;
   * 
   *  &lt;dt&gt;bool &lt;var&gt;is_form&lt;/var&gt;&lt;/dt&gt;
   *  &lt;dd&gt;`true` if the client has uncompleted one or more forms.
   *   </dd>
   * 
   *   <dt>bool `is_task_active`</dt>
   *   <dd><tt>true</tt> if for user exists not completed tasks.</dd>
   * 
   *   <dt>bool `is_task_urgent`</dt>
   *   <dd><tt>true</tt> if for user exists urgent tasks.</dd>
   * 
   *   <dt>bool `is_waiver`</dt>
   *   <dd><tt>true</tt> if client has not agreed with online waiver.</dd>
   * 
   *   <dt>string `k_currency`</dt>
   *   <dd>
   *     Currency of business <var>$k_business</var>.
   *    
   *    It is currency of amount <var>m_credit</var>.
   *   </dd>
   * 
   *   <dt>string `m_credit`</dt>
   *   <dd>User's account balance.</dd>
   * 
   *   <dt>bool `show_amount`</dt>
   *   <dd>Display user balance or not.</dd>
   * 
   *   <dt>string `text_address`</dt>
   *   <dd>User's address.</dd>
   * 
   *   <dt>string `text_age`</dt>
   *   <dd>Users age. Appears only on the day of birth.</dd>
   * 
   *   <dt>string `text_mail`</dt>
   *   <dd>User's email.</dd>
   * 
   *   <dt>string `text_phone`</dt>
   *   <dd>User's cell phone.</dd>
   * 
   *   <dt>string `text_firstname`</dt>
   *   <dd>Users first name.</dd>
   * 
   *   <dt>string `text_visit_credit`</dt>
   *   <dd>Link to the page with client's attendance.</dd>
   * 
   *   <dt>string `url_attendance`</dt>
   *   <dd>Link to the page with information about client's account balance.</dd>
   * 
   *   <dt>string `url_billing`</dt>
   *   <dd>Link to user's billing page.</dd>
   * 
   *   <dt>string `url_contract`</dt>
   *   <dd>Link to user's contract page</dd>
   * 
   *   <dt>string `url_form`</dt>
   *   <dd>Link to user's forms page.</dd>
   * 
   *   <dt>string `url_overview`</dt>
   *   <dd>Link to the client's overview page. Empty if for user not existing active or urgent tasks.</dd>
   * 
   *   <dt>string `url_profile`</dt>
   *   <dd>Link to user's profile.</dd>
   * 
   *   <dt>string `url_waiver`</dt>
   *   <dd>Link to user's waiver page.</dd>
   * </dl>
   * @get result
   * @var array|null
   */
  public $a_info = null;

  /**
   * List of users data.
   * Keys - users primary keys. Values - users data. 
   * Keys refer to clients' primary keys, and values refer to clients' data.
   * If `null`, data for a single client is being requested.
   *
   * <dl>
   *   <dt>array `a_info`</dt>
   *   <dd>
   *     Additional user's information.
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
   *           <dd>SID of the icon type shape.</dd>
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
   *       <dd>
   *         User`s login notes.&lt;/dd&gt;
   * 
   *  &lt;dt&gt;int &lt;var&gt;i_visit_credit&lt;/var&gt;&lt;/dt&gt;
   *  &lt;dd&gt;Count of unpaid visits if client has at least one.&lt;/dd&gt;
   * 
   *  &lt;dt&gt;bool &lt;var&gt;is_account_positive&lt;/var&gt;&lt;/dt&gt;
   *  &lt;dd&gt;If the user has a positive balance on his account.&lt;/dd&gt;
   * 
   *  &lt;dt&gt;bool &lt;var&gt;is_birthday&lt;/var&gt;&lt;/dt&gt;
   *  &lt;dd&gt;If a user has a birthday today.&lt;/dd&gt;
   * 
   *  &lt;dt&gt;bool &lt;var&gt;is_contract&lt;/var&gt;&lt;/dt&gt;
   *  &lt;dd&gt;&lt;tt&gt;true&lt;/tt&gt; if client has some contracts that he should agree.&lt;/dd&gt;
   * 
   *  &lt;dt&gt;bool &lt;var&gt;is_family_payer&lt;/var&gt;&lt;/dt&gt;
   *  &lt;dd&gt;`true` if the user makes payments for a family member, `false` otherwise.&lt;/dd&gt;
   * 
   *  &lt;dt&gt;bool &lt;var&gt;is_first&lt;/var&gt;&lt;/dt&gt;
   *  &lt;dd&gt;&lt;tt&gt;true&lt;/tt&gt; if this is a first visit of the client.&lt;/dd&gt;
   * 
   *  &lt;dt&gt;bool &lt;var&gt;is_form&lt;/var&gt;&lt;/dt&gt;
   *  &lt;dd&gt;`true` if the client has uncompleted one or more forms.
   *       </dd>
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
   *   <dt>bool `is_traveller`</dt>
   *   <dd>`true` - user is traveller; `false` - not traveller.</dd>
   * 
   *   <dt>string `s_member`</dt>
   *   <dd>User's member number.</dd>
   * 
   *   <dt>string `text_first_name`</dt>
   *   <dd>User's first name.</dd>
   * 
   *   <dt>string `text_fullname`</dt>
   *   <dd>User's name.</dd>
   * 
   *   <dt>string `url_barcode`</dt>
   *   <dd>Link to barcode image to scan member number.</dd>
   * </dl>
   * @get result
   * @var array|null
   */
  public $a_result_list = null;

  /**
   * Primary keys of users whose information must be returned.
   *
   * `null` if data of a single user is requested.
   *
   * @get get
   * @var string[]|null
   */
  public $a_uid = null;

  /**
   * List of dates for load additional information about users.
   *
   * Key is UID of user. Value is date.
   *
   * `null` if data of a single user is requested.
   *
   * @get get
   * @var string[]|null
   */
  public $a_uid_date = null;

  /**
   * Information about last visit of the user.
   *
   * <dl>
   *   <dt>string `dtu_visit`</dt>
   *   <dd>Datetime visit in UTC.</dd>
   * 
   *   <dt>string|null `k_appointment`</dt>
   *   <dd>
   *     Appointment key. 
   * `null` if it is not service or asset session.
   *   </dd>
   * 
   *   <dt>string|null `k_class_period`</dt>
   *   <dd>
   *     Class period key. 
   * `null` if it is not class or event session.
   *   </dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>Location key. </dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_visit_last = [];

  /**
   * Information about next visit of the user.
   *
   * <dl>
   *   <dt>string `dtu_visit`</dt>
   *   <dd>Datetime visit in UTC.</dd>
   * 
   *   <dt>string|null `k_appointment`</dt>
   *   <dd>
   *     Appointment key. 
   * `null` if it is not service or asset session.
   *   </dd>
   * 
   *   <dt>string|null `k_class_period`</dt>
   *   <dd>
   *     Class period key. 
   * `null` if it is not class or event session.
   *   </dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>Location key. </dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_visit_next = [];

  /**
   * Date of the session, if we show it on the appointment info window or on the attendance list.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * Count attend visits for one client.
   *
   * @get result
   * @var int
   */
  public $i_lifetime_visit = 0;

  /**
   * `true` - if API is being used from backend, `false` - otherwise.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * If you need to return additional information set to `true` or `false` if not.
   *
   * @get get
   * @var bool
   */
  public $is_full = false;

  /**
   * If `true`, the client is a traveler. Otherwise, this will be `false`.
   * This will be `null` in cases when the client is a walk-in. Or when {@link InfoModel::$is_full} is `false`.
   *
   * @get result
   * @var bool|null
   */
  public $is_traveller = null;

  /**
   * The business ID required to access client information.
   *
   * Specify this as `0` to retrieve the system-wide version of the information.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * ID of the visit, if we show icons on the attendance list and information that depends on visit is required.
   *
   * @get get
   * @var string
   */
  public $k_visit = '';

  /**
   * The member's lifetime value.
   *
   * @get result
   * @var string
   */
  public $m_lifetime_value = '';

  /**
   * The member ID.
   *
   * If `null`, the specified client isn't a member of the specified business.
   *
   * @get result
   * @var string|null
   */
  public $s_member = null;

  /**
   * A list of icons with additional information about the business member.
   * If empty, all available icons will be displayed.
   *
   * @get get
   * @var string
   */
  public $s_show = '';

  /**
   * First user's name.
   *
   * @get result
   * @var string
   */
  public $text_first_name = '';

  /**
   * Full user's name.
   *
   * @get result
   * @var string
   */
  public $text_fullname = '';

  /**
   * ID of a user to retrieve member information for.
   *
   * @get get
   * @var string
   */
  public $uid = '';

  /**
   * URL to barcode image.
   *
   * @get result
   * @var string
   */
  public $url_barcode;

  /**
   * URL to email.
   *
   * @get result
   * @var string
   */
  public $url_email = '';
}

?>