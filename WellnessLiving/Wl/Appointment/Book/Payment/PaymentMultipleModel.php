<?php

namespace WellnessLiving\Wl\Appointment\Book\Payment;

use WellnessLiving\WlModelAbstract;

/**
 * Allows to pay an appointment or appointment purchase option for the client.
 *
 * Only difference from {@link \WellnessLiving\Wl\Appointment\Book\Payment\PaymentModel} is possibility to pay for a lot of appointments at the same time.
 *
 * This endpoint using captcha check.
 * To pass captcha need study the documentation by captcha API, there you will find that you need to send a captcha for a specific action.
 * For this API an action is `1064`.
 */
class PaymentMultipleModel extends WlModelAbstract
{
  /**
   * Booking process information:
   * <dl>
   *   <dt>
   *     array[] <var>a_provider</var>
   *   </dt>
   *   <dd>
   *     Batch of appointments to be booked. Each element has values:
   *     <dl>
   *       <dt>
   *         array <var>a_product</var>
   *       </dt>
   *       <dd>
   *         Add-on list.
   *         Keys are add-on keys.
   *         Values are add-on quantity.
   *       </dd>
   *       <dt>
   *         int <var>i_duration</var>
   *       </dt>
   *       <dd>
   *         Asset duration in minutes. Not empty for asset booking only.
   *       </dd>
   *       <dt>
   *         int <var>id_purchase_item</var>
   *       </dt>
   *       <dd>
   *         ID of item to purchase. One of {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid} constants.
   *         Not empty for new options purchase.
   *       </dd>
   *       <dt>
   *         bool <var>is_pay_later</var>
   *       </dt>
   *       <dd>
   *         <tt>true</tt> if customer wants to on visit; <tt>false</tt> if user wants to pay now.
   *       </dd>
   *       <dt>
   *         bool <var>is_purchase_previous</var>
   *       </dt>
   *       <dd>
   *         <tt>true</tt> if purchase option that was selected for another appointment from the batch
   *         must be used for this appointment; <tt>false</tt> otherwise.
   *       </dd>
   *       <dt>
   *         bool <var>is_wait_list_unpaid</var>
   *       </dt>
   *       <dd>
   *         <tt>true</tt> if customer is booking to wait list and don't have to pay;
   *         <tt>false</tt> if customer is booking to active list or wait list should be paid.
   *       </dd>
   *       <dt>
   *         string <var>k_id</var>
   *       </dt>
   *       <dd>
   *         Key of option to purchase.
   *         Not empty for new option purchase.
   *       </dd>
   *       <dt>
   *         string <var>k_login_prize</var>
   *       </dt>
   *       <dd>
   *         Key of customer's prize to pay for booking. Not empty for free booking by prize.
   *       </dd>
   *       <dt>
   *         string <var>k_login_promotion</var>
   *       </dt>
   *       <dd>
   *         Key of already purchased option. Not empty to use already purchase option.
   *       </dd>
   *       <dt>
   *         string <var>k_resource</var>
   *       </dt>
   *       <dd>
   *         Key of booking asset.
   *         Not empty only for asset booking.
   *       </dd>
   *       <dt>
   *         string <var>k_service</var>
   *       </dt>
   *       <dd>
   *         Key of booking appointment.
   *         Not empty only for appointment booking.
   *       </dd>
   *       <dt>
   *         string <var>s_signature</var>
   *       </dt>
   *       <dd>
   *         Signature for purchase option contract.
   *         Data from canvas html element or signature pad.
   *         Not empty only if purchase option requires contract signing.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     int <var>id_class_tab</var>
   *   </dt>
   *   <dd>
   *     "Book now" tab. One of {@link \WellnessLiving\Wl\Classes\Tab\TabSid} constants.
   *   </dd>
   *   <dt>
   *     string <var>m_tip_appointment</var>
   *   </dt>
   *   <dd>
   *     Tips amount.
   *   </dd>
   * </dl>
   *
   * Set this field value in a case of GET request.
   *
   * @get get
   * @var array
   */
  public $a_book_data = [];

  /**
   * Copy of {@link \WellnessLiving\Wl\Appointment\Book\Payment\PaymentMultipleModel::$a_book_data}.
   *
   * Set this field value in a case of POST request.
   *
   * @post post
   * @var array
   */
  public $a_book_data_post = [];

  /**
   * List of redeemed prizes.
   *
   * @post result
   * @var string[]
   */
  public $a_login_prize = [];

