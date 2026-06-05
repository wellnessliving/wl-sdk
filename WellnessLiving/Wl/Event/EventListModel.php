<?php

namespace WellnessLiving\Wl\Event;

use WellnessLiving\Core\Drive\DriveTypeSid;
use WellnessLiving\Core\Sid\YesNoSid;
use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\AFlagSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlScheduleTimeSid;

/**
 * Retrieves a list of events that fit the given filter parameters.
 */
class EventListModel extends WlModelAbstract
{
  /**
   * List of class keys applied by filter.
   *
   * @get get
   * @var string[]|null
   */
  public $a_class_filter = null;

  /**
   * List of day the week applied by filter {@link ADateWeekSid}.
   *
   * @get get
   * @var string[]|null
   */
  public $a_day = null;

  /**
   * List of enrollment blocks keys applied by filter.
   *
   * @get get
   * @var string[]|null
   */
  public $a_enrollment_block_filter = null;

  /**
   * List of available enrollment blocks matching the requested parameters.
   *
   * Key is the enrollment block key.  Value is the title of the first event found in that enrollment block.
   *
   * @get result
   * @var string[]
   */
  public $a_enrollment_block_list = [];

  /**
   * A list of events corresponding to requested parameters. Each event will have the following keys: <dl>
   *   <dt>array `a_age_restriction`</dt>
   *   <dd>
   *     Information about age restrictions for this event. Has following structure:
   *     <dl>
   *       <dt>int|null `i_age_from`</dt>
   *       <dd>
   *          The minimum age for participation in the event.
   *          `null` if there's no minimum age set or information isn't available.
   *       </dd>
   *
   *       <dt>int|null `i_age_to`</dt>
   *       <dd>
   *          The age limit for participation in the event.
   *          `null` if there's no age limit set or information isn't available.
   *       </dd>
   *
   *       <dt>bool `is_age_public`</dt>
   *       <dd>
   *         `true` if age restrictions are public and available, `false` if they're hidden.
   *          When restrictions are hidden and the current user isn't a staff member, the age range will be empty.
   *       </dd>
   *     </dl>
   *   </dd>
   *
   *   <dt>string[] `a_class_tab`</dt>
   *   <dd>
   *     The list of class tab keys that contain this event.
   *        </dd>
   *
   *   <dt>array `a_logo`</dt>
   *   <dd>
   *     Information about the event's logo. It will contain the following keys:
   *     <dl>
   *       <dt>int `i_height`</dt>
   *       <dd>The image height.</dd>
   *
   *       <dt>int `i_height_src`</dt>
   *       <dd>The source image's height.</dd>
   *
   *       <dt>int `i_rotate`</dt>
   *       <dd>The angle which image was rotated compared to the original.</dd>
   *
   *       <dt>int `i_width`</dt>
   *       <dd>The image width.</dd>
   *
   *       <dt>int `i_width_src`</dt>
   *       <dd>The source image's width.</dd>
   *
   *       <dt>int `id_type_src`</dt>
   *       <dd>The image type ID. One of the {@link DriveTypeSid} constants.</dd>
   *
   *       <dt>bool `is_resize`</dt>
   *       <dd>This will be `true` if the image has been resized. `false` otherwise.</dd>
   *
   *       <dt>bool `is_old`</dt>
   *       <dd>This will be `true` if the image is old. `false` otherwise.</dd>
   *
   *       <dt>string `s_url`</dt>
   *       <dd>The URL to the image.</dd>
   *
   *       <dt>string `url-view`</dt>
   *       <dd>The URL to the image.</dd>
   *
   *       <dt>string `url-thumbnail`</dt>
   *       <dd>The URL to the image's thumbnail.</dd>
   *     </dl>
   *   </dd>
   *
   *   <dt>array `a_schedule`</dt>
   *   <dd>
   *     Information about the event's schedule.
   *     It is a list of instances, each instance will contain the following keys:
   *     <dl>
   *       <dt>int[] `a_day`</dt>
   *       <dd>
   *         Days of the week when the event is scheduled. Key and value are both the weekday number
   *         (1 = Monday, 7 = Sunday), matching {@link ADateWeekSid} constants.
   *         <dl>
   *           <dt>int `{i_day}`</dt>
   *           <dd>Weekday number. Key equals value; both represent the day (1 = Monday ... 7 = Sunday).</dd>
   *         </dl>
   *       </dd>
   *
   *       <dt>array `a_staff_member`</dt>
   *       <dd>
   *         Information about the staff member(s) conducting the event. This is a list of staff, each element is an array
   *         with the following keys:
   *         <dl>
   *           <dt>string `k_staff_member`</dt>
   *           <dd>The staff member key. 
   *
   *           <dt>string `text_business_role`</dt>
   *           <dd>The name of the staff member's business role.</dd>
   *
   *           <dt>string `text_mail`</dt>
   *           <dd>The staff member's email address.</dd>
   *
   *           <dt>string `text_name_first`</dt>
   *           <dd>The staff member's first name.</dd>
   *
   *           <dt>string `text_name_full`</dt>
   *           <dd>The staff member's full name.</dd>
   *
   *           <dt>string `text_name_last`</dt>
   *           <dd>The staff member's last name.</dd>
   *
   *           <dt>string `uid`</dt>
   *           <dd>The staff member's user key. 
   *         </dl>
   *       </dd>
   *
   *       <dt>string `dl_end`</dt>
   *       <dd>The ending date of the event series.</dd>
   *
   *       <dt>string `dl_start`</dt>
   *       <dd>The starting date of the event series.</dd>
   *
   *       <dt>bool `is_day`</dt>
   *       <dd>This will be `true` if the event starts and ends on the same day.</dd>
   *
   *       <dt>string `k_class_period`</dt>
   *       <dd>The class period key. 
   *
   *       <dt>string `k_location`</dt>
   *       <dd>The location key. 
   *
   *       <dt>string `text_location`</dt>
   *       <dd>The name of the location.</dd>
   *
   *       <dt>string `text_time`</dt>
   *       <dd>The human readable version of the event time.</dd>
   *     </dl>
   *   </dd>
   *
   *   <dt>array[] `a_search_tag`</dt>
   *   <dd>
   *     The list of search tags for this event. Each element:
   *     <dl>
   *       <dt>string `k_search_tag`</dt>
   *       <dd>Search tag key. 
   *
   *       <dt>string `text_title`</dt>
   *       <dd>Name of the tag.</dd>
   *     </dl>
   *   </dd>
   *
   *   <dt>bool `can_book`</dt>
   *   <dd>
   *      Whether event can be booked or not.
   *      `true` - there are no restrictions to book this event in general.
   *      `false` - for some reason event cannot be booked.
   *      The reason can be found in the following fields: `html_reason`, `id_reason`, `sid_reason`.
   *      This field can be used instead of `is_bookable` and covers a significant number of checks under its value.
   *   </dd>
   *
   *   <dt>bool `can_cancel`</dt>
   *   <dd>Whether the current user can cancel already booked event.</dd>
   *
   *   <dt>string `dl_early`</dt>
   *   <dd>The early cancel date</dd>
   *
   *   <dt>string `dl_end`</dt>
   *   <dd>The ending date of the event.</dd>
   *
   *   <dt>string `dl_start`</dt>
   *   <dd>The starting date of the event.</dd>
   *
   *   <dt>string `dl_session`</dt>
   *   <dd>Local date of the closest session of the event.</dd>
   *
   *   <dt>string `dtu_session`</dt>
   *   <dd>Date of the closest session of the event.</dd>
   *
   *   <dt>int `i_session_all`</dt>
   *   <dd>Number of all sessions in the event.</dd>
   *
   *   <dt>int `i_session_future`</dt>
   *   <dd>Number of all sessions in the future.</dd>
   *
   *   <dt>int `i_session_past`</dt>
   *   <dd>Number of all sessions in the past.</dd>
   *
   *   <dt>bool `is_age_restrict`</dt>
   *   <dd>`true` if the event is age restricted, `false` if the event is not.</dd>
   *
   *   <dt>bool `is_age_restrict_only`</dt>
   *   <dd>
   *     `true` if this event booking is restricted and restricted because of client's age only.
   *     `false` otherwise.
   *   </dd>
   *
   *   <dt>bool `is_block`</dt>
   *   <dd>`true` if the event is a block event, `false` if the event is not.</dd>
   *
   *   <dt>bool `is_bookable`</dt>
   *   <dd>
   *      Whether event is bookable.
   *      `true` - there are no restrictions to book this event in general.
   *      `false` - for some reason event cannot be booked.
   *      <b>Attention!!!</b>
   *      Historically, the value of this field may not cover all expected checks, and may be confusing to someone.
   *      It is properly used in combination with a number of other flags.
   *      If you need a flag that covers most of the checks please use `can_book` field.
   *   </dd>
   *
   *   <dt>bool `is_book_for_guest`</dt>
   *   <dd>
   *     Allow clients to book on behalf of a guest.
   *     `true` if clients can book on behalf of a guest.
   *     `false` otherwise.
   *   </dd>
   *
   *   <dt>bool `is_booked`</dt>
   *   <dd>`true` if the user has booked the event, `false` if the event is not.</dd>
   *
   *   <dt>bool `is_closed`</dt>
   *   <dd>`true` if booking the event is closed, `false` if the event is not.</dd>
   *
   *   <dt>bool `is_full`</dt>
   *   <dd>`true` if the event is full, `false` if the event is not.</dd>
   *
   *   <dt>bool `is_online`</dt>
   *   <dd>`true` if the event is available online, `false` if the event is not.</dd>
   *
   *   <dt>bool `is_online_private`</dt>
   *   <dd>`true` if the event is online and private, `false` if the event is not.</dd>
   *
   *   <dt>bool `is_open`</dt>
   *   <dd>`true` if the event is open to be booked, `false` if the event is not.</dd>
   *
   *   <dt>bool `is_prorate`</dt>
   *   <dd>`true` if the event is prorated, `false` if the event is not.</dd>
   *
   *   <dt>bool `is_single_buy`</dt>
   *   <dd>`true` if the event sessions can be paid with single session, `false` single sessions disabled.</dd>
   *
   *   <dt>bool `is_virtual`</dt>
   *   <dd>`true` if the event is only held virtually, `false` if the event is not.</dd>
   *
   *   <dt>string `k_class`</dt>
   *   <dd>The class key. 
   *
   *   <dt>string `k_class_period`</dt>
   *   <dd>The class period key. 
   *
   *   <dt>string `k_enrollment_block`</dt>
   *   <dd>The enrollment block key. 
   *
   *   <dt>string `k_location`</dt>
   *   <dd>The location key. 
   *
   *   <dt>string `m_price_max`</dt>
   *   <dd>Maximum price per session in the event.</dd>
   *
   *   <dt>string `m_price_min`</dt>
   *   <dd>Minimum price per session in the event.</dd>
   *
   *   <dt>string `m_price_total`</dt>
   *   <dd>The total price of booking a session.</dd>
   *
   *   <dt>string `m_price_total_early`</dt>
   *   <dd>The total price if booked early.</dd>
   *
   *   <dt>string `text_age_restrict`</dt>
   *   <dd>The age description.</dd>
   *
   *   <dt>string `text_title`</dt>
   *   <dd>The name of the event.</dd>
   *
   *   <dt>string `url_book`</dt>
   *   <dd>The direct booking url.</dd>
   *
   *   <dt>string `xml_description`</dt>
   *   <dd>The description of the event.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_event_list = [];

  /**
   * List of location keys applied by filter.
   *
   * @get get
   * @var string[]|null
   */
  public $a_location = null;

