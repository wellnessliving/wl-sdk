<?php

namespace WellnessLiving\Wl\Book\Process\Purchase;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\WlProgramCategorySid;
use WellnessLiving\Wl\WlProgramSid;
use WellnessLiving\Wl\WlProgramTypeSid;

/**
 * Displays information about Purchase Options that can book specified session(s).
 *
 * Note that the terms "Purchase Option" and "promotion" are used interchangeably.
 *
 * @method WlModelRequest get() Returns available purchase options for the specified session, decoding JSON-encoded group promotion and session inputs.  Deserializes the JSON-encoded group login-promotion list and session selection, then delegates to the parent to return the purchase options available for the current client and session.
 */
class Purchase56Model extends WlModelAbstract
{
  /**
   * Data about the login prize which can be used to pay for service.
   *
   * <dl>
   *   <dt>string `f_price`</dt>
   *   <dd>The price, always '0'.</dd>
   * 
   *   <dt>int `i_count`</dt>
   *   <dd>Login prize remaining quantity.</dd>
   * 
   *   <dt>int `i_limit`</dt>
   *   <dd>The limit of sessions that can be booked with reward prize.</dd>
   * 
   *   <dt>int `id_purchase_item`</dt>
   *   <dd>The ID of Purchase Option type. One of the {@link WlPurchaseItemSid} constants.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>The key of the Purchase Option in the database. The table depends on <var>id_purchase_item</var>.</dd>
   * 
   *   <dt>string `k_login_prize`</dt>
   *   <dd>Key of login prize. </dd>
   * 
   *   <dt>string `s_value`</dt>
   *   <dd>The unique identifier.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>User-friendly login prize description.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_login_prize = [];

  /**
   * A list of the client's login promotions that can be applied to a given service.
   * Each element has the following fields:
   *
   * <dl>
   *   <dt>array `a_login_promotion_info`</dt>
   *   <dd>
   *     Information about the Purchase Option with the following information:
   *     <dl>
   *       <dt>int `i_limit`</dt>
   *       <dd>The number of visits the Purchase Option allows the client to make.</dd>
   * 
   *       <dt>int|null `i_limit_duration`</dt>
   *       <dd>The maximum number of minutes the Purchase Option can be used for.</dd>
   * 
   *       <dt>int `i_remain`</dt>
   *       <dd>The number of the remaining visits the Purchase Option has left.</dd>
   * 
   *       <dt>int|null `i_remain_duration`</dt>
   *       <dd>The number of minutes left in the Purchase Option.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string[] `a_uid_share`</dt>
   *   <dd>
   *     List of UIDs of users who share this promotion.
   * List of those passed in the {@link PurchaseModel::$a_login_promotion_group} array.
   *   </dd>
   * 
   *   <dt>string[] `a_visit_limit`</dt>
   *   <dd>The list of calendar restrictions of the promotion (for example, 4 per week).</dd>
   * 
   *   <dt>array `a_restrict`</dt>
   *   <dd>
   *     Data about the shortest restriction period:
   *     <dl>
   *       <dt>int `i_limit`</dt>
   *       <dd>The limit of visits for the shortest restriction period.</dd>
   * 
   *       <dt>int `i_remain`</dt>
   *       <dd>The number of remaining visits for the shortest restriction period.</dd>
   * 
   *       <dt>string `text_restriction`</dt>
   *       <dd>The description of the shortest restriction period (for example "this week" or "for a 4 day period").</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_restrict_data`</dt>
   *   <dd>
   *     Data about all restriction periods given as an array, where each record has the following structure:
   *     <dl>
   *       <dt>int `i_book`</dt>
   *       <dd>The number of future sessions paid using this Purchase Option.</dd>
   * 
   *       <dt>int `i_limit`</dt>
   *       <dd>The limit of visits for the restriction period.</dd>
   * 
   *       <dt>int `i_remain`</dt>
   *       <dd>The number of remaining visits for the restriction period.</dd>
   * 
   *       <dt>int `i_use`</dt>
   *       <dd>The Purchase Option's usage count.</dd>
   * 
   *       <dt>int `i_visit_past`</dt>
   *       <dd>
   *         The number of attended sessions before the last renewal.
   * This will be `0` if there aren't any sessions before the last renewal or the Purchase Option doesn't auto-renew.
   *       </dd>
   * 
   *       <dt>string `text_restriction`</dt>
   *       <dd>The description of restriction period (for example "this week" or "for a 4 day period").</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `i_limit`</dt>
   *   <dd>The number of visits the Purchase Option allows the client to make.</dd>
   * 
   *   <dt>int|null `i_limit_duration`</dt>
   *   <dd>The maximum number of minutes the Purchase Option can be used for.</dd>
   * 
   *   <dt>int `i_promotion_priority`</dt>
   *   <dd>
   *     Priority of this promotion.
   *   </dd>
   * 
   *   <dt>int `id_program`</dt>
   *   <dd>The program ID for Purchase Options. One of the {@link WlProgramSid} constants.</dd>
   * 
   *   <dt>bool `is_convert`</dt>
   *   <dd>If `true`, the promotion converts to another instance upon expiration. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_shared`</dt>
   *   <dd>`true` if the promotion is shared with the client, `false` if the client is owner of the promotion.</dd>
   * 
   *   <dt>string `k_login_promotion`</dt>
   *   <dd>The login promotion key. </dd>
   * 
   *   <dt>string `s_class_include`</dt>
   *   <dd>The list of services provided by this Purchase Option.</dd>
   * 
   *   <dt>string `s_description`</dt>
   *   <dd>The Purchase Option description.</dd>
   * 
   *   <dt>string `s_duration`</dt>
   *   <dd>The Purchase Option duration.</dd>
   * 
   *   <dt>string `s_promotion_convert`</dt>
   *   <dd>
   *     This is only set if <var>is_convert</var> is `true`. The title to use for the new promotion instance upon auto-renewal.
   *   </dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>The Purchase Option name.</dd>
   * 
   *   <dt>string `text_package_item`</dt>
   *   <dd>If this promotion is a package, this field will contain a list of Purchase Options contained in the package.</dd>
   * </dl>
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
   * <dl>
   *   <dt>int `i_session`</dt>
   *   <dd>
   *     Number of paid sessions of the same class|event that were selected for the previous user.
   *   This number should not include free or waitlist unpaid sessions.
   *   </dd>
   * 
   *   <dt>string `k_login_promotion`</dt>
   *   <dd>Selected purchase option. </dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>UID of the previous user. </dd>
   * </dl>
   * @get get
   * @var array[]
   */
  public $a_login_promotion_group = [];

