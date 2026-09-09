<?php

namespace WellnessLiving\Wl\Schedule\ClassView;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Resource\ResourceCategoryEnum;
use WellnessLiving\Wl\Schedule\ClassList\ClassListModel;

/**
 * Gets information about a specified class session.
 *
 * A class listing can be retrieved from the {@link ClassListModel} endpoint.
 *
 * @method WlModelRequest get() Retrieves information about class.  Returns detailed information about one or more class sessions, including staff, location, assigned assets, virtual location links, visit counts, and booking availability. Supports single-session mode for one class period or multi-session mode for batch lookups.
 * @method WlModelRequest post() Retrieves information about classes.  A POST-method alternative to {@link \Wl\Schedule\ClassView\ClassViewApi::get()} for multi-session batch lookups where the session list is too long to encode in a GET query string. The session list is provided as a JSON-encoded string in the request body.
 */
class ClassViewModel extends WlModelAbstract
{
  /**
   * Asset list data.
   *
   * <dl>
   *   <dt>int `i_count`</dt>
   *   <dd>Number of sessions.</dd>
   * 
   *   <dt>int `i_index`</dt>
   *   <dd>Asset index.</dd>
   * 
   *   <dt>int `id_category`</dt>
   *   <dd>Type of the asset: Asset or Off-Site Location. One of {@link ResourceCategoryEnum} constant.</dd>
   * 
   *   <dt>string `k_city`</dt>
   *   <dd>City of the asset, if this is Off-Site Location.</dd>
   * 
   *   <dt>string `k_resource`</dt>
   *   <dd>Resource key. </dd>
   * 
   *   <dt>string `text_address`</dt>
   *   <dd>Address of the asset, if this is Off-Site Location.</dd>
   * 
   *   <dt>string `text_guide`</dt>
   *   <dd>Additional address guidance, if this is Off-Site Location.</dd>
   * 
   *   <dt>string `text_index`</dt>
   *   <dd>Asset index with '#' prefix.</dd>
   * 
   *   <dt>string `text_postal`</dt>
   *   <dd>Postal code of the asset, if this is Off-Site Location.</dd>
   * 
   *   <dt>string `text_name`</dt>
   *   <dd>
   *     Asset title that consists of the asset title itself concatenated with its index (in case of multiple assets) by '#'.
   *   </dd>
   * </dl>
   * @get result
   * @post result
   * @var array[]|null
   */
  public $a_asset;

