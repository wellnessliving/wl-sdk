<?php

namespace WellnessLiving\Wl\Appointment\Book\Payment;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Appointment\WlAppointmentPaySid;
use WellnessLiving\Wl\Business\BusinessPaymentCaptcha;
use WellnessLiving\Wl\Mode\ModeSid;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\Service\ServicePriceSid;

/**
 * Sends payments for an appointment booking.
 *
 * This endpoint using captcha check.
 * To pass captcha need study the documentation by captcha API, there you will find that you need to send a captcha for a specific action.
 * For this API an action is {@link BusinessPaymentCaptcha::CID}.
 */
class PaymentPostModel extends WlModelAbstract
{
  /**
   * Information detailing an appointment booking.
   * Has the same structure as {@link PaymentModel::$a_book_data}.
   *
   * <dl>
   *   <dt>int[] `a_product`</dt>
   *   <dd>Add-on list. Keys are add-on option keys, values are quantities.</dd>
   * 
   *   <dt>string `dl_client_prorate`</dt>
   *   <dd>Client prorate date. Used when the purchased promotion is prorated.</dd>
   * 
   *   <dt>int `id_class_tab`</dt>
   *   <dd>The "Book now" tab.</dd>
   * 
   *   <dt>bool `is_pay_later`</dt>
   *   <dd>`true` if the client wants to pay upon their visit, `false` if paying now.</dd>
   * 
   *   <dt>bool `is_purchase_previous`</dt>
   *   <dd>`true` if a previously purchased option is used for this booking.</dd>
   * 
   *   <dt>bool `is_wait_list_unpaid`</dt>
   *   <dd>`true` if the client is placed on a wait list without paying.</dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>Asset booking duration in minutes. Used only for asset bookings.</dd>
   * 
   *   <dt>string `k_login_prize`</dt>
   *   <dd>Login prize key used to pay for the booking. Empty if no prize is used.</dd>
   * 
   *   <dt>string `k_login_promotion`</dt>
   *   <dd>Key of an already-purchased promotion used for this booking. Empty if not applicable.</dd>
   * 
   *   <dt>string `k_resource`</dt>
   *   <dd>Asset key. Used only for asset bookings.</dd>
   * 
   *   <dt>string `k_reward_prize`</dt>
   *   <dd>Reward prize key used to redeem a free item. Empty if not applicable.</dd>
   * 
   *   <dt>string `k_service`</dt>
   *   <dd>Service key. Used only for appointment bookings.</dd>
   * 
   *   <dt>string `k_session_pass`</dt>
   *   <dd>Drop-in key. Used when booking via a drop-in pass.</dd>
   * 
   *   <dt>string `m_tip_appointment`</dt>
   *   <dd>Tip amount for the appointment.</dd>
   * 
   *   <dt>string `s_signature`</dt>
   *   <dd>Client signature for a contract. Required when the purchase option has a contract.</dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_book_data = [];

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
   * Information about selected Purchase Options.
   *
   * <dl>
   *   <dt>int `i_limit`</dt>
   *   <dd>The limit of total visits.</dd>
   * 
   *   <dt>int `i_remain`</dt>
   *   <dd>The number of remaining visits.</dd>
   * 
   *   <dt>string `s_expire`</dt>
   *   <dd>The expiration date.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>The title of the Purchase Option.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_promotion_data;

  /**
   * Information about selected purchase items.
   *
   * Indexes are strings in the format `id_purchase_item-k_id`.
   *
   * Values are an array with the following structure:
   *
   * <dl>
   *   <dt>array `a_tax`</dt>
   *   <dd>
   *     Contains information about taxes in the following format. A list of taxes to apply.
   * The array keys are `k_tax` keys. Each element contains the following fields:
   *     <dl>
   *       <dt>string `m_tax`</dt>
   *       <dd>The tax rate.</dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>The name of the tax.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `id_purchase_item`</dt>
   *   <dd>The purchase item ID. A constant of {@link WlPurchaseItemSid}.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>The value of the discount used for the purchase.</dd>
   * 
   *   <dt>string `m_discount`</dt>
   *   <dd>The value of the discount used for the purchase.</dd>
   * 
   *   <dt>string `m_discount_login`</dt>
   *   <dd>The discount amount for the client type of one purchase item.</dd>
   * 
   *   <dt>string `m_pay`</dt>
   *   <dd>The payment for the Purchase Option or single visit without taxes.</dd>
   * 
   *   <dt>string `m_price`</dt>
   *   <dd>The price of the Purchase Option or single visit.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_purchase;

  /**
   * The purchase item keys from the database.
   *
   * This will be `null` if not set yet.
   *
   * @post result
   * @var string[]|null
   */
  public $a_purchase_item;