  /**
   * A list of Purchase Options that are available for the session(s) being booked. Keys refer to unique string IDs,
   * and values refer arrays with the next fields: 
   *
   * <dl>
   *   <dt>array[] `a_installment_template`</dt>
   *   <dd>
   *     A list of installment plans. Every element has the next keys:
   *     <dl>
   *       <dt>int `i_count`</dt>
   *       <dd>The number of payments.</dd>
   * 
   *       <dt>int `id_duration`</dt>
   *       <dd>The duration of a single period. One of the {@link ADurationSid} constants.</dd>
   * 
   *       <dt>int `i_period`</dt>
   *       <dd>The number of periods specified by <var>id_period</var> between individual payments.</dd>
   * 
   *       <dt>string `k_currency`</dt>
   *       <dd>The payment currency key.</dd>
   * 
   *       <dt>string `k_pay_installment_template`</dt>
   *       <dd>
   *         The key of the installment plan template. 
   *       </dd>
   * 
   *       <dt>string `m_amount`</dt>
   *       <dd>The amount of the installment plan.</dd>
   * 
   *       <dt>string `s_duration`</dt>
   *       <dd>The title of the installment plan.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_visit_limit`</dt>
   *   <dd>
   *     This is only set for Purchase Options. A list of limits on booking by the Purchase Option. Every element has the next keys:
   *     <dl>
   *       <dt>string `s_title`</dt>
   *       <dd>The limit description.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `dl_client_prorate`</dt>
   *   <dd>The client prorate date.</dd>
   * 
   *   <dt>string `f_price`</dt>
   *   <dd>The price.</dd>
   * 
   *   <dt>string `f_price_early`</dt>
   *   <dd>The price for early bookings.</dd>
   * 
   *   <dt>string `html_payment_period`</dt>
   *   <dd>
   *     This is only set for Purchase Options with the 'membership' program type. The measurement unit of <var>i_payment_period</var> in short form.
   *   </dd>
   * 
   *   <dt>string `html_description`</dt>
   *   <dd>The description, ready to paste in a browser.</dd>
   * 
   *   <dt>int `i_limit`</dt>
   *   <dd>The limit of sessions that can be booked by Purchase Options.</dd>
   * 
   *   <dt>int `i_payment_period`</dt>
   *   <dd>
   *     This is only set for Purchase Options with the 'membership' program type. The duration of the regular payment interval.
   *   </dd>
   * 
   *   <dt>int `i_session`</dt>
   *   <dd>This is only set for purchases of single sessions. The number of sessions booked simultaneously.</dd>
   * 
   *   <dt>int `id_program_category`</dt>
   *   <dd>
   *     This is only set for promotions. The ID of the promotion program category. One of the {@link WlProgramCategorySid} constants.
   *   </dd>
   * 
   *   <dt>int `id_program_type`</dt>
   *   <dd>
   *     This is only set for promotions. The ID of the promotion program type. One of the {@link WlProgramTypeSid} constants.
   *   </dd>
   * 
   *   <dt>int `id_purchase_item`</dt>
   *   <dd>The ID of Purchase Option type. One of the {@link WlPurchaseItemSid} constants.</dd>
   * 
   *   <dt>bool `is_contract`</dt>
   *   <dd>If `true`, the Purchase Option requires a contract assignment. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_convert`</dt>
   *   <dd>If `true`, the Purchase Option converts to another instance upon expiration. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_renew`</dt>
   *   <dd>If `true`, the Purchase Option is renewable. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_renew_check`</dt>
   *   <dd>
   *     If `true`, the Purchase Option is renewable and the "auto-renew" option is turned on by default. Otherwise, this will be `false`.
   *   </dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>The key of the Purchase Option in the database. The table depends on <var>id_purchase_item</var>.</dd>
   * 
   *   <dt>string `k_login_prize`</dt>
   *   <dd>The key of the user's prize that can be used instead a Purchase Option to book the session.</dd>
   * 
   *   <dt>string `k_reward_prize`</dt>
   *   <dd>The key of the reward prize that can be used instead a Purchase Option to book the session.</dd>
   * 
   *   <dt>string `m_prorate`</dt>
   *   <dd>Payment for membership prorate. Not empty only if prorate payment is required.</dd>
   * 
   *   <dt>string `s_contract`</dt>
   *   <dd>The contract of the Purchase Option. This is only set if <var>is_contract</var> is `true`.</dd>
   * 
   *   <dt>string `s_payment_duration`</dt>
   *   <dd>
   *     This is only set for Purchase Options with the 'membership' program type. The measurement unit of <var>i_payment_period</var>.
   *   </dd>
   * 
   *   <dt>string `s_promotion_convert`</dt>
   *   <dd>
   *     This is only set if <var>is_convert</var> is `true`. The title to use for the new Purchase Option instance upon auto-renewal.
   *   </dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>The title.</dd>
   * 
   *   <dt>string `s_value`</dt>
   *   <dd>The unique identifier.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_purchase = [];

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
   * Available duration units are: {@link ADurationSid::DAY}, {@link ADurationSid::WEEK}, {@link ADurationSid::MONTH}.
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
   * List of redeemable prizes which can be used to pay for service.
   * Each element has the following fields:
   *
   * <dl>
   *   <dt>string `f_price`</dt>
   *   <dd>The price, always '0'.</dd>
   * 
   *   <dt>int `i_limit`</dt>
   *   <dd>The limit of sessions that can be booked with reward prize.</dd>
   * 
   *   <dt>int `i_score`</dt>
   *   <dd>Prize price in points.</dd>
   * 
   *   <dt>int `id_purchase_item`</dt>
   *   <dd>The ID of Purchase Option type. One of the {@link WlPurchaseItemSid} constants.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>The key of the Purchase Option in the database. The table depends on <var>id_purchase_item</var>.</dd>
   * 
   *   <dt>string `k_reward_prize`</dt>
   *   <dd>Key of redeemable prize. </dd>
   * 
   *   <dt>string `s_value`</dt>
   *   <dd>The unique identifier.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>User-friendly prize description.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_reward_prize = [];

  /**
   * The list of sessions being booked.
   *
   * Keys are class period keys. 
   * Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
   *
   * @get get
   * @var string[]
   */
  public $a_session = [];