  /**
   * Detailed information about the class.
   *
   * This will be `null` if data isn't loaded yet.
   *
   * <dl>
   *   <dt>string[] `a_class_tab`</dt>
   *   <dd>
   *     Keys are class key. 
   *   Values are class tab key. 
   *   </dd>
   * 
   *   <dt>array `a_image`</dt>
   *   <dd>
   *     Class image data:
   *     <dl>
   *       <dt>int `i_height`</dt>
   *       <dd>Image height.</dd>
   * 
   *       <dt>int `i_width`</dt>
   *       <dd>Image width.</dd>
   * 
   *       <dt>bool `is_empty`</dt>
   *       <dd>Whether current image is empty.</dd>
   * 
   *       <dt>string `s_url`</dt>
   *       <dd>Url link to image.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_search_tag`</dt>
   *   <dd>
   *     List of search tags.
   *     <dl>
   *       <dt>string `k_search_tag`</dt>
   *       <dd>Search tag key. </dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Search tag name.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int[] `a_tag`</dt>
   *   <dd>List of tags.</dd>
   * 
   *   <dt>bool `can_book`</dt>
   *   <dd>Whether current client can book class.</dd>
   * 
   *   <dt>string `dt_date_global`</dt>
   *   <dd>Session date/time in UTC.</dd>
   * 
   *   <dt>string `dt_date_local`</dt>
   *   <dd>Start date in local time.</dd>
   * 
   *   <dt>string `html_deny_reason`</dt>
   *   <dd>Reason why client can not book class. Not empty only if <var>can_book</var> is `false`.</dd>
   * 
   *   <dt>string `html_description`</dt>
   *   <dd>Class description.</dd>
   * 
   *   <dt>string `html_special`</dt>
   *   <dd>Special instructions.</dd>
   * 
   *   <dt>string `text_timezone`</dt>
   *   <dd>Timezone title.</dd>
   * 
   *   <dt>int `i_age_from`</dt>
   *   <dd>The minimum age restriction. Deprecated and is left only for back compatibility.</dd>
   * 
   *   <dt>int `i_age_from_month`</dt>
   *   <dd>The minimum age restriction (months).</dd>
   * 
   *   <dt>int `i_age_from_year`</dt>
   *   <dd>The minimum age restriction (years).</dd>
   * 
   *   <dt>int `i_age_to`</dt>
   *   <dd>The maximum age restriction. Deprecated and is left only for back compatibility.</dd>
   * 
   *   <dt>int `i_age_to_month`</dt>
   *   <dd>The maximum age restriction (months).</dd>
   * 
   *   <dt>int `i_age_to_year`</dt>
   *   <dd>The maximum age restriction (years).</dd>
   * 
   *   <dt>int `i_book`</dt>
   *   <dd>A total number of booked visits in the class, including all lists: active and waitlist.</dd>
   * 
   *   <dt>int `i_book_active`</dt>
   *   <dd>A total number of booked active visits in the class.</dd>
   * 
   *   <dt>int `i_capacity`</dt>
   *   <dd>Class capacity.</dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>Class duration. In number of minutes.</dd>
   * 
   *   <dt>int `i_visit`</dt>
   *   <dd>Number of usages of promotion required to pay for a single class session.</dd>
   * 
   *   <dt>int|null `i_wait_limit`</dt>
   *   <dd>Limit of wait list. <tt>null</tt> if limit is not set.</dd>
   * 
   *   <dt>int `id_deny_reason`</dt>
   *   <dd>ID of deny reason. One of {@link DenyReasonSid} constants.</dd>
   * 
   *   <dt>bool `is_book`</dt>
   *   <dd>Whether current class was booked by current client.</dd>
   * 
   *   <dt>bool `is_book_for_guest`</dt>
   *   <dd>
   *     Allow clients to book on behalf of a guest.
   * `true` if clients can book on behalf of a guest.
   * `false` otherwise.
   *   </dd>
   * 
   *   <dt>bool `is_cancel`</dt>
   *   <dd>`true` if class period was cancelled; `false` otherwise.</dd>
   * 
   *   <dt>bool `is_cancellation_enabled`</dt>
   *   <dd>`true` if clients can cancel this session. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_event`</dt>
   *   <dd>`true` if it is event; `false` if it is class.</dd>
   * 
   *   <dt>bool `is_promotion_only`</dt>
   *   <dd>`true` if this class can be paid with promotion only; `false` otherwise.</dd>
   * 
   *   <dt>bool `is_virtual`</dt>
   *   <dd>`true` if class is virtual, `false` otherwise.</dd>
   * 
   *   <dt>bool `is_wait_list`</dt>
   *   <dd>`true` if user can take place in wait list only; `false` otherwise.</dd>
   * 
   *   <dt>bool `is_wait_list_enabled`</dt>
   *   <dd>`true` if wait list is enabled for class; `false` otherwise.</dd>
   * 
   *   <dt>string `k_resource_location`</dt>
   *   <dd>Off-site location asset key. Empty if off-site location is not assigned to this class.</dd>
   * 
   *   <dt>string `m_price`</dt>
   *   <dd>Session price.</dd>
   * 
   *   <dt>string `s_duration`</dt>
   *   <dd>Class duration. In human readable format.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>Class name.</dd>
   * 
   *   <dt>string `text_room`</dt>
   *   <dd>Class room.</dd>
   * </dl>
   * @get result
   * @post result
   * @var array|null
   */
  public $a_class;

  /**
   * Location data.
   *
   * This will be `null` if data isn't loaded yet.
   *
   * <dl>
   *   <dt>float `f_latitude`</dt>
   *   <dd>Location latitude.</dd>
   * 
   *   <dt>float `f_longitude`</dt>
   *   <dd>Location longitude.</dd>
   * 
   *   <dt>float `f_rate`</dt>
   *   <dd>Location rating. From 1 to 5.</dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>Location key. </dd>
   * 
   *   <dt>string `s_address`</dt>
   *   <dd>Location address.</dd>
   * 
   *   <dt>string `s_map`</dt>
   *   <dd>Query to search location on "Google maps".</dd>
   * 
   *   <dt>string `s_phone`</dt>
   *   <dd>Location phone.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>Location name.</dd>
   * </dl>
   * @get result
   * @post result
   * @var array|null
   */
  public $a_location;