  /**
   * List of staff keys applied by filter.
   *
   * @get get
   * @var string[]|null
   */
  public $a_staff = null;

  /**
   * List of time day applied by filter {@link WlScheduleTimeSid}.
   *
   * @get get
   * @var string[]|null
   */
  public $a_time = null;

  /**
   * List of IDs to include/exclude virtual events.
   * If the only ID is {@link YesNoSid::YES}, only virtual events are included.
   * If the only ID is {@link YesNoSid::NO}, only in-person events are included.
   * Otherwise, no filtering is done.
   *
   * @get get
   * @var string[]|null
   */
  public $a_virtual = null;

  /**
   * The end date of the range from which a list of events should be retrieved.
   *
   * <tt>null</tt> if the range has no end date.
   *
   * @get get
   * @var string|null
   */
  public $dl_end = null;

  /**
   * The start date of the range from which a list of events should be retrieved.
   *
   * <tt>null</tt> if the range has no start date.
   *
   * @get get
   * @var string|null
   */
  public $dl_start = null;

  /**
   * Defines how the event availability flag filter should be applied.
   *
   * One of {@link AFlagSid} constants.
   *
   * * {@link AFlagSid::ON} to show only available events.
   * * {@link AFlagSid::OFF} to show only unavailable events.
   * * {@link AFlagSid::ALL} to show all events (available and unavailable).
   *
   * @get get
   * @var int
   */
  public $id_flag = 3;

