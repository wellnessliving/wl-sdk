<?php

namespace WellnessLiving\Wl\Appointment\Book\Payment;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Appointment\WlAppointmentPaySid;
use WellnessLiving\Wl\Business\BusinessPaymentCaptcha;
use WellnessLiving\Wl\Classes\Tab\TabSid;
use WellnessLiving\Wl\Mode\ModeSid;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * Completes the payment for an appointment or appointment Purchase Option for a client.
 *
 * The only difference between this endpoint and {@link PaymentModel} is
 * that this endpoint is capable of paying for multiple appointments at the same time.
 *
 * This endpoint uses a CAPTCHA check.
 * To pass the CAPTCHA, you'll need to study the documentation of the CAPTCHA base class. In the documentation, you'll
 * find that you need to send a CAPTCHA for a specific action. For this API, the action is {@link BusinessPaymentCaptcha::CID}.
 *
 * @method WlModelRequest get() Calculates pricing information for a batch of appointment bookings, including taxes, discounts, surcharges, and per-provider totals.  Returns the full pricing breakdown for all providers specified in the booking data, including  available Purchase Options, applicable discount codes, surcharge amounts, and the final total  for each provider. Intended to be called before submitting payment so the client side can  display a pricing summary.
 * @method WlModelRequest post() Allows to pay an appointment or appointment purchase option for the client.  Accepts payment method and multi-provider booking data, charges the client for all appointments  or selected Purchase Options in the batch, and records the transactions. Requires the client  to be authenticated and each provider entry to include a valid service or asset key with date.
 */
class PaymentMultipleModel extends WlModelAbstract
{
  /**
   * The booking process information:
   *
   * Set this field value for GET requests.
   *
   * <dl>
   *   <dt>array[] `a_provider`</dt>
   *   <dd>
   *     The batch of appointments to be booked. Each element has the next values:
   *     <dl>
   *       <dt>array `a_product`</dt>
   *       <dd>
   *         The add-on list. Keys are add-on option keys. 
   * Values are quantities:
   *         <dl>
   *           <dt>string `k_shop_product_option`</dt>
   *           <dd>
   *             Add-on option key (used as array key). 
   *           </dd>
   * 
   *           <dt>int `i_count`</dt>
   *           <dd>Quantity of the add-on to purchase (used as array value).</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>int `i_duration`</dt>
   *       <dd>The asset duration in minutes. This won't be empty for asset bookings.</dd>
   * 
   *       <dt>int `id_purchase_item`</dt>
   *       <dd>
   *         The ID of the purchase item. One of the {@link WlPurchaseItemSid} constants.
   * This won't be empty for new options purchased.
   *       </dd>
   * 
   *       <dt>bool `is_pay_later`</dt>
   *       <dd>
   *         This will be <tt>true</tt> if the customer wants to pay upon their visit. Otherwise, this will be <tt>false</tt>
   * if the user wants to pay now.
   *       </dd>
   * 
   *       <dt>bool `is_purchase_previous`</dt>
   *       <dd>
   *         This will be <tt>true</tt> if the Purchase Option that was selected for another appointment from the batch
   * must be used for this appointment. Otherwise, this will be <tt>false</tt>.
   *       </dd>
   * 
   *       <dt>bool `is_wait_list_unpaid`</dt>
   *       <dd>
   *         This will be <tt>true</tt> if the customer is booked into the wait list and doesn't have to pay.
   * Otherwise, this will be <tt>false</tt> if the customer is booking to an active list (or if the wait list booking
   * should be paid now).
   *       </dd>
   * 
   *       <dt>string `k_id`</dt>
   *       <dd>The key of the purchase item.
   * This won't be empty for new options purchased.</dd>
   * 
   *       <dt>string `k_login_prize`</dt>
   *       <dd>
   *         The key of the customer's prize used to pay for the booking. This won't be empty for bookings made using prizes.
   *       </dd>
   * 
   *       <dt>string `k_login_promotion`</dt>
   *       <dd>
   *         The key of the Purchase Option. This won't be empty when using a Purchase Option that's already been purchased.
   *       </dd>
   * 
   *       <dt>string `dl_client_prorate`</dt>
   *       <dd>Client prorate date. Used when the purchased promotion is prorated.</dd>
   * 
   *       <dt>string `k_resource`</dt>
   *       <dd>The key of the asset booking.
   * This is only used for asset bookings.</dd>
   * 
   *       <dt>string `k_service`</dt>
   *       <dd>The key of the appointment booking service.
   * This is only used for appointment bookings.</dd>
   * 
   *       <dt>string `s_signature`</dt>
   *       <dd>
   *         The signature for the Purchase Option contract.
   * The data is returned from the canvas HTML element or the signature pad.
   * This won't be empty if the Purchase Option requires contract signing.
   *       </dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>
   *         User's key. 
   * Specify only in a case of booking for a lof of different users.
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `id_class_tab`</dt>
   *   <dd>The "Book now" tab. One of the {@link TabSid} constants.</dd>
   * 
   *   <dt>string `m_tip_appointment`</dt>
   *   <dd>The tips amount.</dd>
   * </dl>
   * @get get
   * @var array
   */
  public $a_book_data = [];

