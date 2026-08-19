<?php

namespace WellnessLiving\Wl\Schedule\ClassList;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Classes\Tab\TabSid;
use WellnessLiving\Wl\Schedule\ClassView\ClassViewModel;
use WellnessLiving\Wl\Schedule\ClassView\DenyReasonSid;

/**
 * Retrieves a list of classes and class information for a Class Tab.
 *
 * @method WlModelRequest post() This method is a modified Get method {@link \Wl\Schedule\ClassList\ClassListApi::get()}. The difference is as follows:   - Some data for filtering is now transmitted by the post method. Because the addition of the filters creates a scenario where we can easily reach the maximum URL length of GET requests and the browser refuse to send the request (situations with long class ID, event ID or staff ID lists).   - Added generation of a separate 'Quick filter'. This generation is enabled using the flag {@link \Wl\Schedule\ClassList\ClassList68Api::$show_quick_filter}.   - Added a filter list of events {@link \Wl\Schedule\ClassList\ClassList68Api::$a_event}.  - Added a filter ID of tab {@link \Wl\Schedule\ClassList\ClassList68Api::$id_class_tab}.
 */
class ClassList68Model extends WlModelAbstract
{
  /**
   * Keys are dates of the days inside requested date range, when there is at least one class in the business.
   * If locations are sent as a parameter, then at least one class must exist in the given locations.
   *
   * Each key is a date string in `YYYY-MM-DD` format (local date in the business time zone).
   * Each value is an empty array reserved for future use.
   *
   * @post result
   * @var array<string,array>
   */
  public $a_calendar = [];

  /**
   * The list of classes keys to filter.
   * Return sessions with matching class IDs.
   *
   * If it's empty and {@link ClassList68Model::$show_class} is `true`, all classes will be returned.
   *
   * @post post
   * @var string[]
   */
  public $a_class = [];

  /**
   * List of tabs keys.
   *
   * This will be ignored if {@link ClassList68Model::$is_tab_all} is `true`.
   *
   * If list of tab keys is not empty, {@link ClassList68Model::$id_class_tab} is mandatory.
   *
   * `null` if no filtering by Book Now Tab is required.
   *
   * @post post
   * @var string[]|null
   */
  public $a_class_tab = null;

  /**
   * Class filter by day of the week.
   * Array of number representing the days of the week.
   * Return sessions matching the given weekdays.
   * (7 = Sunday, 1 = Monday, ..., 6 = Saturday)
   *
   * Empty array means no filtering.
   *
   * @post post
   * @var int[]
   * @see ADateWeekSid
   */
  public $a_day = [];

  /**
   * The list of event keys to filter.
   * Return sessions with matching event keys.
   *
   * If it's empty and {@link ClassList68Model::$show_event} is `true`, all events will be returned.
   *
   * @post post
   * @var string[]
   */
  public $a_event = [];

  /**
   * The list of location keys to filter results.
   * If it's empty, schedule for all locations will be returned.
   * All given locations should be from the same business, which is sent in {@link ClassListModel::$k_business}.
   *
   * @post post
   * @var string[]
   */
  public $a_location = [];

  /**
   * Information about classes/events for quick filter.
   *
   * Every element has the following keys:
   *
   * For generating this filter, all filters are applied except:
   * - {@link ClassList68Model::$a_class};
   * - {@link ClassList68Model::$a_event};
   * - {@link ClassList68Model::$show_class};
   * - {@link ClassList68Model::$show_event}.
   *
   * <dl>
   *   <dt>string `text_type`</dt>
   *   <dd>Type of class ("class" || "event")</dd>
   * 
   *   <dt>string `k_class`</dt>
   *   <dd>Class/event key. </dd>
   * 
   *   <dt>string `s_class`</dt>
   *   <dd>Class/event title.</dd>
   * 
   *   <dt>int `i_class`</dt>
   *   <dd>Total sessions found.</dd>
   * </dl>
   * @post result
   * @var array
   */
  public $a_quick = [];

