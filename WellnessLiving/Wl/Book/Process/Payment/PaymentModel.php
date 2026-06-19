<?php

namespace WellnessLiving\Wl\Book\Process\Payment;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Business\BusinessPaymentCaptcha;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

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
   * <dl>
   *   <dt>int `id_purchase_item`</dt>
   *   <dd>The ID of purchase item type. One of {@link WlPurchaseItemSid} constants.</dd>
   * 
   *   <dt>bool `is_renew`</dt>
   *   <dd>
   *     `true` if the item should be set to auto-renew; `false` otherwise. If not set yet, use the default option for this item.
   *   </dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>The key of the purchase item in the database.</dd>
   * 
   *   <dt>string `k_login_prize`</dt>
   *   <dd>
   *     Key of user's prize. `0` only if user is paying book by prize.
   *   </dd>
   * 
   *   <dt>string `k_reward_prize`</dt>
   *   <dd>
   *     Key of reward prize. `0` only if user wants to redeem prize and use it to pay for visit.
   *   </dd>
   * 
   *   <dt>string `s_signature`</dt>
   *   <dd>
   *     The signature of the Purchase Option contract. This won't be set if the Purchase Option doesn't require a contract assignment.
   *   </dd>
   * </dl>
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
   * <dl>
   *   <dt>array `a_pay_card`</dt>
   *   <dd>
   *     The payment card information:
   *     <dl>
   *       <dt>array `a_pay_address`</dt>
   *       <dd>
   *         The payment address:
   *         <dl>
   *           <dt>bool `is_new`</dt>
   *           <dd>
   *             Set this value to <tt>1</tt> to add a new payment address or to <tt>0</tt> to use a saved payment address.
   *           </dd>
   * 
   *           <dt>string `k_geo_country`</dt>
   *           <dd>The key of the country used for the payment address. Specify this to add a new address.</dd>
   * 
   *           <dt>string `k_geo_region`</dt>
   *           <dd>The key of the region for the payment address. Specify this to add a new address.</dd>
   * 
   *           <dt>string `k_pay_address`</dt>
   *           <dd>The key of the saved payment address. Specify this to use a saved address.</dd>
   * 
   *           <dt>string `s_city`</dt>
   *           <dd>The city used for the payment address. Specify this to add a new address.</dd>
   * 
   *           <dt>string `s_name`</dt>
   *           <dd>The card name. Specify this to add a new address.</dd>
   * 
   *           <dt>string `s_phone`</dt>
   *           <dd>The payment phone. Specify this to add a new address.</dd>
   * 
   *           <dt>string `s_postal`</dt>
   *           <dd>The postal code for the payment address. Specify this to add a new address.</dd>
   * 
   *           <dt>string `s_street1`</dt>
   *           <dd>The payment address. Specify this to add a new address.</dd>
   * 
   *           <dt>string `s_street2`</dt>
   *           <dd>The optional payment address. Specify this to add a new address.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>int `i_csc`</dt>
   *       <dd>The credit card CSC. Specify this to add a new card.</dd>
   * 
   *       <dt>int `i_month`</dt>
   *       <dd>The credit card expiration month. Specify this to add a new card.</dd>
   * 
   *       <dt>int `i_year`</dt>
   *       <dd>The credit card expiration year. Specify this to add a new card.</dd>
   * 
   *       <dt>bool `is_new`</dt>
   *       <dd>Specify <tt>1</tt> to add a new card, or <tt>0</tt> to use a saved card.</dd>
   * 
   *       <dt>string `k_pay_bank`</dt>
   *       <dd>The key of the credit card. Specify this to use saved card.</dd>
   * 
   *       <dt>string `s_comment`</dt>
   *       <dd>Optional comment(s). Specify this to add a new card.</dd>
   * 
   *       <dt>string `s_number`</dt>
   *       <dd>The card number. Specify this to add a new card.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `f_amount`</dt>
   *   <dd>The amount of money to withdraw with this payment source.</dd>
   * 
   *   <dt>bool `is_hide`</dt>
   *   <dd>Whether payment method should be saved to user's account.</dd>
   * 
   *   <dt>bool `is_save`</dt>
   *   <dd>Determines whether this payment method is hidden.</dd>
   * 
   *   <dt>bool `is_success`</dt>
   *   <dd>Identifies whether this source was successfully charged.</dd>
   * 
   *   <dt>string `m_surcharge`</dt>
   *   <dd>The client-side calculated surcharge.</dd>
   * 
   *   <dt>string `s_index`</dt>
   *   <dd>The index of this form (optional).</dd>
   * 
   *   <dt>string `sid_pay_method`</dt>
   *   <dd>The payment method ID.</dd>
   * </dl>
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
   * <dl>
   *   <dt>int[] `a_day`</dt>
   *   <dd>
   *     The days of week when the appointment repeat.One of the {@link ADateWeekSid} constants.
   * Should be passed for any type of repetition.
   *   </dd>
   * 
   *   <dt>int[] `a_week`</dt>
   *   <dd>Deprecated, use `a_day` instead!</dd>
   * 
   *   <dt>string `dl_end`</dt>
   *   <dd>Deprecated, use `dt_from` and `dt_to` instead!</dd>
   * 
   *   <dt>string `dt_from`</dt>
   *   <dd>Date to start recurring booking.
   * Expected for `id_repeat_</dd>
   * 
   *   <dt>string `dt_to`</dt>
   *   <dd>Date to complete recurring booking.
   * Expected for `id_repeat_</dd>
   * 
   *   <dt>int `i_count`</dt>
   *   <dd>
   *     The number of occurrences after which the appointment's repeat cycle stops.
   *  Should be empty if the repeat cycle doesn't stop after a certain number of occurrences.
   *  Expected for `id_repeat_
   *   </dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>Count of days\weeks\months between recurring bookings.</dd>
   * 
   *   <dt>int `i_occurrence`</dt>
   *   <dd>Deprecated, use `i_count` instead!</dd>
   * 
   *   <dt>int `i_period`</dt>
   *   <dd>Deprecated, use `i_duration` instead!</dd>
   * 
   *   <dt>int `id_duration`</dt>
   *   <dd>
   *     The measurement unit of `i_period`. One of the {@link ADurationSid} constants.
   *
   *   </dd>
   * 
   *   <dt>int `id_period`</dt>
   *   <dd>Deprecated, use `id_duration` instead! One of {@link ADurationSid} constants.</dd>
   * 
   *   <dt>int `id_repeat_end`</dt>
   *   <dd>Possible ways to stop repeatable events.</dd>
   * </dl>
   * @post post
   * @var array|null
   */
  public $a_repeat = null;

  /**
   * A list of assets being booked. Every element has the next keys:
   *
   * <dl>
   *   <dt>int `i_index`</dt>
   *   <dd>The number of asset(s). The actual number is returned for assets with a quantity greater than <tt>1</tt>.</dd>
   * 
   *   <dt>string `k_resource`</dt>
   *   <dd>The key of the asset. 
   * </dl>
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