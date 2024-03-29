<?php

namespace WellnessLiving\Wl\Event\Book\EventView;

use WellnessLiving\Core\a\AGenderSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Business\Config\BusinessConfigModel;
use WellnessLiving\Wl\Virtual\VirtualProviderSid;

/**
 * An endpoint that retrieves information about an event element.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * Displays information about age restrictions for this event.
   *
   * An empty array if there are no age restrictions.
   *
   * <dl>
   *   <dt>int|null <var>i_age_from</var></dt>
   *   <dd>The minimum age for participation in the event. `null` if there's no minimum age set or information isn't available.</dd>
   *   <dt>int|null <var>i_age_to</var></dt>
   *   <dd>The age limit for participation in the event. `null` if there's no age limit set or information isn't available.</dd>
   *   <dt>bool <var>is_age_public</var></dt>
   *   <dd>`true` if age restrictions are public and available, `false` if they're hidden.
   *     When restrictions are hidden and the current user isn't a staff member, the age range will be empty.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_age_restrictions = [];

  /**
   * Retrieves information about an event item.
   *
   * Received only if {@link ElementModel::$k_event} has been specified. In this case other fields aren't receivers.
   *
   * <dl>
   *   <dt>string <var>dt_date</var></dt>
   *   <dd>Date/time when session starts. In UTC.</dd>
   *   <dt>string <var>k_class_period</var></dt>
   *   <dd>Class session primary keys.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_book_available;

  /**
   * Displays all business policies connected to clients and bookings.
   *
   * Contains the same structure as the {@link BusinessConfigModel::$a_business_policy} property.
   *
   * If policies are overwritten for a certain event, the impacted event's policies will be in this result.
   * Otherwise, the result will display the business policies.
   *
   * @get result
   * @var array
   */
  public $a_business_policy;

  /**
   * The logo of event.
   * <dl>
   *   <dt>int [<var>i_height</var>]</dt>
   *   <dd>Is returned only if staff has photo. Image height.</dd>
   *   <dt>int [<var>i_width</var>]</dt>
   *   <dd>Is returned only if staff has photo. Image width.</dd>
   *   <dt>int [<var>id_gender</var>] </dt>
   *   <dd>Is returned only if staff does not have photo. ID of staff gender. One of {@link AGenderSid} constants.</dd>
   *   <dt>string [<var>url_logo</var>]</dt>
   *   <dd>Is returned only if staff has photo. URL to image.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_class_logo;

  /**
   * The list of keys from class tab.+
   *
   * @get result
   * @var string[]
   */
  public $a_class_tab;

  /**
   * Displays information for a bulk of events.
   *
   * Received only if {@link ElementModel::$s_event} has been specified. In this case, other fields aren't receivers.
   *
   * The event keys of this array.
   * Values of this array and sub arrays with keys that correspond to all fields in this table that may be received.
   *
   * @get result
   * @var array
   */
  public $a_event;

  /**
   * A list of event sessions. Every element has the following next keys:
   * <dl>
   *   <dt>
   *     array <var>a_day</var>
   *   </dt>
   *   <dd>
   *     A list of days of the week when the session has occurred.
   *     Keys - a number corresponding to a day of the week (0 - Sunday, 6 - Saturday). The value is always <tt>true</tt>.
   *   </dd>
   *   <dt>array <var>a_repeat</var></dt>
   *   <dd>
   *     Repeat periodicity instructions.
   *     <dl>
   *       <dt>int <var>i_repeat</var></dt>
   *       <dd>Count of the periods which specified in <var>id_repeat</var>.</dd>
   *       <dt>int <var>id_repeat</var></dt>
   *       <dd>Measuring unit of <var>i_repeat</var> (week, month, year).</dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     array[] <var>a_staff</var>
   *   </dt>
   *   <dd>
   *     A list of staff members who conduct the session. Every element has the following next keys:
   *     <dl>
   *       <dt>string <var>k_staff</var></dt>
   *       <dd>The staff member key.</dd>
   *       <dt>string <var>s_name</var></dt>
   *       <dd>The staff member name.</dd>
   *       <dt>string <var>s_surname</var></dt>
   *       <dd>The first letter of staff member's surname.</dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string[] <var>a_virtual_location</var>
   *   </dt>
   *   <dd>
   *     List of virtual locations.
   *   </dd>
   *   <dt>
   *     string <var>dt_end</var>
   *   </dt>
   *   <dd>
   *     The end date of the session.
   *     The local date without time.
   *   </dd>
   *   <dt>
   *     string <var>dt_start</var>
   *   </dt>
   *   <dd>
   *     The start date of the session.
   *     The local date without time.
   *   </dd>
   *   <dt>
   *     int <var>i_capacity</var>
   *   </dt>
   *   <dd>
   *     The class capacity.
   *   </dd>
   *   <dt>
   *     int <var>i_duration</var>
   *   </dt>
   *   <dd>
   *     The duration of the class in seconds.
   *   </dd>
   *   <dt>
   *     bool <var>is_virtual</var>
   *   </dt>
   *   <dd>
   *     This will be `true` if the session is not held in person but offered remotely. If will be `false` otherwise.
   *   </dd>
   *   <dt>
   *     string <var>f_price</var>
   *   </dt>
   *   <dd>
   *     The price of the session, if it can be purchased separately.
   *   </dd>
   *   <dt>
   *     string <var>k_class_period</var>
   *   </dt>
   *   <dd>
   *     The key of the class period.
   *   </dd>
   *   <dt>
   *     string <var>k_location</var>
   *   </dt>
   *   <dd>
   *     The key of the location where the session is held.
   *   </dd>
   *   <dt>
   *     string <var>s_location</var>
   *   </dt>
   *   <dd>
   *     The location title.
   *   </dd>
   *   <dt>
   *     string <var>s_time</var>
   *   </dt>
   *   <dd>
   *     The time when session occurred.
   *     A textual representation of the start and end time of a session. Example: <tt>10:00 am - 11:00 am</tt>
   *   </dd>
   *   <dt>
   *     string <var>s_timezone</var>
   *   </dt>
   *   <dd>
   *     The name of the timezone in which the session is held.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_schedule;

  /**
   * Photos of staff members. Keys are the keys of staff members. The values are the following:
   * <dl>
   *   <dt>int <var>i_height</var></dt>
   *   <dd>Image height.</dd>
   *   <dt>int <var>i_width</var></dt>
   *   <dd>Image width.</dd>
   *   <dt>string <var>uid</var></dt>
   *   <dd>Key of the user.</dd>
   *   <dt>string <var>url_logo</var></dt>
   *   <dd>URL to image.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_staff_logo;

  /**
   * A list of classes and events that clients should attend before this one.
   *
   * <dl>
   *   <dt>int <var>i_count</var></dt>
   *   <dd>The number of visits.</dd>
   *   <dt>bool <var>is_event</var></dt>
   *   <dd>`true` if this is an event, `false` if this is a class.</dd>
   *   <dt>string <var>k_class</var></dt>
   *   <dd>The key of the class or event.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>The name of the class or event.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_visits_required;

  /**
   * The last available date for booking.
   * If this is set and {@link ElementModel::$dl_book_available_start} is a set list of
   *   sessions available for booking, {@link ElementModel::$a_book_available}
   *   should match given date range.
   *
   * @get get
   * @var string|null
   */
  public $dl_book_available_end = null;

  /**
   * The first available date for booking.
   * If this is set and {@link ElementModel::$dl_book_available_end} is a set list of
   *   sessions available for booking {@link ElementModel::$a_book_available}
   *   should match given date range.
   *
   * @get get
   * @var string|null
   */
  public $dl_book_available_start = null;

  /**
   * That date that should be used to go to the booking wizard.
   *
   * @get result
   * @var string|null
   */
  public $dt_book_date;

  /**
   * The early registration date of the event.
   *
   * @get result
   * @var string|null
   */
  public $dt_early;

  /**
   * The end date of the event.
   *
   * @get result
   * @var string
   */
  public $dt_end;

  /**
   * The start date of the event.
   *
   * @get result
   * @var string
   */
  public $dt_start;

  /**
   * Whether event will be hidden in the White Label mobile application.
   * <tt>true</tt> means that event will not be displayed, <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $hide_application;

  /**
   * The description of the event.
   *
   * @get result
   * @var string|null
   */
  public $html_description;

  /**
   * Special instruction for the event.
   *
   * @get result
   * @var string
   */
  public $html_special;

  /**
   * Image height in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_image_height = 0;

  /**
   * Image width in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_image_width = 0;

  /**
   * The session count.
   *
   * @get result
   * @var int
   */
  public $i_session;

  /**
   * Staff image height in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_staff_image_height = 0;

  /**
   * Staff image width in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_staff_image_width = 0;

  /**
   * The virtual provider ID. One of the {@link VirtualProviderSid} constants.
   *
   * `null` if an in-person event.
   *
   * @get result
   * @var int|null
   */
  public $id_virtual_provider;

  /**
   * Whether the event is age restricted.
   * `true` if the event is age restricted, `false` if the event is not.
   *
   * @get result
   * @var bool
   */
  public $is_age_restrict = false;

  /**
   * `true` if the event availability was checked; `false` if the event has too many sessions and calculating
   *  the availability of each one takes a lot of time.
   *
   * @get result
   * @var bool
   */
  public $is_availability_checked;

  /**
   * <tt>true</tt> if the event is already booked; <tt>false</tt> if the event isn't booked.
   *
   * @get result
   * @var bool
   */
  public $is_book;

  /**
   * `true` If the event is bookable; `false` if the event isn't bookable.
   *
   * @get result
   * @var bool
   */
  public $is_bookable;

  /**
   * `true` if there are no free spots in the event; booking is available only into the wait list.
   * `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_full;

  /**
   * `true` if the event can be paid with a Purchase Option only.
   * `false` if full event purchases or single session purchases are permitted.
   *
   * @get result
   * @var bool
   */
  public $is_promotion_only;

  /**
   * `true` if clients, when they book event, which has been started, can pay only for the sessions in the future.
   * `false` if clients, when they book event, has to pay for the entire event and number of left in the future sessions
   * does not matter.
   *
   * @get result
   * @var bool
   */
  public $is_prorate;

  /**
   * `true` if schedule should be grouped by location time and staff,
   * `false` if all schedule elements should be independent.
   *
   * @get get
   * @var bool
   */
  public $is_schedule_group = false;

  /**
   * Determines whether this event allows paying for a single session.
   *
   * @get result
   * @var bool
   */
  public $is_single_session_buy;

  /**
   * <tt>true</tt> -if event is virtual; <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_virtual;

  /**
   * The ID of the session which should be used to go to the booking wizard.
   *
   * @get result
   * @var string
   */
  public $k_book_class_period;

  /**
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The event key.
   * You can specify {@link ElementModel::$s_event} instead to get information for a bulk of events.
   *
   * @get get
   * @var string
   */
  public $k_event = '0';

  /**
   * The price of a single session of the event.
   *
   * @get result
   * @var string
   */
  public $m_price;

  /**
   * The price of the all sessions of the event.
   *
   * @get result
   * @var string
   */
  public $m_price_total;

  /**
   * Price of the full event, should be used as full price while {@link ElementModel::$dt_early} is actual.
   *
   * @get result
   * @var string|null
   */
  public $m_price_total_early;

  /**
   * The reason why the event can't be booked.
   * Empty if {@link ElementModel::$k_book_class_period} isn't empty.
   *
   * @get result
   * @var string
   */
  public $s_deny_reason;

  /**
   * A list of event keys serialized with JSON.
   * Specify instead of {@link ElementModel::$k_event} to get information for a bulk of events.
   *
   * @get get
   * @var string
   */
  public $s_event = '';

  /**
   * The title of the event.
   *
   * @get result
   * @var string|null
   */
  public $s_title;

  /**
   * End date of the event in user-friendly format.
   *
   * @get result
   * @var string
   */
  public $text_end;

  /**
   * Start date of the event in user-friendly format.
   *
   * @get result
   * @var string
   */
  public $text_start;

  /**
   * The user key.
   *
   * @get get
   * @var string
   */
  public $uid = '0';

  /**
   * Link to the start of the booking wizard to book the closed session from this event or the entire event.
   *
   * Can be `null` if there is no available for booking sessions.
   *
   * @get result
   * @var string|null
   */
  public $url_book = null;

  /**
   * The description of the event.
   *
   * @get result
   * @var string|null
   */
  public $xml_description;
}

?>