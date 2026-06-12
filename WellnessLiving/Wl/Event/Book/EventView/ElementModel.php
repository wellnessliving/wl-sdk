<?php

namespace WellnessLiving\Wl\Event\Book\EventView;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Business\Config\BusinessConfigModel;
use WellnessLiving\Wl\Classes\RequirePaySid;
use WellnessLiving\Wl\Virtual\VirtualProviderSid;

/**
 * Retrieves information about an event element.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * Displays information about age restrictions for this event.
   *
   * An empty array if there are no age restrictions.
   *
   * @get result
   * @var array
   */
  public $a_age_restrictions = [];

  /**
   * Retrieves information about an event item.
   *
   * Received only if {@link ElementModel::$k_event} has been specified.
   * In this case, other fields aren't receivers.
   *
   * @get result
   * @var array[]
   */
  public $a_book_available;

  /**
   * Business policies connected to clients and bookings.
   *
   * Contains the same structure as {@link BusinessConfigModel::$a_business_policy}.
   *
   * If the event has custom overrides, those policies are used; otherwise, the default
   *  business policies are returned.
   *
   * @get result
   * @var array
   * @see BusinessConfigModel::$a_business_policy
   */
  public $a_business_policy;

  /**
   * The logo of event.
   *
   * @get result
   * @var array
   */
  public $a_class_logo;

  /**
   * The list of keys from class tab.
   *
   * @get result
   * @var string[]
   */
  public $a_class_tab;

  /**
   * Information for a large number of events.
   *
   * Received only if {@link ElementModel::$s_event} has been specified. In this case, other fields are not populated.
   *
   * Key is the event class key.
   *
   * @get result
   * @var array[]
   */
  public $a_event;

  /**
   * A list of installment plans. Each element has the following next keys:
   *
   * @get result
   * @var array[]
   */
  public $a_installment_template;

  /**
   * A list of event sessions. Every element has the following next keys:
   *
   * @get result
   * @var array[]
   */
  public $a_schedule;

  /**
   * IDs of online store category.
   *
   * @get result
   * @var string[]
   */
  public $a_shop_category;

  /**
   * Photos of staff members. Keys are the keys of staff members. The values are the following:
   *
   * @get result
   * @var array
   */
  public $a_staff_logo;

  /**
   * Timezone information for all timezones used in the event schedule.
   *
   * Key is the timezone key. Primary key in the `a_geo_timezone` table.
   * Value contains timezone information from the geo timezone registry: 
   *
   * @get result
   * @var array[]
   */
  public $a_timezone_info = [];

  /**
   * A list of classes and events that clients should attend before this one.
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
   * Datetime of the session.
   * Is not `null` only if we need to get information for an event with a specific class period and datetime.
   * If this is `null`, then the {@link ElementModel::$k_class_period} should be `null` too.
   *
   * @get get
   * @var string|null
   */
  public $dtu_session = null;

  /**
   * Whether event will be hidden in the White Label mobile application.
   * `true` means that event will not be displayed, `false` otherwise.
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
   * Class capacity.
   *
   * `null` if no set.
   *
   * @get result
   * @var int|null
   */
  public $i_capacity = null;

  /**
   * Image height in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified, the returned image will have the default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_image_height = 0;

  /**
   * Image width in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified, the returned image will have the default thumbnail size.
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
   * The remaining session count.
   *
   * @get result
   * @var int
   */
  public $i_session_remain;

  /**
   * Staff image height in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified, the returned image will have the default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_staff_image_height = 0;

  /**
   * Staff image width in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified, the returned image will have the default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_staff_image_width = 0;

  /**
   * The purchase rule ID.
   * One of the {@link RequirePaySid} constants.
   *
   * @get result
   * @var int
   */
  public $id_pay_require;

  /**
   * Default required value for {@link RequirePaySid::ADVANCE} payment mode,
   *  one of {@link RequirePaySid::ONLINE} or {@link RequirePaySid::VISIT}.
   *
   * `null` means default value not selected.
   *
   * @get result
   * @var int|null
   * @see RequirePaySid
   */
  public $id_pay_require_option;

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
   * `true` if the event availability was checked; `false` if the event has too many sessions, and calculating
   *  the availability of each one takes a lot of time.
   *
   * @get result
   * @var bool
   */
  public $is_availability_checked;

  /**
   * `true` if the event is already booked; `false` if the event isn't booked.
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
   * `true` if the selected session can be a make up session.
   * `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_makeup = false;

  /**
   * `true` if the selected session has already started and do not available to book.
   * `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_past = false;

  /**
   * `true` if the {@link ElementModel::$a_business_policy} contains the custom policies from the event.
   * `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_policy_custom = false;

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
   * `false` if clients, when they book event, have to pay for the entire event and the number of lefts in the future sessions
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
   * `true` if event is virtual; `false` otherwise.
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
   * Key of a business to which the requested event(s) belong.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Key of a class period to show information for.
   *
   * Is not `null` only if we need to get information for an event with a specific class period and datetime.
   * If this is `null`, then the {@link ElementModel::$dtu_session} should be `null` too.
   *
   * @get get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * The event key.
   * You can specify {@link ElementModel::$s_event} instead to get information for a large number of events.
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
   * Price of the full event should be used as full price while {@link ElementModel::$dt_early} is actual.
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
   * Specify instead of {@link ElementModel::$k_event} to get information for a large number of events.
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
   * `true` if special instructions can be public,
   * `false` if they should be shown only to the clients, who booked the class.
   *
   * @get result
   * @var bool
   */
  public $show_special_instructions = false;

  /**
   * `true` to show schedule, which is not published yet.
   * `false` to show only published schedule.
   *
   * @get get
   * @var bool
   */
  public $show_unpublished = false;

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