  /**
   * A copy of {@link PaymentMultipleModel::$a_book_data}. Has the same structure.
   * Set this field value for POST requests.
   *
   * <dl>
   *   <dt>array[] `a_provider`</dt>
   *   <dd>
   *     The batch of appointments to be booked. Each element has the next values:
   *     <dl>
   *       <dt>array `a_product`</dt>
   *       <dd>
   *         The add-on list. Keys are add-on option keys. 
   * Values are quantities:
   *         <dl>
   *           <dt>string `k_shop_product_option`</dt>
   *           <dd>
   *             Add-on option key (used as array key). 
   *           </dd>
   * 
   *           <dt>int `i_count`</dt>
   *           <dd>Quantity of the add-on to purchase (used as array value).</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>int `i_duration`</dt>
   *       <dd>The asset duration in minutes. This won't be empty for asset bookings.</dd>
   * 
   *       <dt>int `id_purchase_item`</dt>
   *       <dd>
   *         The ID of the purchase item. One of the {@link WlPurchaseItemSid} constants.
   * This won't be empty for new options purchased.
   *       </dd>
   * 
   *       <dt>bool `is_pay_later`</dt>
   *       <dd>
   *         This will be <tt>true</tt> if the customer wants to pay upon their visit. Otherwise, this will be <tt>false</tt>
   * if the user wants to pay now.
   *       </dd>
   * 
   *       <dt>bool `is_purchase_previous`</dt>
   *       <dd>
   *         This will be <tt>true</tt> if the Purchase Option that was selected for another appointment from the batch
   * must be used for this appointment. Otherwise, this will be <tt>false</tt>.
   *       </dd>
   * 
   *       <dt>bool `is_wait_list_unpaid`</dt>
   *       <dd>
   *         This will be <tt>true</tt> if the customer is booked into the wait list and doesn't have to pay.
   * Otherwise, this will be <tt>false</tt> if the customer is booking to an active list (or if the wait list booking
   * should be paid now).
   *       </dd>
   * 
   *       <dt>string `k_id`</dt>
   *       <dd>The key of the purchase item.
   * This won't be empty for new options purchased.</dd>
   * 
   *       <dt>string `k_login_prize`</dt>
   *       <dd>
   *         The key of the customer's prize used to pay for the booking. This won't be empty for bookings made using prizes.
   *       </dd>
   * 
   *       <dt>string `k_login_promotion`</dt>
   *       <dd>
   *         The key of the Purchase Option. This won't be empty when using a Purchase Option that's already been purchased.
   *       </dd>
   * 
   *       <dt>string `dl_client_prorate`</dt>
   *       <dd>Client prorate date. Used when the purchased promotion is prorated.</dd>
   * 
   *       <dt>string `k_resource`</dt>
   *       <dd>The key of the asset booking.
   * This is only used for asset bookings.</dd>
   * 
   *       <dt>string `k_service`</dt>
   *       <dd>The key of the appointment booking service.
   * This is only used for appointment bookings.</dd>
   * 
   *       <dt>string `s_signature`</dt>
   *       <dd>
   *         The signature for the Purchase Option contract.
   * The data is returned from the canvas HTML element or the signature pad.
   * This won't be empty if the Purchase Option requires contract signing.
   *       </dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>
   *         User's key. 
   * Specify only in a case of booking for a lof of different users.
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `id_class_tab`</dt>
   *   <dd>The "Book now" tab. One of the {@link TabSid} constants.</dd>
   * 
   *   <dt>string `m_tip_appointment`</dt>
   *   <dd>The tips amount.</dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_book_data_post = [];

  /**
   * The list of redeemed prizes.
   *
   * @post result
   * @var string[]
   */
  public $a_login_prize = [];

  /**
   * The payment type for the appointment. One of the {@link WlAppointmentPaySid} constants.
   *
   * @post result
   * @var int[]
   */
  public $a_pay;

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
   *           <dd>Set this value to `1` to add a new payment address or to `0` to use a saved payment address.</dd>
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
   *       <dd>Specify `1` to add a new card, or `0` to use a saved card.</dd>
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
   *   <dd>Determines whether this payment method is hidden.</dd>
   * 
   *   <dt>bool `is_save`</dt>
   *   <dd>Whether payment method should be saved to user's account.</dd>
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
   * Information about the selected login promotion.
   *
   * <dl>
   *   <dt>int `i_limit`</dt>
   *   <dd>The visit count limit of the promotion.</dd>
   * 
   *   <dt>int `i_remain`</dt>
   *   <dd>The count of remaining visits.</dd>
   * 
   *   <dt>string `s_expire`</dt>
   *   <dd>The expiration date.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>The title of the promotion.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_promotion_data;

