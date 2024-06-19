<?php

namespace WellnessLiving\Wl\Appointment\Book\Payment;

use WellnessLiving\WlModelAbstract;
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
 */
class PaymentMultipleModel extends WlModelAbstract
{
  /**
   * The booking process information:
   * <dl>
   *   <dt>
   *     array[] <var>a_provider</var>
   *   </dt>
   *   <dd>
   *     The batch of appointments to be booked. Each element has the next values:
   *     <dl>
   *       <dt>
   *         array <var>a_product</var>
   *       </dt>
   *       <dd>
   *         The add-on list.
   *         Keys refer to add-on keys, and values refer to the add-on quantities.
   *       </dd>
   *       <dt>
   *         int <var>i_duration</var>
   *       </dt>
   *       <dd>
   *         The asset duration in minutes. This won't be empty for asset bookings.
   *       </dd>
   *       <dt>
   *         int <var>id_purchase_item</var>
   *       </dt>
   *       <dd>
   *         The ID of the purchase item. One of the {@link WlPurchaseItemSid} constants.
   *         This won't be empty for new options purchased.
   *       </dd>
   *       <dt>
   *         bool <var>is_pay_later</var>
   *       </dt>
   *       <dd>
   *         This will be <tt>true</tt> if the customer wants to pay upon their visit. Otherwise, this will be <tt>false</tt>
   *         if the user wants to pay now.
   *       </dd>
   *       <dt>
   *         bool <var>is_purchase_previous</var>
   *       </dt>
   *       <dd>
   *         This will be <tt>true</tt> if the Purchase Option that was selected for another appointment from the batch
   *         must be used for this appointment. Otherwise, this will be <tt>false</tt>.
   *       </dd>
   *       <dt>
   *         bool <var>is_wait_list_unpaid</var>
   *       </dt>
   *       <dd>
   *         This will be <tt>true</tt> if the customer is booked into the wait list and doesn't have to pay.
   *         Otherwise, this will be <tt>false</tt> if the customer is booking to an active list (or if the wait list booking
   *         should be paid now).
   *       </dd>
   *       <dt>
   *         string <var>k_id</var>
   *       </dt>
   *       <dd>
   *         The key of the purchase item.
   *         This won't be empty for new options purchased.
   *       </dd>
   *       <dt>
   *         string <var>k_login_prize</var>
   *       </dt>
   *       <dd>
   *         The key of the customer's prize used to pay for the booking. This won't be empty for bookings made using prizes.
   *       </dd>
   *       <dt>
   *         string <var>k_login_promotion</var>
   *       </dt>
   *       <dd>
   *         The key of the Purchase Option. This won't be empty when using a Purchase Option that's already been purchased.
   *       </dd>
   *       <dt>
   *         string <var>k_resource</var>
   *       </dt>
   *       <dd>
   *         The key of the asset booking.
   *         This is only used for asset bookings.
   *       </dd>
   *       <dt>
   *         string <var>k_service</var>
   *       </dt>
   *       <dd>
   *         The key of the appointment booking service.
   *         This is only used for appointment bookings.
   *       </dd>
   *       <dt>
   *         string <var>s_signature</var>
   *       </dt>
   *       <dd>
   *         The signature for the Purchase Option contract.
   *         The data is returned from the canvas HTML element or the signature pad.
   *         This won't be empty if the Purchase Option requires contract signing.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     int <var>id_class_tab</var>
   *   </dt>
   *   <dd>
   *     The "Book now" tab. One of the {@link TabSid} constants.
   *   </dd>
   *   <dt>
   *     string <var>m_tip_appointment</var>
   *   </dt>
   *   <dd>
   *     The tips amount.
   *   </dd>
   * </dl>
   *
   * Set this field value for GET requests.
   *
   * @get get
   * @var array
   */
  public $a_book_data = [];