  /**
   * Payment type for the appointment, one of {@link \WellnessLiving\Wl\Appointment\WlAppointmentPaySid} constants.
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
   *           <dd>Set this value is <tt>1</tt> to add a new payment address or to <tt>0</tt> to use a saved payment address.</dd>
   *           <dt>string [<var>k_geo_country</var>]</dt>
   *           <dd>The key of the country used for the payment address. Specify to add a new address.</dd>
   *           <dt>string [<var>k_geo_region</var>]</dt>
   *           <dd>The key of the region for the payment address. Specify to add a new address.</dd>
   *           <dt>string [<var>k_pay_address</var>]</dt>
   *           <dd>The key of the saved payment address. Specify to use a saved address.</dd>
   *           <dt>string [<var>s_city</var>]</dt>
   *           <dd>The city used for the payment address. Specify to add a new address.</dd>
   *           <dt>string [<var>s_name</var>]</dt>
   *           <dd>The card name. Specify to add a new address.</dd>
   *           <dt>string [<var>s_phone</var>]</dt>
   *           <dd>The payment phone. Specify to add a new address.</dd>
   *           <dt>string [<var>s_postal</var>]</dt>
   *           <dd>The postal code for the payment address. Specify to add a new address.</dd>
   *           <dt>string [<var>s_street1</var>]</dt>
   *           <dd>The payment address. Specify to add a new address.</dd>
   *           <dt>string [<var>s_street2</var>]</dt>
   *           <dd>The optional payment address. Specify to add a new address.</dd>
   *         </dl>
   *       </dd>
   *       <dt>
   *         int [<var>i_csc</var>]
   *       </dt>
   *       <dd>
   *         The credit card CSC. Specify to add a new card.
   *       </dd>
   *       <dt>
   *         int [<var>i_month</var>]
   *       </dt>
   *       <dd>
   *         The credit card expiration month. Specify to add a new card.
   *       </dd>
   *       <dt>
   *         int [<var>i_year</var>]
   *       </dt>
   *       <dd>
   *         The credit card expiration year. Specify to add a new card.
   *       </dd>
   *       <dt>
   *         boolean <var>is_new</var>
   *       </dt>
   *       <dd>
   *         <tt>1</tt> to add a new card; <tt>0</tt> to use a saved card.
   *       </dd>
   *       <dt>
   *         string [<var>k_pay_bank</var>]
   *       </dt>
   *       <dd>
   *         The key of a credit card. Specify to use saved card.
   *       </dd>
   *       <dt>
   *         string [<var>s_comment</var>]
   *       </dt>
   *       <dd>
   *         Optional comment(s). Specify to add a new card.
   *       </dd>
   *       <dt>
   *         string [<var>s_number</var>]
   *       </dt>
   *       <dd>
   *         The card number. Specify to add a new card.
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
   *     Whether this payment method is hidden.
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
   * Information about selected login promotion.
   *
   * <dl>
   *   <dt>
   *     int <var>i_limit</var>
   *   </dt>
   *   <dd>
   *      Limit on the visit count of the promotion.
   *   </dd>
   *   <dt>
   *     int <var>i_remain</var>
   *   </dt>
   *   <dd>
   *     Count of remaining visits.
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
   *     The title of promotion.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_promotion_data;

  /**
   * Fields - string in format <tt>id_purchase_item-k_id</tt>. Values - array with next stricture:
   * <dl>
   *   <dt>
   *     array <var>a_tax</var>
   *   </dt>
   *   <dd>
   *     Contains information about taxes in the following format. A list of taxes to apply. The array keys are <tt>k_tax</tt> keys. Each element contains the following fields:
   *     <dl>
   *       <dt>
   *         float <var>m_tax</var>
   *       </dt>
   *       <dd>
   *         Tax rate.
   *       </dd>
   *       <dt>
   *         string <var>text_title</var>
   *       </dt>
   *       <dd>
   *         Name of the tax.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string <var>id_purchase_item</var>
   *   </dt>
   *   <dd>
   *     Purchase item ID. One of {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid} constant.
   *   </dd>
   *   <dt>
   *     string <var>k_id</var>
   *   </dt>
   *   <dd>
   *     The value of the discount used for purchase.
   *   </dd>
   *   <dt>
   *     string <var>m_discount</var>
   *   </dt>
   *   <dd>
   *     The value of the discount used for purchase.
   *   </dd>
   *   <dt>
   *     string <var>m_pay</var>
   *   </dt>
   *   <dd>
   *     The payment for the promotion or single visit without taxes.
   *   </dd>
   *   <dt>
   *     string <var>m_price</var>
   *   </dt>
   *   <dd>
   *     The price of the promotion or single visit.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_purchase;

  /**
   * Keys of purchased items.
   *
   * 1st level array is list of appointments from batch.
   * 2nd level array is list of items purchased for this appointment.
   *
   * @post result
   * @var string[][]|null
   */
  public $a_purchase_item;

  /**
   * List of quiz response keys.
   * Key is quiz key.
   * Value is response key.
   *
   * @post post
   * @var array
   */
  public $a_quiz_response = [];

  /**
   * List of amount to pay for appointments from batch with the tax without surcharge.
   *
   * @get result
   * @var string[]
   */
  public $a_total;

  /**
   * List of user keys to book appointments - primary keys in {@link \PassportLoginSql}.
   * There may be empty values in this list, which means that this is a walk-in.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * ID of source mode. One of {@link \WellnessLiving\Wl\Mode\ModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * `true` if client is walk-in, otherwise `false`.
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
   * Key of activity of purchase is made. Empty if no purchase is made.
   *
   * @post result
   * @var string
   */
  public $k_login_activity_purchase;

  /**
   * Gift card amount.
   *
   * @get result
   * @var string
   */
  public $m_coupon;

  /**
   * Discount amount.
   *
   * @get result
   * @var string
   */
  public $m_discount;

  /**
   * Surcharge amount.
   *
   * @get result
   * @var string
   */
  public $m_surcharge;

  /**
   * The amount of tax to pay.
   *
   * @get result
   * @var string
   */
  public $m_tax;

  /**
   * The price of service with the tax without surcharge.
   *
   * @get result
   * @var string
   */
  public $m_total;

  /**
   * Gift card code.
   *
   * @get get
   * @post get
   * @var string
   */
  public $text_coupon_code = '';

  /**
   * Discount code.
   *
   * @get get
   * @post get
   * @var string
   */
  public $text_discount_code = '';

  /**
   * User to get information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>