  /**
   * List of quiz response keys.
   * Keys are quiz keys.  Values are quiz response keys. 
   * @post post
   * @var string[]
   */
  public $a_quiz_response = [];

  /**
   * List of user keys to book appointments.
   * There may be empty values in this list, which means that this is a walk-in.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * The key of source mode. A constant of {@link ModeSid}.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * The payment type for the appointment. A constant of {@link WlAppointmentPaySid}.
   *
   * @post result
   * @var int
   */
  public $id_pay;

  /**
   * The purchase item ID. A constant of {@link WlPurchaseItemSid}.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_purchase_item = 0;

  /**
   * If `true`, the client is a walk-in. Otherwise, this will be `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * The business key. Currently used only with {@link PaymentModel::$k_session_pass} variable.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The item key. Depends on {@link PaymentModel::$id_purchase_item} property.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_id = '0';

  /**
   * Location to show available appointment booking schedule.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * The key of activity of the purchase made.
   * Empty if no purchase has been made.
   *
   * @post result
   * @var string
   */
  public $k_login_activity_purchase;

  /**
   * Login prize key. In case when appointment paid by reward prize, there is the key of redeemed login prize. Empty otherwise.
   *
   * @post result
   * @var string
   */
  public $k_login_prize = '0';

  /**
   * The login promotion key.
   *
   * @get get
   * @var string
   */
  public $k_login_promotion = '0';

  /**
   * Session pass key.
   *
   * @get get
   * @var string
   */
  public $k_session_pass = '0';

  /**
   * Gift card amount.
   *
   * @get result
   * @var string
   */
  public $m_coupon = '0.00';

  /**
   * Discount amount.
   *
   * @get result
   * @var string
   */
  public $m_discount = '0.00';

  /**
   * Surcharge amount calculated for credit cards (Virtual Terminal and Card Swiper).
   *
   * @get result
   * @var string
   */
  public $m_surcharge = '0.00';

  /**
   * Surcharge amount calculated for money transfers from account: ACH, Direct Entry.
   *
   * @get result
   * @var string
   */
  public $m_surcharge_ach = '0.00';

  /**
   * The tax of service.
   *
   * @get result
   * @var string
   */
  public $m_tax = '0.00';

  /**
   * The total cost of the purchase.
   *
   * @get result
   * @var string
   */
  public $m_total;

  /**
   * Variable price. Is set only during booking an appointment with variable type of the price
   *   {@link ServicePriceSid::VARIES} from spa backend {@link ModeSid::SPA_BACKEND}.
   *
   * @get get
   * @var string
   */
  public $m_variable_price = '';

  /**
   * Service unique key.
   * Used for model cache.
   *
   * @get get
   * @var string
   */
  public $s_unique_key = '';

  /**
   * Gift card code.
   *
   * @get get
   * @post get
   * @var string
   */
  public $text_coupon_code = '';

  /**
   * The discount code to be applied to the purchase.
   *
   * @get get
   * @post get
   * @var string
   */
  public $text_discount_code = '';

  /**
   * The user key.
   *
   * This field is used if the client books for himself or for the relative.
   *
   * This field is incorrect to use for guest booking since in this case the client will be checked as a relative.
   *
   * In case of a group booking or a guest booking, the key of the client who is making the booking is set here.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>