  /**
   * A list of classes sessions starting with the date {@link ClassListModel::$dt_date}
   * and in the 62 days ahead (or up to {@link ClassListModel::$dt_end}).
   * Every element has the following keys:
   *
   * <dl>
   *   <dt>string[] `a_class_tab`</dt>
   *   <dd>Keys of class tab. </dd>
   * 
   *   <dt>string[] `a_image`</dt>
   *   <dd>The class image. Empty array if there is no image.</dd>
   * 
   *   <dt>string[] `a_search_tag`</dt>
   *   <dd>Tags associated with an individual class.</dd>
   * 
   *   <dt>string[] `a_staff`</dt>
   *   <dd>
   *     The list of staff keys for the staff member conducting the session.
   * For legacy third-party apps listed in {@link \Wl\Schedule\ClassList\ClassListApi::APPS_USE_OLD_K_STAFF},
   * contains  `k_staff` for backward compatibility.
   * Empty for all other applications. Use `a_staff_uid` instead.
   *   </dd>
   * 
   *   <dt>bool[] `a_staff_quick_substitute`</dt>
   *   <dd>
   *     Whether staff or pay rate changed due quick substitution, for each staff member.
   * Aligned by index with <var>a_staff_uid</var>.
   *   </dd>
   * 
   *   <dt>string[] `a_staff_uid`</dt>
   *   <dd>The list of staff user keys for the staff member conducting the session.</dd>
   * 
   *   <dt>string[] `a_virtual_location`</dt>
   *   <dd>
   *     The list of virtual locations keys. Each value is a location key.
   * 
   *   </dd>
   * 
   *   <dt>bool|null `can_book`</dt>
   *   <dd>
   *     Whether current client can book class. Only present if {@link ClassList68Model::$show_book_status} is `true`.
   * `null` if not requested.
   *   </dd>
   * 
   *   <dt>string `dt_date`</dt>
   *   <dd>The date/time of the session start in UTC.</dd>
   * 
   *   <dt>string `dt_time`</dt>
   *   <dd>The time of the session start in the local time zone.</dd>
   * 
   *   <dt>string `dtl_date`</dt>
   *   <dd>The date/time of session start in the location's time zone.</dd>
   * 
   *   <dt>bool `hide_application`</dt>
   *   <dd>
   *     Specifies whether the class will be hidden in the White Label Achieve Client App. If `true`, it means that the
   *  class won't be displayed. Otherwise, this will be `false` to indicate that the class will be displayed.
   *   </dd>
   * 
   *   <dt>string `html_description`</dt>
   *   <dd>The class description.</dd>
   * 
   *   <dt>int|null `i_age_from`</dt>
   *   <dd>
   *     The minimum age restriction. Deprecated and is left only for back compatibility. `null` if
   * {@link ClassList68Model::$a_session}'s <var>is_age_public</var> is `false` or age is not restricted.
   *   </dd>
   * 
   *   <dt>int|null `i_age_from_month`</dt>
   *   <dd>The minimum age restriction (months). `null` if <var>is_age_public</var> is `false` or age is not restricted.</dd>
   * 
   *   <dt>int|null `i_age_from_year`</dt>
   *   <dd>The minimum age restriction (years). `null` if <var>is_age_public</var> is `false` or age is not restricted.</dd>
   * 
   *   <dt>int|null `i_age_to`</dt>
   *   <dd>
   *     The maximum age restriction. Deprecated and is left only for back compatibility. `null` if
   * <var>is_age_public</var> is `false` or age is not restricted.
   *   </dd>
   * 
   *   <dt>int|null `i_age_to_month`</dt>
   *   <dd>The maximum age restriction (months). `null` if <var>is_age_public</var> is `false` or age is not restricted.</dd>
   * 
   *   <dt>int|null `i_age_to_year`</dt>
   *   <dd>The maximum age restriction (years). `null` if <var>is_age_public</var> is `false` or age is not restricted.</dd>
   * 
   *   <dt>int `i_book`</dt>
   *   <dd>Count of visits on this class.</dd>
   * 
   *   <dt>int|null `i_capacity`</dt>
   *   <dd>The capacity of the service. 'null' indicates that the capacity is not set.</dd>
   * 
   *   <dt>int `i_day`</dt>
   *   <dd>The day of the week when session is occurred. Constant from {@link ADateWeekSid}.</dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>The duration of the session in minutes.</dd>
   * 
   *   <dt>int `i_wait`</dt>
   *   <dd>Number of clients in wait list.</dd>
   * 
   *   <dt>int|null `i_wait_limit`</dt>
   *   <dd>Limit of wait list. `null` if limit is not set.</dd>
   * 
   *   <dt>int `i_wait_spot`</dt>
   *   <dd>
   *     Position of the current client (<var>uid</var>) in the wait list for this session. `0` if the client is not
   * on the wait list, or if the business hides wait list position (fastest-response wait list promotion).
   *   </dd>
   * 
   *   <dt>int|null `id_deny_reason`</dt>
   *   <dd>
   *     ID of deny reason. One of {@link DenyReasonSid} constants. Only present if
   * {@link ClassList68Model::$show_book_status} is `true`. `null` if not requested.
   *   </dd>
   * 
   *   <dt>bool|null `is_book`</dt>
   *   <dd>
   *     Whether current class was booked by current client. Only present if
   * {@link ClassList68Model::$show_book_status} is `true`. `null` if not requested.
   *   </dd>
   * 
   *   <dt>bool `is_age_public`</dt>
   *   <dd>Whether the age restriction of the class is shown to clients.</dd>
   * 
   *   <dt>bool `is_book_for_guest`</dt>
   *   <dd>
   *     Allow clients to book on behalf of a guest.
   *  `true` if clients can book on behalf of a guest.
   *  `false` otherwise.
   *   </dd>
   * 
   *   <dt>bool `is_cancel`</dt>
   *   <dd>If `true`, this class period was canceled. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_cancellation_enabled`</dt>
   *   <dd>`true` if clients can cancel this session. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_event`</dt>
   *   <dd>If `true`, this is an event. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_special_instructions`</dt>
   *   <dd>
   *     Whether special instructions are configured for this session and are visible to the current client.
   * The content itself (`html_special` in {@link ClassViewModel}) is not returned here.
   *   </dd>
   * 
   *   <dt>bool `is_virtual`</dt>
   *   <dd>If `true`, this class is virtual. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_wait`</dt>
   *   <dd>`true` if the current client (<var>uid</var>) is on the wait list for this session; `false` otherwise.</dd>
   * 
   *   <dt>bool|null `is_wait_list`</dt>
   *   <dd>
   *     `true` if the current client can only take a place on the wait list; `false` otherwise. Only present if
   * {@link ClassList68Model::$show_book_status} is `true`. `null` if not requested.
   *   </dd>
   * 
   *   <dt>bool `is_wait_list_enabled`</dt>
   *   <dd>This will be `true` if user is only on the wait-list. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>string `k_class`</dt>
   *   <dd>The class key. </dd>
   * 
   *   <dt>string `k_class_period`</dt>
   *   <dd>The class period key. </dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>The key of the session's location. </dd>
   * 
   *   <dt>string `k_resource_location`</dt>
   *   <dd>Off-site location asset key. Empty if off-site location is not assigned to this class.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>The title of the session.</dd>
   * 
   *   <dt>string `text_room`</dt>
   *   <dd>Class room. Empty string if not set.</dd>
   * 
   *   <dt>string `url_book`</dt>
   *   <dd>The direct link to start booking on the WellnessLiving website.</dd>
   * 
   *   <dt>string `url_virtual_join`</dt>
   *   <dd>
   *     Link to virtual service. Empty string if the class isn't virtual, or if the current client
   * (<var>uid</var>) has not booked/waitlisted this session, or joining isn't available yet.
   *   </dd>
   * </dl>
   * @post result
   * @var array[]
   */
  public $a_session;

