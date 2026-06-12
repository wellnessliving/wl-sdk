<?php

namespace WellnessLiving\Wl\Book\Process\Resource;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Book\Process\ProcessSpaSid;

/**
 * Selects assets when making a booking.
 *
 * Take note of the {@link ProcessSpaSid::QUIZ} step.
 */
class Resource54Model extends WlModelAbstract
{
  /**
   * The keys of a user's activity.
   * This won't be empty only if the session(s) was booked at this step.
   *
   * @post result
   * @var string[]
   */
  public $a_login_activity = [];

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
   * A list of asset categories which are available for specified session. Every element has next keys:
   *
   * @get result
   * @var array[]
   */
  public $a_resource_all = [];

  /**
   * The selected assets. Every element has the next keys:
   *
   * @post post
   * @var array
   */
  public $a_resource_select = [];

  /**
   * The selected sessions.
   * Only makes sense for session events.
   * Optional parameter for GET request: if not passed, all available sessions will be used.
   *
   * Keys are class period keys.  Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_session = [];

  /**
   * The selected sessions on the wait list that are unpaid.
   *
   * Keys are class period keys.  Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
   *
   * @post post
   * @var string[]
   */
  public $a_session_wait_list_unpaid = [];

  /**
   * The keys of the bookings that have been made.
   * Not empty only if session(s) was booked on this step.
   *
   * @post result
   * @var string[]
   */
  public $a_visit = [];

  /**
   * Determines whether the class/event can be booked at this step or not.
   * This is an external process control flag.
   *
   * @post post
   * @var bool
   */
  public $can_book = true;

  /**
   * Date/time to which session is booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dt_date_gmt = '';

  /**
   * The mode type.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

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
   * `true` to book unpaid.
   * `false` otherwise.
   *
   * Allows booking unpaid when client has a login promotion that can be used to pay for the service.
   *
   * @post post
   * @var bool
   */
  public $is_book_unpaid = false;

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
   * `true` if user pressed 'Pay later'.
   * `false` if user pressed 'Pay now'.
   *
   * @post post
   * @var bool
   */
  public $is_force_pay_later = false;

  /**
   * `true` - the next steps of the booking wizard are required (for example, to purchase something to book the selected session).
   * `false` - no further booking steps are required.
   *
   * @post result
   * @var bool
   */
  public $is_next = false;

  /**
   * Selected sessions.
   * Only makes sense for session events.
   * Optional parameter for GET request: if not passed, all available sessions will be used.
   *
   * Fields - IDs of sessions in database.
   * Values - arrays of date/time when session is occurred. In MySQL format. In GMT.
   *
   * Serialized with JSON.
   *
   * @get get
   * @post get
   * @var string
   */
  public $json_session = '';

  /**
   * Key of session which is booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '0';

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
   * `true` to show "book for" option in booking wizard. `false` for default behavior.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $show_relation = false;

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