  /**
   * A list of sessions to get information for. Every element has the following keys:
   *
   * `null` if requesting a single session.
   *
   * <dl>
   *   <dt>string `dt_date`</dt>
   *   <dd>The date/time of the session in UTC.</dd>
   * 
   *   <dt>string `k_class_period`</dt>
   *   <dd>The session key. </dd>
   * </dl>
   * @get get
   * @post get
   * @var array[]|null
   */
  public $a_session_request = null;

  /**
   * A list of sessions with information, received in a multiple session mode.
   *
   * <dl>
   *   <dt>array `a_asset`</dt>
   *   <dd>
   *     Array of asset. 
   *     <dl>
   *       <dt>int `i_count`</dt>
   *       <dd>Number of sessions.</dd>
   * 
   *       <dt>int `i_index`</dt>
   *       <dd>Asset index.</dd>
   * 
   *       <dt>int `id_category`</dt>
   *       <dd>Type of the asset: Asset or Off-Site Location. One of {@link ResourceCategoryEnum} constant.</dd>
   * 
   *       <dt>string `k_city`</dt>
   *       <dd>City of the asset, if this is Off-Site Location.</dd>
   * 
   *       <dt>string `k_resource`</dt>
   *       <dd>Resource key. </dd>
   * 
   *       <dt>string `text_address`</dt>
   *       <dd>Address of the asset, if this is Off-Site Location.</dd>
   * 
   *       <dt>string `text_guide`</dt>
   *       <dd>Additional address guidance, if this is Off-Site Location.</dd>
   * 
   *       <dt>string `text_index`</dt>
   *       <dd>Asset index with '#' prefix.</dd>
   * 
   *       <dt>string `text_postal`</dt>
   *       <dd>Postal code of the asset, if this is Off-Site Location.</dd>
   * 
   *       <dt>string `text_name`</dt>
   *       <dd>
   *         Asset title that consists of the asset title itself concatenated with its index (in case of multiple assets) by '#'.
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_class`</dt>
   *   <dd>
   *     Class information. 
   *     <dl>
   *       <dt>string[] `a_class_tab`</dt>
   *       <dd>
   *         Keys are class key. 
   *   Values are class tab key. 
   *       </dd>
   * 
   *       <dt>array `a_image`</dt>
   *       <dd>
   *         Class image data:
   *         <dl>
   *           <dt>int `i_height`</dt>
   *           <dd>Image height.</dd>
   * 
   *           <dt>int `i_width`</dt>
   *           <dd>Image width.</dd>
   * 
   *           <dt>bool `is_empty`</dt>
   *           <dd>Whether current image is empty.</dd>
   * 
   *           <dt>string `s_url`</dt>
   *           <dd>Url link to image.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array[] `a_search_tag`</dt>
   *       <dd>
   *         List of search tags.
   *         <dl>
   *           <dt>string `k_search_tag`</dt>
   *           <dd>Search tag key. </dd>
   * 
   *           <dt>string `text_title`</dt>
   *           <dd>Search tag name.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>int[] `a_tag`</dt>
   *       <dd>List of tags.</dd>
   * 
   *       <dt>bool `can_book`</dt>
   *       <dd>Whether current client can book class.</dd>
   * 
   *       <dt>string `dt_date_global`</dt>
   *       <dd>Session date/time in UTC.</dd>
   * 
   *       <dt>string `dt_date_local`</dt>
   *       <dd>Start date in local time.</dd>
   * 
   *       <dt>string `html_deny_reason`</dt>
   *       <dd>Reason why client can not book class. Not empty only if <var>can_book</var> is `false`.</dd>
   * 
   *       <dt>string `html_description`</dt>
   *       <dd>Class description.</dd>
   * 
   *       <dt>string `html_special`</dt>
   *       <dd>Special instructions.</dd>
   * 
   *       <dt>string `text_timezone`</dt>
   *       <dd>Timezone title.</dd>
   * 
   *       <dt>int `i_age_from`</dt>
   *       <dd>The minimum age restriction. Deprecated and is left only for back compatibility.</dd>
   * 
   *       <dt>int `i_age_from_month`</dt>
   *       <dd>The minimum age restriction (months).</dd>
   * 
   *       <dt>int `i_age_from_year`</dt>
   *       <dd>The minimum age restriction (years).</dd>
   * 
   *       <dt>int `i_age_to`</dt>
   *       <dd>The maximum age restriction. Deprecated and is left only for back compatibility.</dd>
   * 
   *       <dt>int `i_age_to_month`</dt>
   *       <dd>The maximum age restriction (months).</dd>
   * 
   *       <dt>int `i_age_to_year`</dt>
   *       <dd>The maximum age restriction (years).</dd>
   * 
   *       <dt>int `i_book`</dt>
   *       <dd>A total number of booked visits in the class, including all lists: active and waitlist.</dd>
   * 
   *       <dt>int `i_book_active`</dt>
   *       <dd>A total number of booked active visits in the class.</dd>
   * 
   *       <dt>int `i_capacity`</dt>
   *       <dd>Class capacity.</dd>
   * 
   *       <dt>int `i_duration`</dt>
   *       <dd>Class duration. In number of minutes.</dd>
   * 
   *       <dt>int `i_visit`</dt>
   *       <dd>Number of usages of promotion required to pay for a single class session.</dd>
   * 
   *       <dt>int|null `i_wait_limit`</dt>
   *       <dd>Limit of wait list. <tt>null</tt> if limit is not set.</dd>
   * 
   *       <dt>int `id_deny_reason`</dt>
   *       <dd>ID of deny reason. One of {@link DenyReasonSid} constants.</dd>
   * 
   *       <dt>bool `is_book`</dt>
   *       <dd>Whether current class was booked by current client.</dd>
   * 
   *       <dt>bool `is_book_for_guest`</dt>
   *       <dd>
   *         Allow clients to book on behalf of a guest.
   * `true` if clients can book on behalf of a guest.
   * `false` otherwise.
   *       </dd>
   * 
   *       <dt>bool `is_cancel`</dt>
   *       <dd>`true` if class period was cancelled; `false` otherwise.</dd>
   * 
   *       <dt>bool `is_cancellation_enabled`</dt>
   *       <dd>`true` if clients can cancel this session. Otherwise, this will be `false`.</dd>
   * 
   *       <dt>bool `is_event`</dt>
   *       <dd>`true` if it is event; `false` if it is class.</dd>
   * 
   *       <dt>bool `is_promotion_only`</dt>
   *       <dd>`true` if this class can be paid with promotion only; `false` otherwise.</dd>
   * 
   *       <dt>bool `is_virtual`</dt>
   *       <dd>`true` if class is virtual, `false` otherwise.</dd>
   * 
   *       <dt>bool `is_wait_list`</dt>
   *       <dd>`true` if user can take place in wait list only; `false` otherwise.</dd>
   * 
   *       <dt>bool `is_wait_list_enabled`</dt>
   *       <dd>`true` if wait list is enabled for class; `false` otherwise.</dd>
   * 
   *       <dt>string `k_resource_location`</dt>
   *       <dd>Off-site location asset key. Empty if off-site location is not assigned to this class.</dd>
   * 
   *       <dt>string `m_price`</dt>
   *       <dd>Session price.</dd>
   * 
   *       <dt>string `s_duration`</dt>
   *       <dd>Class duration. In human readable format.</dd>
   * 
   *       <dt>string `s_title`</dt>
   *       <dd>Class name.</dd>
   * 
   *       <dt>string `text_room`</dt>
   *       <dd>Class room.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_location`</dt>
   *   <dd>
   *     Location info. 
   *     <dl>
   *       <dt>float `f_latitude`</dt>
   *       <dd>Location latitude.</dd>
   * 
   *       <dt>float `f_longitude`</dt>
   *       <dd>Location longitude.</dd>
   * 
   *       <dt>float `f_rate`</dt>
   *       <dd>Location rating. From 1 to 5.</dd>
   * 
   *       <dt>string `k_location`</dt>
   *       <dd>Location key. </dd>
   * 
   *       <dt>string `s_address`</dt>
   *       <dd>Location address.</dd>
   * 
   *       <dt>string `s_map`</dt>
   *       <dd>Query to search location on "Google maps".</dd>
   * 
   *       <dt>string `s_phone`</dt>
   *       <dd>Location phone.</dd>
   * 
   *       <dt>string `s_title`</dt>
   *       <dd>Location name.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_staff`</dt>
   *   <dd>
   *     Staff list. 
   *     <dl>
   *       <dt>array `a_logo`</dt>
   *       <dd>
   *         Information about staff photo:
   *         <dl>
   *           <dt>int `id_gender`</dt>
   *           <dd>ID of gender.</dd>
   * 
   *           <dt>bool `is_empty`</dt>
   *           <dd>`true` - staff has photo; `false` - has no photo.</dd>
   * 
   *           <dt>string `s_url`</dt>
   *           <dd>URL to staff photo.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>bool `is_quick_substitute`</dt>
   *       <dd>Whether staff or pay rate changed due quick substitution.</dd>
   * 
   *       <dt>bool `is_substitute`</dt>
   *       <dd>Whether or not this staff member is a substitute.</dd>
   * 
   *       <dt>string `k_staff`</dt>
   *       <dd>
   *         
   * Deprecated use `uid_staff` instead.
   * 
   *       </dd>
   * 
   *       <dt>string `uid_staff`</dt>
   *       <dd>Staff user key. </dd>
   * 
   *       <dt>string `s_family`</dt>
   *       <dd>1st letter of surname of staff member.</dd>
   * 
   *       <dt>string `s_name`</dt>
   *       <dd>Staff name.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string[] `a_virtual_location`</dt>
   *   <dd>
   *     List of other locations where virtual class can be booked.
   * Empty array if class isn't virtual or can't be booked in other locations.
   *   </dd>
   * 
   *   <dt>array[] `a_visits_required`</dt>
   *   <dd>
   *     List of classes and events, which client should visit before this one.
   * 
   *     <dl>
   *       <dt>int `i_count`</dt>
   *       <dd>Number of visits.</dd>
   * 
   *       <dt>bool `is_event`</dt>
   *       <dd>`true` if this is an event, `false` if this is a class.</dd>
   * 
   *       <dt>string `k_class`</dt>
   *       <dd>Key of the class or event.</dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Name of the class or event.</dd>
   *     </dl>
   *   </dd>
   * </dl>
   * @get result
   * @post result
   * @var array[]
   */
  public $a_session_result;

