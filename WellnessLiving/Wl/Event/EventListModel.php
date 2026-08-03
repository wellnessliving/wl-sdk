<?php

namespace WellnessLiving\Wl\Event;

use WellnessLiving\Core\Sid\YesNoSid;
use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\AFlagSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlScheduleTimeSid;

/**
 * Retrieves a list of events that fit the given filter parameters.
 *
 * @method WlModelRequest get() Returns the list of events matching the specified filter parameters.  Used to display the event schedule on business and location pages. Supports filtering by location, date range, staff, and booking status. Results are cached per business and user context; the cache is invalidated automatically when events are modified.
 * @method WlModelRequest put() Resets the event list cache for the specified business and user.  Call this after modifying event data to force the next request to rebuild the schedule from the database. Can also conditionally reset without parameters if the caller determines a reset is needed.
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
   * Key is the enrollment block key. 
   * Value is the title of the first event found in that enrollment block.
   *
   * @get result
   * @var string[]
   */
  public $a_enrollment_block_list = [];

  /**
   * A list of events corresponding to requested parameters.
   *
   * <dl>
   *   <dt>array `a_age_restriction`</dt>
   *   <dd>
   *     Information about age restrictions for this event, has the following structure:
   *     <dl>
   *       <dt>int|null `i_age_from`</dt>
   *       <dd>
   *         The minimum age for participation in the event.
   *  `null` if there's no minimum age set or information isn't available.
   *       </dd>
   * 
   *       <dt>int|null `i_age_to`</dt>
   *       <dd>
   *         The age limit for participation in the event.
   * `null` if there's no age limit set or information isn't available.
   *       </dd>
   * 
   *       <dt>bool `is_age_public`</dt>
   *       <dd>
   *         `true` if age restrictions are public and available, `false` if they're hidden.
   * When restrictions are hidden and the current user isn't a staff member, the age range will be empty.
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string[] `a_class_tab`</dt>
   *   <dd>List of book now tags connected to this event.</dd>
   * 
   *   <dt>array `a_logo`</dt>
   *   <dd>Data about logo of the event.</dd>
   * 
   *   <dt>array[] `a_schedule`</dt>
   *   <dd>
   *     List of scheduled sessions of the event.
   *     <dl>
   *       <dt>int[] `a_day`</dt>
   *       <dd>List of weekday numbers when event occur.</dd>
   * 
   *       <dt>array[] `a_staff_member`</dt>
   *       <dd>
   *         List of staff members providing event session.
   *         <dl>
   *           <dt>string `k_staff_member`</dt>
   *           <dd>Staff member key.</dd>
   * 
   *           <dt>string `text_business_role`</dt>
   *           <dd>Staff member role title.</dd>
   * 
   *           <dt>string `text_mail`</dt>
   *           <dd>Staff member email address.</dd>
   * 
   *           <dt>string `text_name_first`</dt>
   *           <dd>Staff member first name.</dd>
   * 
   *           <dt>string `text_name_full`</dt>
   *           <dd>Staff member full name.</dd>
   * 
   *           <dt>string `text_name_last`</dt>
   *           <dd>Staff member last name.</dd>
   * 
   *           <dt>string `uid`</dt>
   *           <dd>Staff member uid.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dl_end`</dt>
   *       <dd>End date of the schedule in <tt>MySql</tt> format.</dd>
   * 
   *       <dt>string `dl_start`</dt>
   *       <dd>Start date of the schedule in <tt>MySql</tt> format.</dd>
   * 
   *       <dt>bool `is_day`</dt>
   *       <dd>Whether this is a single day schedule (start and end dates of the schedule are the same).</dd>
   * 
   *       <dt>string `k_class_period`</dt>
   *       <dd>Class period key.</dd>
   * 
   *       <dt>string `k_location`</dt>
   *       <dd>Location key.</dd>
   * 
   *       <dt>string `k_resource_location`</dt>
   *       <dd>
   *
   * Only one such resource can be selected for a schedule.
   * 
   * Empty string, if no off-site location is used.
   * `null` if field is not loaded.
   *       </dd>
   * 
   *       <dt>string `text_location`</dt>
   *       <dd>Location title.</dd>
   * 
   *       <dt>string `text_room`</dt>
   *       <dd>Room where the session takes place.</dd>
   * 
   *       <dt>string `text_time`</dt>
   *       <dd>Start and end time of the scheduled sessions in human readable format.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_search_tag`</dt>
   *   <dd>List of search tags connected to this event.</dd>
   * 
   *   <dt>bool `can_book`</dt>
   *   <dd>
   *     Whether event can be booked or not.
   * * `true` - there are no restrictions to book this event in general.
   * * `false` - for some reason event cannot be booked.
   * 
   * The reason can be found in the following fields:
   * * {@link \Wl\Event\EventListItemEntity::$html_reason}
   * * {@link \Wl\Event\EventListItemEntity::$id_reason}
   * * {@link \Wl\Event\EventListItemEntity::$sid_reason}
   * 
   * This field can be used instead of {@link \Wl\Event\EventListItemEntity::$is_bookable}
   *  and covers a significant number of checks under its value.
   *   </dd>
   * 
   *   <dt>bool `can_cancel`</dt>
   *   <dd>Whether current user can cancel already booked event.</dd>
   * 
   *   <dt>string `dl_early`</dt>
   *   <dd>End date, when early bird price ends in <tt>MySql</tt> format.</dd>
   * 
   *   <dt>string `dl_end`</dt>
   *   <dd>End date of the scheduled session in <tt>MySql</tt> format.</dd>
   * 
   *   <dt>string `dl_session`</dt>
   *   <dd>Local date of the closest session of the event.</dd>
   * 
   *   <dt>string `dl_start`</dt>
   *   <dd>Start date of the scheduled sessions in <tt>MySql</tt> format.</dd>
   * 
   *   <dt>string `dtu_session`</dt>
   *   <dd>Date of the closest session of the event.</dd>
   * 
   *   <dt>string `html_reason`</dt>
   *   <dd>
   *     Reason why session can not be booked.
   *
   *   </dd>
   * 
   *   <dt>int `i_session_all`</dt>
   *   <dd>Number of all sessions in the event.</dd>
   * 
   *   <dt>int `i_session_future`</dt>
   *   <dd>Number of future sessions in the event.</dd>
   * 
   *   <dt>int `i_session_past`</dt>
   *   <dd>Number of past sessions in the event.</dd>
   * 
   *   <dt>int `id_reason`</dt>
   *   <dd>ID of deny reason.</dd>
   * 
   *   <dt>bool `is_age_restrict`</dt>
   *   <dd>Whether booking of this event restricted because of age rules for {@link EventListModel}.</dd>
   * 
   *   <dt>bool `is_age_restrict_only`</dt>
   *   <dd>`true` if this event booking is restricted and restricted because of client's age only.
   * `false` otherwise.</dd>
   * 
   *   <dt>bool|null `is_available`</dt>
   *   <dd>
   *     Whether the event is available for booking or not.
   * The flag refers to the Available/Unavailable filter.
   * 
   * `null` if the field is not initialized.
   *   </dd>
   * 
   *   <dt>bool `is_block`</dt>
   *   <dd>
   *     Whether single sessions of the event can be booked.
   * 
   * Depending on current backend/fronted status.
   * 
   * 
   * <tt>true</tt> - booking single sessions are not allowed.
   * <tt>false</tt> - booking single sessions are allowed.
   *   </dd>
   * 
   *   <dt>bool `is_book_for_guest`</dt>
   *   <dd>
   *     Allow clients to book on behalf of a guest.
   * 
   * `true` if clients can book on behalf of a guest.
   * `false` otherwise.
   *   </dd>
   * 
   *   <dt>bool `is_bookable`</dt>
   *   <dd>
   *     Whether event is bookable.
   * 
   * * `true` - there are no restrictions to book this event in general.
   * * `false` - for some reason event cannot be booked.
   * 
   * <b>Attention!!!</b>
   * 
   * Historically, the value of this field may not cover all expected checks,
   *  and may be confusing to someone.
   * 
   * It is properly used in combination with a number of other flags.
   * 
   * If you need a flag that covers most of the checks please
   *
   *   </dd>
   * 
   *   <dt>bool `is_booked`</dt>
   *   <dd>Whether event is already booked.</dd>
   * 
   *   <dt>bool `is_cancellation_enabled`</dt>
   *   <dd>`true` if clients can cancel this event. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_closed`</dt>
   *   <dd>
   *     Whether booking of the event is closed already.
   * Means that in general it is bookable but currently booking is closed.
   *   </dd>
   * 
   *   <dt>bool `is_full`</dt>
   *   <dd>Whether event is full already.</dd>
   * 
   *   <dt>bool `is_online`</dt>
   *   <dd>`true` if this class can be booked by any client; `false` otherwise.</dd>
   * 
   *   <dt>bool `is_online_private`</dt>
   *   <dd>
   *     `true` means to show class only for clients who can book online,
   * `false` means to show class for all clients.
   *   </dd>
   * 
   *   <dt>bool `is_open`</dt>
   *   <dd>Whether event sessions can be booked after event has started.</dd>
   * 
   *   <dt>bool `is_promotion_only`</dt>
   *   <dd>
   *     Whether clients of the business can pay for the event with purchase option only.
   * 
   * `true` if event can be paid with purchase option only.
   * `false` if full event purchase or single session purchase are allowed.
   *   </dd>
   * 
   *   <dt>bool `is_prorate`</dt>
   *   <dd>Whether event sessions can be booked partially.</dd>
   * 
   *   <dt>bool `is_single_buy`</dt>
   *   <dd>Whether class/event can be paid with single session.</dd>
   * 
   *   <dt>bool `is_virtual`</dt>
   *   <dd>Whether event is virtual.</dd>
   * 
   *   <dt>string `k_class`</dt>
   *   <dd>Class key.</dd>
   * 
   *   <dt>string `k_class_period`</dt>
   *   <dd>Class period key of the closest session of the event.</dd>
   * 
   *   <dt>string `k_enrollment_block`</dt>
   *   <dd>Key of enrollment block that corresponds to current row.</dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>Location key of the closest session of the event.</dd>
   * 
   *   <dt>string `m_price_max`</dt>
   *   <dd>Maximum price per session in the event.</dd>
   * 
   *   <dt>string `m_price_min`</dt>
   *   <dd>Minimum price per session in the event.</dd>
   * 
   *   <dt>string `m_price_total`</dt>
   *   <dd>Price of the entire event.</dd>
   * 
   *   <dt>string `m_price_total_early`</dt>
   *   <dd>Early bird price of the entire event.</dd>
   * 
   *   <dt>string `sid_reason`</dt>
   *   <dd>
   * Is used for testing purposes.
   *
   *   </dd>
   * 
   *   <dt>bool `text_age_restrict`</dt>
   *   <dd>Text message of the restriction based on age rules.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Title of the event.</dd>
   * 
   *   <dt>string|null `url_book`</dt>
   *   <dd>
   *     Link to the start of the booking wizard to book the closed session from this event or the entire event.
   * 
   * Can be `null` if there is no available for booking sessions.
   *   </dd>
   * 
   *   <dt>string `xml_description`</dt>
   *   <dd>Description of the event.</dd>
   * </dl>
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
   * @deprecated Use {@link EventListModel::$a_uid_staff} instead.
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
   * List of staff UIDs applied by filter.
   *
   * `null` if the filter by staff is not applied.
   *
   * Cannot be specified together with {@link EventListModel::$a_staff}.
   *
   * @get get
   * @var string[]|null
   */
  public $a_uid_staff = null;

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