  /**
   * A copy of {@link PaymentMultipleModel::$a_book_data}.
   *
   * Set this field value for POST requests.
   *
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
   * <dl>
   *   <dt>
   *     array [<var>a_pay_card</var>]
   *   </dt>
   *   <dd>
   *     The payment card information:
   *     <dl>
   *       <dt>
   *         array <var>a_pay_address</var>
   *       </dt>
   *       <dd>
   *         The payment address:
   *         <dl>
   *           <dt>boolean <var>is_new</var></dt>
   *           <dd>Set this value to <tt>1</tt> to add a new payment address or to <tt>0</tt> to use a saved payment address.</dd>
   *           <dt>string [<var>k_geo_country</var>]</dt>
   *           <dd>The key of the country used for the payment address. Specify this to add a new address.</dd>
   *           <dt>string [<var>k_geo_region</var>]</dt>
   *           <dd>The key of the region for the payment address. Specify this to add a new address.</dd>
   *           <dt>string [<var>k_pay_address</var>]</dt>
   *           <dd>The key of the saved payment address. Specify this to use a saved address.</dd>
   *           <dt>string [<var>s_city</var>]</dt>
   *           <dd>The city used for the payment address. Specify this to add a new address.</dd>
   *           <dt>string [<var>s_name</var>]</dt>
   *           <dd>The card name. Specify this to add a new address.</dd>
   *           <dt>string [<var>s_phone</var>]</dt>
   *           <dd>The payment phone. Specify this to add a new address.</dd>
   *           <dt>string [<var>s_postal</var>]</dt>
   *           <dd>The postal code for the payment address. Specify this to add a new address.</dd>
   *           <dt>string [<var>s_street1</var>]</dt>
   *           <dd>The payment address. Specify this to add a new address.</dd>
   *           <dt>string [<var>s_street2</var>]</dt>
   *           <dd>The optional payment address. Specify this to add a new address.</dd>
   *         </dl>
   *       </dd>
   *       <dt>
   *         int [<var>i_csc</var>]
   *       </dt>
   *       <dd>
   *         The credit card CSC. Specify this to add a new card.
   *       </dd>
   *       <dt>
   *         int [<var>i_month</var>]
   *       </dt>
   *       <dd>
   *         The credit card expiration month. Specify this to add a new card.
   *       </dd>
   *       <dt>
   *         int [<var>i_year</var>]
   *       </dt>
   *       <dd>
   *         The credit card expiration year. Specify this to add a new card.
   *       </dd>
   *       <dt>
   *         boolean <var>is_new</var>
   *       </dt>
   *       <dd>
   *         Specify <tt>1</tt> to add a new card, or <tt>0</tt> to use a saved card.
   *       </dd>
   *       <dt>
   *         string [<var>k_pay_bank</var>]
   *       </dt>
   *       <dd>
   *         The key of the credit card. Specify this to use saved card.
   *       </dd>
   *       <dt>
   *         string [<var>s_comment</var>]
   *       </dt>
   *       <dd>
   *         Optional comment(s). Specify this to add a new card.
   *       </dd>
   *       <dt>
   *         string [<var>s_number</var>]
   *       </dt>
   *       <dd>
   *         The card number. Specify this to add a new card.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string <var>f_amount</var>
   *   </dt>
   *   <dd>
   *     The amount of money to withdraw with this payment source.
   *   </dd>
   *   <dt>
   *     boolean [<var>is_hide</var>]
   *   </dt>
   *   <dd>
   *     Determines whether this payment method is hidden.
   *   </dd>
   *   <dt>
   *     boolean [<var>is_success</var>=<tt>false</tt>]
   *   </dt>
   *   <dd>
   *     Identifies whether this source was successfully charged.
   *   </dd>
   *   <dt>
   *     string [<var>m_surcharge</var>]
   *   </dt>
   *   <dd>
   *     The client-side calculated surcharge.
   *   </dd>
   *   <dt>
   *     string [<var>s_index</var>]
   *   </dt>
   *   <dd>
   *     The index of this form (optional).
   *   </dd>
   *   <dt>
   *     string <var>sid_pay_method</var>
   *   </dt>
   *   <dd>
   *     The payment method ID.
   *   </dd>
   * </dl>
   *
   * @post post
   * @var array[]
   */
  public $a_pay_form = [];

  /**
   * Information about the selected login promotion.
   *
   * <dl>
   *   <dt>
   *     int <var>i_limit</var>
   *   </dt>
   *   <dd>
   *      The visit count limit of the promotion.
   *   </dd>
   *   <dt>
   *     int <var>i_remain</var>
   *   </dt>
   *   <dd>
   *     The count of remaining visits.
   *   </dd>
   *   <dt>
   *     string <var>s_expire</var>
   *   </dt>
   *   <dd>
   *     The expiration date.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     The title of the promotion.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_promotion_data;

  /**
   * Fields refer to strings in the format <tt>id_purchase_item-k_id</tt>. Values refer to an array with the next stricture:
   * <dl>
   *   <dt>
   *     array <var>a_tax</var>
   *   </dt>
   *   <dd>
   *     A list of taxes to apply containing information about taxes.
   *     The array keys are <tt>k_tax</tt> keys. Each element contains the following fields:
   *     <dl>
   *       <dt>
   *         float <var>m_tax</var>
   *       </dt>
   *       <dd>
   *         The tax rate.
   *       </dd>
   *       <dt>
   *         string <var>text_title</var>
   *       </dt>
   *       <dd>
   *         The name of the tax.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string <var>id_purchase_item</var>
   *   </dt>
   *   <dd>
   *     The purchase item ID. One of the {@link WlPurchaseItemSid} constants.
   *   </dd>
   *   <dt>
   *     string <var>k_id</var>
   *   </dt>
   *   <dd>
   *     The value of the discount used for the purchase.
   *   </dd>
   *   <dt>
   *     string <var>m_discount</var>
   *   </dt>
   *   <dd>
   *     The value of the discount used for the purchase.
   *   </dd>
   *   <dt>
   *     string <var>m_pay</var>
   *   </dt>
   *   <dd>
   *     The payment for the promotion (or single visit) without taxes.
   *   </dd>
   *   <dt>
   *     string <var>m_price</var>
   *   </dt>
   *   <dd>
   *     The price of the promotion (or single visit).
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_purchase;

  /**
   * The keys of purchased items.
   *
   * The first level of the array is the list of appointments from the batch.
   * The second level of the array is the list of items purchased for this appointment.
   *
   * @post result
   * @var string[][]|null
   */
  public $a_purchase_item;

  /**
   * The list of quiz response keys.
   * Keys refer to quiz keys.
   * And values refer to response keys.
   *
   * @post post
   * @var array
   */
  public $a_quiz_response = [];

  /**
   * The list of amounts to pay for appointments from the batch, with taxes and without surcharges.
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
  public $k_login_activity_purchase;

  /**
   * The gift card amount.
   *
   * @get result
   * @var string
   */
  public $m_coupon;

  /**
   * The discount amount.
   *
   * @get result
   * @var string
   */
  public $m_discount;

  /**
   * Surcharge amount calculated for credit cards (Virtual Terminal and Card Swiper).
   *
   * @get result
   * @var string
   */
  public $m_surcharge = '0.00';

  /**
   * Surcharge amount calculated for money transfers from account: ACH, Direct Connect.
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
  public $m_tax;

  /**
   * The price of the service, with taxes and without surcharges.
   *
   * @get result
   * @var string
   */
  public $m_total;

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
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>