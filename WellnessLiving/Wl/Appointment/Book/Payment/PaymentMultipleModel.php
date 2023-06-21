<?php

namespace WellnessLiving\Wl\Appointment\Book\Payment;

use WellnessLiving\Wl\Classes\Tab\TabSid;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\WlModelAbstract;

/**
 * Allows to pay an appointment or appointment purchase option for the client.
 *
 * Only difference from {@link PaymentModel} is possibility to pay for a lot of appointments at the same time.
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
   *         ID of item to purchase. One of {@link WlPurchaseItemSid} constants.
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
   *   </dt>
   *   <dt>
   *     int <var>id_class_tab</var>
   *   </dt>
   *   <dd>
   *     "Book now" tab. One of {@link TabSid} constants.
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
   * Copy of <var>$a_book_data</var>.
   *
   * Set this field value in a case of POST request.
   *
   * @post post
   * @var array
   */
  public $a_book_data_post = [];

  /**
   * Payment conditions of booked appointments.
   *
   * Each element is one of {@link WlAppointmentPaySid} constants.
   *
   * @post result
   * @var int[]
   */
  public $a_pay;

  /**
   * A list of payment sources.
   *
   * The value of this field is gathered from the payment form.
   *
   * See {@link \WellnessLiving\Wl\Catalog\Payment\PaymentModel::$a_pay_form} for a detailed description.
   *
   * @post post
   * @var array
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
   *     Purchase item ID. One of {@link \RsPurchaseItemSid} constant.
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
   * Key is a quiz key.
   * Value is a response key.
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
   * ID of source mode. One of {@link \WellnessLiving\Wl\Mode\ModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * The location key.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_location = null;

  /**
   * Kye of activity of purchase is made. Empty if no purchase is made.
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
   * The user's key.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>