  /**
   * Class filter by time of day.
   * List of arrays with start and end time in "HH:MM" format (24h).
   * Include sessions that start between the specified time range.
   *
   * Each value is array with time parameters:
   *
   * Empty array means no filtering.
   *
   * <dl>
   *   <dt>int `tl_start`</dt>
   *   <dd>Time when the session starts. Example: value `'06:00'`.</dd>
   * 
   *   <dt>int `tl_end`</dt>
   *   <dd>Time when the session ends. Example: value `'14:00'`.</dd>
   * </dl>
   * @post post
   * @var array[]
   */
  public $a_time = [];

  /**
   * The list start date in MySQL format.
   *
   * @post post
   * @var string
   */
  public $dt_date = '';

  /**
   * The list end date in MySQL format.
   *
   * @post post
   * @var string
   */
  public $dt_end = '';

  /**
   * ID of tab. One of {@link TabSid} constants.
   * This will be ignored if {@link ClassList68Model::$is_tab_all} is `true`.
   *
   * `null` if no filtering by tab is required.
   *
   * @post post
   * @var int|null
   */
  public $id_class_tab = null;

  /**
   * `true` means to not generate {@link ClassList68Model::$a_session} result.
   * Can be used, if you do not need full information about existing classes and result in {@link ClassList68Model::$a_calendar} is enough.
   *
   * @post post
   * @var bool
   */
  public $is_response_short = false;