  /**
   * The list of session passes that might be used in booking process.
   * Each element has the following fields:
   *
   * <dl>
   *   <dt>int `i_remain`</dt>
   *   <dd>Number of remaining visits on session pass.</dd>
   * 
   *   <dt>string `k_session_pass`</dt>
   *   <dd>Session pass key. </dd>
   * 
   *   <dt>int `id_purchase_item`</dt>
   *   <dd>Type of the session pass purchase. One of {@link WlPurchaseItemSid} constants.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>Session pass title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_session_pass = [];

  /**
   * The selected sessions on the wait list that are unpaid.
   *
   * Keys are class period keys. 
   * Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
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
   * A list of existing purchase options that were selected for previous clients (group).
   *
   * Note:
   * * It makes sense if for all clients the list is loaded within
   *      the same pair {@link Purchase56Model::$dt_date_gmt} and {@link Purchase56Model::$k_class_period}.
   * * If promotions are shared, the system will try to determine if there are enough sessions left for the next
   *      client who has the same promotion.
   * * A very simple check is made based on a comparison of the remaining sessions for the promotion
   *      with the number of times it was selected.
   * * Can affect the list of available login promotions {@link Purchase56Model::$a_login_promotion}.
   *      If a given client is eligible for such a promotion, but the remaining sessions (minus those previously
   *      selected) in it do not allow it to be applied to the selected session, then such promotion will simply
   *      not be returned for the client.
   * * The order of clients across all APIs must be the same to guarantee their results.
   *
   * Serialized with JSON.
   *
   * Each element has the following structure:
   *
   * <dl>
   *   <dt>int `i_session`</dt>
   *   <dd>
   *     Number of paid sessions of the same class|event that were selected for the previous user.
   *   This number should not include free or waitlist unpaid sessions.
   *   </dd>
   * 
   *   <dt>string `k_login_promotion`</dt>
   *   <dd>Selected purchase option. </dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>UID of the previous user. </dd>
   * </dl>
   * @get get
   * @var string
   */
  public $json_login_promotion_group = '';

  /**
   * The selected sessions.
   * This won't be empty for session mode only.
   *
   * Fields refer to IDs of sessions in the database.
   * Values refer to arrays of dates/times when session occurred, returned in MySQL format and in UTC.
   *
   * Serialized with JSON.
   *
   * @get get
   * @var string
   */
  public $json_session = '';

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
   * Host login promotion key that grants the guest pass used to pay for the guest's visit.
   * Empty string if the booking is not paid with a guest pass.
   *
   * @post post
   * @var string
   */
  public $k_login_promotion_guest_pass = '';

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