<?php

namespace WellnessLiving\Wl\Book\Process\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * Displays information about Purchase Options that can book specified session(s).
 *
 * Note that the terms "Purchase Option" and "promotion" represent the same thing (promotion was the previous term
 * used in WellnessLiving). Both these terms have been used for various variable names.
 *
 * @deprecated Use {@link Purchase56Model} instead.
 */
class PurchaseModel extends WlModelAbstract
{
  /**
   * Data about the login prize which can be used to pay for service.
   *
   * @get result
   * @var array
   */
  public $a_login_prize = [];

  /**
   * A list of the client's login promotions that can be applied to a given service.
   * Each element has the following fields:
   *
   * @get result
   * @var array[]
   */
  public $a_login_promotion = [];

  /**
   * A list of existing purchase options that were selected for previous clients (group).
   *
   * Note:
   * * It makes sense if for all clients the list is loaded within
   *      the same pair {@link PurchaseModel::$dt_date_gmt} and {@link PurchaseModel::$k_class_period}.
   * * If promotions are shared, the system will try to determine if there are enough sessions left for the next
   *      client who has the same promotion.
   * * A very simple check is carried out based on a comparison of the remaining sessions for the promotion
   *      with the number of times it was selected.
   * * Can affect the list of available login promotions {@link PurchaseModel::$a_login_promotion}.
   *      If a given client is eligible for such a promotion, but the remaining sessions (minus those previously
   *      selected) in it do not allow it to be applied to the selected session, then such promotion will simply
   *      not be returned for the client.
   * * The order of clients across all APIs must be the same to guarantee their results.
   *
   * Each element has the following structure:
   *
   * @get get
   * @var array[]
   */
  public $a_login_promotion_group = [];

  /**
   * A list of Purchase Options that are available for the session(s) being booked. Keys refer to unique string IDs,
   * and values refer arrays with the next fields: 
   *
   * @get result
   * @var array[]
   */
  public $a_purchase = [];

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
   * List of redeemable prizes which can be used to pay for service.
   * Each element has the following fields:
   *
   * @get result
   * @var array[]
   */
  public $a_reward_prize = [];

  /**
   * The list of sessions being booked.
   *
   * Keys are class period keys.  Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
   *
   * @get get
   * @var string[]
   */
  public $a_session = [];

  /**
   * The list of session passes that might be used in booking process.
   * Each element has the following fields:
   *
   * @get result
   * @var array[]
   */
  public $a_session_pass = [];

  /**
   * The selected sessions on the wait list that are unpaid.
   *
   * Keys are class period keys.  Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
   *
   * @get get
   * @var string[]
   */
  public $a_session_wait_list_unpaid = [];

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
   * The image height in pixels. Specify this value if you need image to be returned in specific size.
   * The returned image will have the default thumbnail size if this value isn't specified.
   *
   * @get get
   * @var int
   */
  public $i_image_height = 0;

  /**
   * The image width in pixels. Specify this value if you need image to be returned in specific size.
   * The returned image will have the default thumbnail size if this value isn't specified.
   *
   * @get get
   * @var int
   */
  public $i_image_width = 0;

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
   * Determines if the client must authorize the credit card.
   *
   * @get get
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
   * Indicates if the drop-in rate should be the default promotion.
   *
   * @get result
   * @var bool
   */
  public $is_single_default = false;

  /**
   * The business key.
   *
   * `null` if business key was not passed.
    *
    * @get get
    * @var string|null
    *
    */
  public $k_business = null;

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
   * The default Purchase Option key.
   * This will be empty if the class has no default Purchase Option.
   *
   * @get result
   * @var string
   */
  public $k_promotion_default = '';

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