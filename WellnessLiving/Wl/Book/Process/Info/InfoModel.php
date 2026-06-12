<?php

namespace WellnessLiving\Wl\Book\Process\Info;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Offers functionality for the class booking wizard on the "Class and Location" page.
 *
 * @deprecated Use {@link Info54Model} instead.
 */
class InfoModel extends WlModelAbstract
{
  /**
   * Week days available for recurring booking. Constants of {@link ADateWeekSid} class.
   *
   * `null` if recurring booking is not available.
   *
   * @get result
   * @var int[]|null
   */
  public $a_day_available;

  /**
   * The keys of users' activity.
   *
   * @post result
   * @var string[]
   */
  public $a_login_activity;

  /**
   * Information about the recurring booking:
   *
   * This will be `null` if the booking isn't recurring.
   *
   * @post post
   * @var array|null
   */
  public $a_repeat = null;

  /**
   * A list of assets being booked. Every element has the next structure:
   *
   * @post post
   * @var array[]
   */
  public $a_resource = [];

  /**
   * A list of all class sessions that can be booked together. Every element has the next structure:
   *
   * @get result
   * @var array[]
   */
  public $a_session_all;

  /**
   * List of sessions that can be paid without new purchases.
   * Such as previously prepaid or free sessions.
   *
   * Each its item has the key of following format: 
   *
   * @get result
   * @var array[]
   */
  public $a_session_free;

  /**
   * The selected sessions.
   *
   * Keys are class period keys.  Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
   *
   * @post post
   * @var string[]
   */
  public $a_session_select = [];

  /**
   * Selected sessions on the waiting list without pay.
   *
   * Keys are class period keys.  Values are index arrays of dates/time strings when the session occurred, in MySQL format and in GMT.
   *
   * @post post
   * @var string[]
   */
  public $a_session_wait_list_unpaid = [];

  /**
   * The staff member conducting the session. Every element has the next structure:
   *
   * @get result
   * @var array[]
   */
  public $a_staff;

  /**
   * The keys of the bookings made.
   *
   * @post result
   * @var string[]
   */
  public $a_visit;

  /**
   * Values are arrays with next keys:
   *
   * @post result
   * @var array[]
   */
  public $a_visit_payment;

  /**
   * Determines whether the class/event can be booked at this step or not.
   * This is an external process control flag.
   *
   * @post post
   * @var bool
   */
  public $can_book = true;

  /**
   * Date when this class session occurrences stop.
   *
   * @get result
   * @var string
   */
  public $dl_end;

  /**
   * Date/time to which session is booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dt_date_gmt = '';

  /**
   * The date/time of the session the user is booking in MySQL format in the location's timezone.
   *
   * @get result
   * @var string
   */
  public $dt_date_local;

  /**
   * `true` if price for the individual session should be hidden, if client has applicable pricing option to pay for this
   * booking.
   * `false` if price should be shown always.
   *
   * @get result
   * @var bool
   */
  public $hide_price;

  /**
   * The text of the contract to which the user must agree before book this session.
   * Not empty if business has contract and if user did not agree to this contract.
   *
   * @get result
   * @var string
   */
  public $html_contract;

  /**
   * Class duration in human-readable format.
   *
   * @get result
   * @var string
   */
  public $html_duration;

  /**
   * The special instructions for the class.
   *
   * @get result
   * @var string
   */
  public $html_special;

  /**
   * Special instructions preview for class.
   *
   * @get result
   * @var string
   */
  public $html_special_preview;

  /**
   * Number of available spots.
   *
   * `null` if this information is not available.
   *
   * @get result
   * @var int|null
   */
  public $i_available = null;

  /**
   * Number of booked spots.
   *
   * `null` if this information is not available.
   *
   * @get result
   * @var int|null
   */
  public $i_book = null;

  /**
   * The duration of the session in minutes.
   *
   * @get result
   * @var int
   */
  public $i_duration;

  /**
   * Total number of clients on the wait list.
   *
   * @get result
   * @var int
   */
  public $i_wait;

  /**
   * Total capacity the wait list.
   * `null` if wail list in unlimited.
   * `0` if wait list is disabled.
   *
   * @get result
   * @var int|null
   */
  public $i_wait_limit;

  /**
   * Estimated place of reservation on the waiting list.
   *
   * @get result
   * @var int
   */
  public $i_wait_spot = 0;

  /**
   * The mode type. One of the {@link ModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * Determines if the user has agreed to the liability release.
   * `true` - if  the user has agreed. Otherwise, this will be.
   * `false` - if the user hasn't agreed or the agreement isn't required.
   *
   * @post post
   * @var bool
   */
  public $is_agree = false;

