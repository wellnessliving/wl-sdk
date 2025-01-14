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
   * List of available enrollment blocks correspond to requested parameters.
   *
   * @get result
   * @var array
   */
  public $a_enrollment_block_list = [];

  /**
   * A list of events corresponding to requested parameters. Each event will have the following keys: <dl>
   *   <dt>array <var>a_class_tab</var></dt>
   *   <dd>The list of class tab keys that contain this event.</dd>
   *   <dt>array <var>a_logo</var></dt>
   *   <dd>Information about the event's logo. It will contain the following keys:
   *   <dl>
   *     <dt>int <var>i_height</var></dt>
   *     <dd>The image height.</dd>
   *     <dt>int <var>i_height_src</var></dt>
   *     <dd>The source image's height.</dd>
   *     <dt>int <var>i_rotate</var></dt>
   *     <dd>The angle which image was rotated compared to the original.</dd>
   *     <dt>int <var>i_width</var></dt>
   *     <dd>The image width.</dd>
   *     <dt>int <var>i_width_src</var></dt>
   *     <dd>The source image's width.</dd>
   *     <dt>int <var>id_type_src</var></dt>
   *     <dd>The image type ID. One of the {@link DriveTypeSid} constants.</dd>
   *     <dt>bool <var>is_resize</var></dt>
   *     <dd>This will be `true` if the image has been resized. `false` otherwise.</dd>
   *     <dt>bool <var>is_old</var></dt>
   *     <dd>This will be `true` if the image is old. `false` otherwise.</dd>
   *     <dt>string <var>s_url</var></dt>
   *     <dd>The URL to the image.</dd>
   *     <dt>string <var>url-view</var></dt>
   *     <dd>The URL to the image.</dd>
   *     <dt>string <var>url-thumbnail</var></dt>
   *     <dd>The URL to the image's thumbnail.</dd>
   *   </dl>
   *   </dd>
   *   <dt>array <var>a_schedule</var></dt>
   *   <dd>Information about the event's schedule. It is a list of instances, each instance will contain the following keys:
   *   <dl>
   *     <dt>array <var>a_day</var></dt>
   *     <dd>The days when the event is scheduled (0 - Sunday, 6 - Saturday).</dd>
   *     <dt>array <var>a_staff_member</var></dt>
   *     <dd>Information about the staff member(s) conducting the event. This is a list of staff, each element is an array
   *     with the following keys
   *       <dl>
   *         <dt>string <var>k_staff_member</var></dt>
   *         <dd>The staff member key.</dd>
   *         <dt>string <var>text_business_role</var></dt>
   *         <dd>The name of the staff member's business role.</dd>
   *         <dt>string <var>text_mail</var></dt>
   *         <dd>The staff member's email address.</dd>
   *         <dt>string <var>text_name_first</var></dt>
   *         <dd>The staff member's first name.</dd>
   *         <dt>string <var>text_name_full</var></dt>
   *         <dd>The staff member's full name.</dd>
   *         <dt>string <var>text_name_last</var></dt>
   *         <dd>The staff member's last name.</dd>
   *         <dt>string <var>uid</var></dt>
   *         <dd>The staff member's user key.</dd>
   *       </dl>
   *     </dd>
   *     <dt>string <var>dl_end</var></dt>
   *     <dd>The ending date of the event series.</dd>
   *     <dt>string <var>dl_start</var></dt>
   *     <dd>The starting date of the event series.</dd>
   *     <dt>bool <var>is_day</var></dt>
   *     <dd>This will be `true` if the event starts and ends on the same day.</dd>
   *     <dt>string <var>k_class_period</var></dt>
   *     <dd>The class period key.</dd>
   *     <dt>string <var>k_location</var></dt>
   *     <dd>The location key.</dd>
   *     <dt>string <var>text_location</var></dt>
   *     <dd>The name of the location.</dd>
   *     <dt>string <var>text_time</var></dt>
   *     <dd>The human readable version of the event time.</dd>
   *   </dl>
   *   </dd>
   *   <dt>array <var>a_search_tag</var></dt>
   *   <dd>The list of search tags for this event.</dd>
   *   <dt>bool <var>can_cancel</var></dt>
   *   <dd>Whether the current user can cancel already booked event.</dd>
   *   <dt>string <var>dl_early</var></dt>
   *   <dd>The early cancel date</dd>
   *   <dt>string <var>dl_end</var></dt>
   *   <dd>The ending date of the event.</dd>
   *   <dt>string <var>dl_start</var></dt>
   *   <dd>The starting date of the event.</dd>
   *   <dt>string <var>dtu_session</var></dt>
   *   <dd>Date of the closest session of the event.</dd>
   *   <dt>int <var>i_session_all</var></dt>
   *   <dd>Number of all sessions in the event.</dd>
   *   <dt>int <var>i_session_future</var></dt>
   *   <dd>Number of all sessions in the future.</dd>
   *   <dt>int <var>i_session_past</var></dt>
   *   <dd>Number of all sessions in the past.</dd>
   *   <dt>bool <var>is_age_restrict</var></dt>
   *   <dd>`true` if the event is age restricted, `false` if the event is not.</dd>
   *   <dt>bool <var>is_block</var></dt>
   *   <dd>`true` if the event is a block event, `false` if the event is not.</dd>
   *   <dt>bool <var>is_bookable</var></dt>
   *   <dd>`true` if the event is can be booked by the current user, `false` if the event is not.</dd>
   *   <dt>bool <var>is_booked</var></dt>
   *   <dd>`true` if the user has booked the event, `false` if the event is not.</dd>
   *   <dt>bool <var>is_closed</var></dt>
   *   <dd>`true` if booking the event is closed, `false` if the event is not.</dd>
   *   <dt>bool <var>is_full</var></dt>
   *   <dd>`true` if the event is full, `false` if the event is not.</dd>
   *   <dt>bool <var>is_online</var></dt>
   *   <dd>`true` if the event is available online, `false` if the event is not.</dd>
   *   <dt>bool <var>is_online_private</var></dt>
   *   <dd>`true` if the event is online and private, `false` if the event is not.</dd>
   *   <dt>bool <var>is_open</var></dt>
   *   <dd>`true` if the event is open to be booked, `false` if the event is not.</dd>
   *   <dt>bool <var>is_prorate</var></dt>
   *   <dd>`true` if the event is prorated, `false` if the event is not.</dd>
   *   <dt>bool <var>is_virtual</var></dt>
   *   <dd>`true` if the event is only held virtually, `false` if the event is not.</dd>
   *   <dt>string <var>k_class</var></dt>
   *   <dd>The class key.</dd>
   *   <dt>string <var>k_class_period</var></dt>
   *   <dd>The class period key.</dd>
   *   <dt>string <var>k_enrollment_block</var></dt>
   *   <dd>The enrollment block key.</dd>
   *   <dt>string <var>k_location</var></dt>
   *   <dd>The location key.</dd>
   *   <dt>string <var>m_price_total</var></dt>
   *   <dd>The total price of booking a session.</dd>
   *   <dt>string <var>m_price_total_early</var></dt>
   *   <dd>The total price if booked early.</dd>
   *   <dt>string <var>text_age_restrict</var></dt>
   *   <dd>The age description.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>The name of the event.</dd>
   *   <dt>string <var>url_book</var></dt>
   *   <dd>The direct booking url.</dd>
   *   <dt>string <var>xml_description</var></dt>
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
   * @var string
   */
  public $dl_end;

  /**
   * The start date of the range from which a list of events should be retrieved.
   *
   * <tt>null</tt> if the range has no start date.
   *
   * @get get
   * @var string
   */
  public $dl_start;

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
  public $is_backend;

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
   * Required if {@link EventListModel::$k_location} isn't specified.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * The event class key to retrieve a list of all event sessions of a specific class.
   *
   * @get get
   * @var string
   */
  public $k_class;

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
  public $k_class_tab;

  /**
   * The event location key to retrieve a list of all event sessions in a specific location.
   *
   * Required if {@link EventListModel::$k_business} isn't specified.
   *
   * @get get
   * @var string
   */
  public $k_location;

  /**
   * The skin key if an event list is used for widget mode.
   *
   * {@link EventListModel::$k_class_tab} will be ignored for widget mode.
   *
   * @get get
   * @var string
   */
  public $k_skin;

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
   * @var string
   */
  public $uid;
}

?>