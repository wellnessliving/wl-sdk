<?php

namespace WellnessLiving\Wl\Book\Process\Store;

use WellnessLiving\WlModelAbstract;

/**
 * Manages the "Purchase Options" page of the booking wizard.
 */
class StoreModel extends WlModelAbstract
{
  /**
   * The keys for the user's activities. This will be populated upon completion of the booking process.
   *
   * @post result
   * @var string[]
   */
  public $a_login_activity;

  /**
   * The selected purchase item.
   *
   * This new purchase item should be checked to determine if it can be applied to the current class or event before
   * being purchased.
   *
   * @post post
   * @var array
   */
  public $a_purchase_item_check = [];

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
   * A list of assets being booked. Each element has the following keys:
   *
   * @post post
   * @var array[]
   */
  public $a_resource = [];

  /**
   * The selected sessions for an event.
   *
   * Keys are class period keys, values are indexed arrays of dates and times when the session occurred
   *  (in MySQL format, UTC).
   *
   * @post post
   * @var string[][]
   */
  public $a_session_select = [];

  /**
   * The selected sessions for an event that are on the wait list and unpaid.
   *
   * Keys are class period keys, values are indexed arrays of dates and times when the session occurred
   *  (in MySQL format, UTC).
   *
   * @post post
   * @var string[][]
   */
  public $a_session_wait_list_unpaid = [];

  /**
   * The keys of the bookings that have been made.
   *
   * @post result
   * @var string[]
   */
  public $a_visit;

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
   * If `true`, the next steps of the booking wizard are required to purchase an item or book the selected session.
   *
   * If `false`, no further steps in the booking wizard are required.
   *
   * @post result
   * @var bool
   */
  public $is_next;

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