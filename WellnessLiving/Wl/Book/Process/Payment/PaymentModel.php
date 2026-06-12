<?php

namespace WellnessLiving\Wl\Book\Process\Payment;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Business\BusinessPaymentCaptcha;

/**
 * Acts as the booking wizard for the "Pay/Billing info" page.
 *
 * This endpoint using captcha check.
 * To pass captcha need study the documentation by captcha API, there you will find that you need to send a captcha for a specific action.
 * For this API an action is {@link BusinessPaymentCaptcha::CID}.
 */
class PaymentModel extends WlModelAbstract
{
  /**
   * A list of items to be bought. Every element has the next keys: 
   *
   * @post post
   * @var array[]
   */
  public $a_item = [];

  /**
   * Keys of the user's activity which correspond to bookings made.
   * Not empty when the booking process is finished.
   *
   * @post result
   * @var string[]
   */
  public $a_login_activity_book;

  /**
   * A list of payment sources to pay with.
   *
   * Each element has next keys:
   *
   * @post post
   * @var array[]
   */
  public $a_pay_form = [];

  /**
   * List of quiz response keys.
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
   * A list of assets being booked. Every element has the next keys:
   *
   * @post post
   * @var array
   */
  public $a_resource = [];

  /**
   * A list of sessions being booked.
   *
   * Keys are class period keys.  Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
   *
   * @post post
   * @var string[]
   */
  public $a_session = [];

  /**
   * Selected sessions on the waiting list without pay.
   *
   * Keys are class period keys.  Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT
   *
   * @post post
   * @var string[]
   */
  public $a_session_wait_list_unpaid = [];

  /**
   * The keys of bookings made.
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
   * If client must authorize credit card.
   *
   * @post post
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
   * `true` if user pressed 'Pay later'.
   * `false` if user pressed 'Pay now'.
   *
   * @post post
   * @var bool
   */
  public $is_force_pay_later = false;

  /**
   * Key of session which is booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * The keys of the user's activity corresponding to the purchase made. This won't be empty when the booking process is finished.
   *
   * @post result
   * @var string
   */
  public $k_login_activity_purchase;

  /**
   * Login promotion to be used to book a class.
   *
   * @post post
   * @var string
   */
  public $k_login_promotion = '';

  /**
   * The installment template key.
   * This property is optional, and it will be `null` if an installment plan doesn't exist for the purchased item.
   * This will be `0` if an installment plan isn't selected for the purchased item from the list of installment plans.
   *
   * @post post
   * @var string|null
   */
  public $k_pay_installment_template;

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
   * The discount code to be applied to the purchase.
   *
   * @post post
   * @var string
   */
  public $text_discount_code = '';

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