  /**
   * Staff member list data.
   *
   * This will be `null` if data isn't loaded yet.
   *
   * <dl>
   *   <dt>array `a_logo`</dt>
   *   <dd>
   *     Information about staff photo:
   *     <dl>
   *       <dt>int `id_gender`</dt>
   *       <dd>ID of gender.</dd>
   * 
   *       <dt>bool `is_empty`</dt>
   *       <dd>`true` - staff has photo; `false` - has no photo.</dd>
   * 
   *       <dt>string `s_url`</dt>
   *       <dd>URL to staff photo.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `is_quick_substitute`</dt>
   *   <dd>Whether staff or pay rate changed due quick substitution.</dd>
   * 
   *   <dt>bool `is_substitute`</dt>
   *   <dd>Whether or not this staff member is a substitute.</dd>
   * 
   *   <dt>string `k_staff`</dt>
   *   <dd>
   *     
   * Deprecated use `uid_staff` instead.
   * 
   *   </dd>
   * 
   *   <dt>string `uid_staff`</dt>
   *   <dd>Staff user key. </dd>
   * 
   *   <dt>string `s_family`</dt>
   *   <dd>1st letter of surname of staff member.</dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>Staff name.</dd>
   * </dl>
   * @get result
   * @post result
   * @var array[]|null
   */
  public $a_staff;

  /**
   * List of other locations where virtual class can be booked.
   * Empty array if class isn't virtual or can't be booked in other locations.
   *
   * @get result
   * @post result
   * @var string[]
   */
  public $a_virtual_location = [];

  /**
   * A list of classes and events that clients should visit before this one.
   *
   * <dl>
   *   <dt>int `i_count`</dt>
   *   <dd>Number of visits.</dd>
   * 
   *   <dt>bool `is_event`</dt>
   *   <dd>`true` if this is an event, `false` if this is a class.</dd>
   * 
   *   <dt>string `k_class`</dt>
   *   <dd>Key of the class or event.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Name of the class or event.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_visits_required = [];

  /**
   * The date/time of the session.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dt_date = '';

  /**
   * Key of the business in which the action is performed.
   *
   * `null` if key of the business was not passed.
   *
   * Key of the business is required if {@link ClassViewModel} was passed.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The class period key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * A list of sessions to get information for.
   * A serialized array. See {@link ClassViewModel::$a_session_request} for the array structure.
   * Serialization and sending by POST is necessary to send big lists.
   *
   * @post post
   * @var string
   */
  public $s_session_request = '';

  /**
   * The user key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>