  /**
   * `true` if action is performed as a staff member; `false` otherwise.
   *
   * If `true` is sent, access to the business and to the client will be checked.
   * If `false` is sent, user can book only for himself or for relatives if this is allowed in business settings.
   *
   * @get get
   * @post get
   *
   * @var bool
   */
  public $is_backend = false;

  /**
   * `true` if recurring booking is available, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_book_repeat_client;

  /**
   * `true` if the setting for frequency during class recurring booking will be `never end` by default, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_book_repeat_no_end_date;

  /**
   * `true` to book unpaid.
   * `false` otherwise.
   *
   * Allows booking unpaid when client has a login promotion that can be used to pay for the service.
   * Allowed in {@link ModeSid::WIDGET} mode only.
   *
   * @post post
   * @var bool
   */
  public $is_book_unpaid = false;

  /**
   * If client must authorize credit card.
   *
   * @post result
   * @var bool
   */
  public $is_card_authorize = false;

  /**
   * Checking whether the client has a credit card (if configured in the business) will be skipped if this flag is set to `false`.
   *
   * Use this field with caution.
   * The final booking will not use this flag, and the check will still be performed.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_credit_card_check = true;

  /**
   * Can client chooses several session per booking.
   *
   * @get result
   * @var bool
   */
  public $is_event_session = false;

  /**
   * Can the class/event be booked immediately or not.
   *
   * The verification is based on the search for client's promotions and other features of the class/event.
   * But it does not take into account the presence of other mandatory steps.
   * Their presence will be indicated by the {@link InfoModel::$is_next} flag.
   *
   * @post result
   * @var bool
   */
  public $is_force_book = false;

  /**
   * `true` if user pressed 'Pay later'.
   * `false` if user pressed 'Pay now'.
   *
   * @post post
   * @var bool
   */
  public $is_force_pay_later = false;

  /**
   * `true` if need to display location phone number, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_location_phone = false;

  /**
   * `true` - next steps of the wizard are needed (for example, to purchase something to book the selected session).
   * `false` - no need for next steps (all that's needed has already been purchased).
   *
   * @post result
   * @var bool
   */
  public $is_next;

  /**
   * `true` if event can be paid with pricing option only.
   * `false` if full event purchase or single session purchase are allowed.
   *
   * @get result
   * @var bool
   */
  public $is_promotion_only;

  /**
   * Whether the class can be paid with single session.
   *
   * @get result
   * @var bool
   */
  public $is_single_buy;

  /**
   * Whether the full text of the special instructions fits within the preview length or not.
   *
   * @get result
   * @var bool
   *
   * @see InfoModel::$html_special
   * @see InfoModel::$html_special_preview
   */
  public $is_special_preview = false;

  /**
   * `true` if class is virtual, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_virtual;

  /**
   * Key of session which is booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * Class period location key.
   *
   * @get result
   * @var string
   */
  public $k_location;

  /**
   * Login promotion to be used to book a class.
   *
   * @post post
   * @var string
   */
  public $k_login_promotion = '';

  /**
   * Session pass to be used to book a class.
   *
   * @post post
   * @var string
   */
  public $k_session_pass = '';

  /**
   * Price of the session.
   *
   * @get result
   * @var string
   */
  public $m_price;

  /**
   * Whole event cost.
   *
   * @get result
   * @var string
   */
  public $m_price_total;

  /**
   * Event price at an early discount.
   *
   * An empty string if there is no discount.
   *
   * @get result
   * @var string
   */
  public $m_price_total_early;

  /**
   * The class title.
   *
   * @get result
   * @var string
   */
  public $s_class;

  /**
   * The location address.
   *
   * @get result
   * @var string
   */
  public $s_location_address;

  /**
   * The location title.
   *
   * @get result
   * @var string
   */
  public $s_location_title;

  /**
   * User signature.
   *
   * @post post
   * @var string
   */
  public $s_signature = '';

  /**
   * The time when the session takes place in the location's time zone. In format `hh:mm`.
   *
   * @get result
   * @var string
   */
  public $s_time;

  /**
   * `true` if class capacity should be shown,
   * `false` to use business setting. 
   * @get get
   * @var bool
   */
  public $show_class_capacity = false;

  /**
   * `true` to show "book for" option in booking wizard. `false` for default behavior.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $show_relation = false;

  /**
   * Location phone number.
   *
   * @get result
   * @var string
   */
  public $text_location_phone = '';

  /**
   * Room where session takes place.
   *
   * @get result
   * @var string
   */
  public $text_room;

  /**
   * Text representation of the list of staffs.
   * List of staff see {@link InfoModel::$a_staff}.
   *
   * @get result
   * @var string
   */
  public $text_staff;

  /**
   * Timezone abbreviation.
   *
   * @get result
   * @var string
   */
  public $text_timezone;

  /**
   * The client key for which the booking is being made.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>