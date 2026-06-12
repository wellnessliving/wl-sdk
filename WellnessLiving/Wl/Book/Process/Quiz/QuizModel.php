<?php

namespace WellnessLiving\Wl\Book\Process\Quiz;

use WellnessLiving\WlModelAbstract;

/**
 * Manages quizzes and a selected Purchase Option for a class or event during the booking process.
 *
 * Note that the terms "Purchase Option" and "promotion" are used interchangeably.
 */
class QuizModel extends WlModelAbstract
{
  /**
   * The user's activity keys.
   *
   * @post result
   * @var string[]
   */
  public $a_login_activity = [];

  /**
   * The list of purchase items. Each element has the format <tt>[id_purchase_item]::[k_id]</tt>, where: 
   *
   * This will be empty if no purchases are made for the booking.
   *
   * @get get
   * @var string[]
   */
  public $a_purchase_item = [];

  /**
   * The list of quizzes. Each element has the next structure:
   *
   * @get result
   * @var array[]
   */
  public $a_quiz = [];

  /**
   * The list of quiz response keys.
   *
   * Keys are quiz keys.  Values are response keys.
   *
   * @post post
   * @var string[]
   */
  public $a_quiz_response = [];

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
   * The selected assets.
   *
   * Every element has the next keys:
   *
   * @post post
   * @var array[]
   */
  public $a_resource = [];

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
   * The selected sessions on the wait list that are unpaid.
   *
   * Keys are class period keys.  Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
   *
   * @post post
   * @var string[]
   */
  public $a_session_wait_list_unpaid = [];

  /**
   * The keys the bookings that have been made.
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
   * If `true`, the next steps of the booking wizard are required for the purchase or booking. Otherwise, this will be `false`.
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