  /**
   * List of purchase options to be purchased.
   *
   * <b>Warning:</b>
   * * This field contains incorrect data for multiple bookings. Use {@link PaymentMultipleModel::$a_purchase_provider} instead.
   * * This field can be safely used for a single booking.
   * * This field can contain valid data for the {@link WlPurchaseItemSid::APPOINTMENT_TIP} purchase that does not belong to any provider.
   *
   * Array structure:
   * * Keys refer to strings in the format `id_purchase_item-k_id`.
   * * Values refer to an array with the next stricture:
   *
   * <dl>
   *   <dt>array `a_tax`</dt>
   *   <dd>
   *     A list of taxes to apply containing information about taxes.
   * The array keys are <tt>k_tax</tt> keys. Each element contains the following fields:
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
   *   <dd>The purchase item ID. One of the {@link WlPurchaseItemSid} constants.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>The value of the discount used for the purchase.</dd>
   * 
   *   <dt>string `m_discount`</dt>
   *   <dd>The value of the discount used for the purchase.</dd>
   * 
   *   <dt>string `m_pay`</dt>
   *   <dd>The payment for the promotion (or single visit) without taxes.</dd>
   * 
   *   <dt>string `m_price`</dt>
   *   <dd>The price of the promotion (or single visit).</dd>
   * </dl>
   * @get result
   * @var array
   * @deprecated This field contains incorrect data for multiple bookings.
   *  Use {@link PaymentMultipleModel::$a_purchase_provider} instead.
   *  However, this field can still return valid data for an Appointment Tip purchase that does not belong
   *  to any provider, and the field can still be used for a single booking.
   */
  public $a_purchase;

  /**
   * The keys of purchased items.
   *
   * The first level of the array is the list of appointments from the batch.
   * The second level of the array is the list of items purchased for this appointment.
   *
   * If a purchased item was transferred, the key of the transferred purchase item will be returned instead of the
   * key of the purchased one. Otherwise the original purchase item is kept.
   *
   * @post result
   * @var string[][]|null
   */
  public $a_purchase_item;

  /**
   * A list of purchase options grouped by provider.
   *
   * * The first level keys are provider indexes from {@link PaymentMultipleModel::$a_book_data} field.
   * * The second level keys are strings in the format `id_purchase_item-k_id`.
   * * Each value has the same structure as {@link PaymentMultipleModel::$a_purchase}.
   *
   * <dl>
   *   <dt>array `a_tax`</dt>
   *   <dd>
   *     A list of taxes to apply containing information about taxes.
   * The array keys are <tt>k_tax</tt> keys. Each element contains the following fields:
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
   *   <dd>The purchase item ID. One of the {@link WlPurchaseItemSid} constants.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>The value of the discount used for the purchase.</dd>
   * 
   *   <dt>string `m_discount`</dt>
   *   <dd>The value of the discount used for the purchase.</dd>
   * 
   *   <dt>string `m_pay`</dt>
   *   <dd>The payment for the promotion (or single visit) without taxes.</dd>
   * 
   *   <dt>string `m_price`</dt>
   *   <dd>The price of the promotion (or single visit).</dd>
   * </dl>
   * @get result
   * @var array[][]
   */
  public $a_purchase_provider;

  /**
   * List of quiz response keys.
   * Keys are quiz keys. 
   * Values are quiz response keys. 
   *
   * @post post
   * @var string[]
   */
  public $a_quiz_response = [];

  /**
   * The list of amounts to pay for appointments from the batch, with taxes and without surcharges.
   *
   * * Keys are provider indexes from {@link PaymentMultipleModel::$a_book_data}.
   * * Values are the total amount for the corresponding provider, or `0.00` if the provider has nothing to pay.
   *
   * @get result
   * @var string[]
   */
  public $a_total;

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
   * The ID of the source mode. One of the {@link ModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * If `true`, the client is a walk-in. Otherwise, this will be `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * Location to show available appointment booking schedule.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * Key of the activity for the purchase made. This will be empty if no purchase has been made.
   *
   * @post result
   * @var string
   */
  public $k_login_activity_purchase = '0';

  /**
   * The gift card amount.
   *
   * @get result
   * @var string
   */
  public $m_coupon = '0.00';

  /**
   * The discount amount.
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
   * The amount of tax to pay.
   *
   * @get result
   * @var string
   */
  public $m_tax = '0.00';

  /**
   * The price of the service, with taxes and without surcharges.
   *
   * @get result
   * @var string
   */
  public $m_total = '0.00';

  /**
   * The gift card code.
   *
   * @get get
   * @post get
   * @var string
   */
  public $text_coupon_code = '';

  /**
   * The discount code.
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