  /**
   * If `true`, sessions from every class tab are returned. If `false`, use the
   * {@link ClassList68Model::$k_class_tab} or {@link ClassList68Model::$id_class_tab} to filter sessions by class tab.
   *
   * @post post
   * @var bool
   */
  public $is_tab_all = false;

  /**
   * If `true`, the list of sessions contains sessions from different time zones. Otherwise, this will be `false`.
   *
   * @post result
   * @var bool
   */
  public $is_timezone_different;

  /**
   * Class filter by type.
   * The class is virtual.
   *
   * `true`: Only virtual classes.
   * `false`: Only in-person.
   * `null` or not set: No filtering.
   *
   * @post post
   * @var bool|null
   */
  public $is_virtual = null;

  /**
   * If `true`, there exists at least one virtual service by a specified
   * {@link ClassList68Model::$k_business} and {@link ClassList68Model::$k_class_tab},
   * Otherwise, this will be `false`.
   *
   * @post result
   * @var bool
   */
  public $is_virtual_service;

  /**
   * The business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';

  /**
   * The tab key.
   * This will be ignored if {@link ClassList68Model::$is_tab_all} is `true`.
   *
   * @post post
   * @var string
   */
  public $k_class_tab = '0';

  /**
   * Key of timezone.
   *
   * If not set then use default client timezone.
   *
   * @post post
   * @var null|string
   */
  public $k_timezone = null;

  /**
   * The list of staff members to filter.
   * A comma separated list of staff keys.
   *
   * @post post
   * @var string
   * @deprecated Use {@link ClassListModel::$s_staff_uid} instead.
   */
  public $s_staff = '';

  /**
   * The list of staff user keys to filter.
   * A comma separated list of staff user keys.
   *
   * @post post
   * @var string
   */
  public $s_staff_uid = '';

  /**
   * Whether to compute and add the per-session booking status fields to each element of
   * {@link ClassList68Model::$a_session}: <var>can_book</var>, <var>is_book</var>, <var>is_wait_list</var>,
   * <var>id_deny_reason</var>.
   *
   *  It requires evaluating the full
   * booking policy (promotions, family accounts, resource availability, etc.) for every returned session, which
   * is significantly more expensive than the rest of this API. Defaults to `false` so that regular schedule
   * listing calls are not slowed down; enable it only when the caller actually needs these fields.
   *
   * @post post
   * @var bool
   */
  public $show_book_status = false;

  /**
   * If `true`, canceled sessions will be returned. If `false`, canceled sessions won't be returned.
   *
   * @post post
   * @var bool
   */
  public $show_cancel = false;

  /**
   * If `true`, classes will be included in the response. `false` - otherwise.
   *
   * @post post
   * @var bool
   */
  public $show_class = true;

  /**
   * If `true`, events are also returned. If `false`, only classes are returned.
   *
   * @post post
   * @var bool
   */
  public $show_event = false;

  /**
   * Whether to generate {@link ClassList68Model::$a_quick} a quick filter.
   * If `true`, a quick filter will be generated. `false` otherwise.
   *
   * @post post
   * @var bool
   */
  public $show_quick_filter = false;

  /**
   * The user key.
   *
   * @post post
   * @var string
   */
  public $uid = '';
}

?>