  /**
   * Determines whether the endpoint is used for backend mode.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * Model cache reset flag.
   *
   * @put post
   * @var bool
   */
  public $is_cache_reset = false;

  /**
   * `true` to show even event restricted by booking policies; `false` to show available events only.
   *
   * @get get
   * @var bool
   */
  public $is_ignore_requirement = false;

  /**
   * Determines whether you need to retrieve a list of event sessions regardless of the tab specified in {@link EventListModel::$k_class_tab}.
   *
   * * <tt>true</tt> - retrieves a list regardless of the specified tab.
   * * <tt>false</tt> - retrieves a list only for the specific tab.
   *
   * @get get
   * @var bool
   */
  public $is_tab_all = false;

  /**
   * The event business key to retrieve a list of all event sessions in business.
   *
   * `null` to retrieve events from {@link EventListModel::$k_location}.
   *
   * @get get
   * @put get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The event class key to retrieve a list of all event sessions of a specific class.
   * `null` to retrieve a list of event sessions of all classes.
   *
   * @get get
   * @var string|null
   */
  public $k_class = null;

  /**
   * The class tab key to retrieve a list of event sessions from a specific tab only.
   * An empty value to retrieve a list of event sessions that don't belong to any tab.
   *
   * Will be ignored in next cases:
   * * {@link EventListModel::$k_skin} specified.
   * * {@link EventListModel::$is_tab_all} is <tt>true</tt>.
   *
   * @get get
   * @var string
   */
  public $k_class_tab = '0';

  /**
   * The event location key to retrieve a list of all event sessions in a specific location.
   *
   * Required if {@link EventListModel::$k_business} isn't specified.
   * `null` if you need to retrieve a list of event sessions in all locations of {@link EventListModel::$k_business}.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The skin key if an event list is used for widget mode.
   *
   * {@link EventListModel::$k_class_tab} will be ignored for widget mode.
   *
   * @get get
   * @var string
   */
  public $k_skin = '0';

  /**
   * Search string to filter events by name.
   *
   * @get get
   * @var string
   */
  public $text_search = '';

  /**
   * The user key.
   * Required to apply specific user rules such as age restrictions.
   *
   * @get get
   * @put get
   * @var string|null
   */
  public $uid = '0';
}

?>