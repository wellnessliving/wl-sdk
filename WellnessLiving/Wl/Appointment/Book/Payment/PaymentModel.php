<?php

namespace WellnessLiving\Wl\Appointment\Book\Payment;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that displays information about payments for an appointment.
 * The POST method for this endpoint is implemented as a separate endpoint (see
 * {@link \WellnessLiving\Wl\Appointment\Book\Payment\PaymentPostModel}).
 *
 * This endpoint using captcha check.
 * To pass captcha need study the documentation by captcha API, there you will find that you need to send a captcha for a specific action.
 * For this API an action is {@link Wl\Business\BusinessPaymentCaptcha::CID}.
 *
 * @deprecated Use {@link \WellnessLiving\Wl\Appointment\Book\Payment\PaymentPostModel} instead.
 */
class PaymentModel extends WlModelAbstract
{
  /**
   * Information detailing an appointment booking.
   *
   * @get get
   * @post get
   * @var array
   */
  public $a_book_data = [];

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
   * Information about selected Purchase Options.
   * <dl>
   *   <dt>string <var>i_limit</var></dt>
   *   <dd>The limit of total visits.</dd>
   *
   *   <dt>int <var>i_remain</var></dt>
   *   <dd>The number of remaining visits.</dd>
   *
   *   <dt>string <var>s_expire</var></dt>
   *   <dd>The expiration date.</dd>
   *
   *   <dt>string <var>s_title</var></dt>
   *   <dd>The title of the Purchase Option.</dd>
   * </dl>
   *
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
   *   <dt>array <var>a_tax</var></dt>
   *   <dd>
   *     Contains information about taxes in the following format. A list of taxes to apply.
   *     The array keys are `k_tax` keys. Each element contains the following fields: <dl>
   *       <dt>float <var>m_tax</var></dt>
   *       <dd>The tax rate.</dd>
   *
   *       <dt>string <var>text_title</var></dt>
   *       <dd>The name of the tax.</dd>
   *     </dl>
   *   </dd>
   *
   *   <dt>string <var>id_purchase_item</var></dt>
   *   <dd>The purchase item ID. A constant of {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid}.</dd>
   *
   *   <dt>string <var>k_id</var></dt>
   *   <dd>The value of the discount used for the purchase.</dd>
   *
   *   <dt>string <var>m_discount</var></dt>
   *   <dd>The value of the discount used for the purchase.</dd>
   *
   *   <dt>string <var>m_pay</var></dt>
   *   <dd>The payment for the Purchase Option or single visit without taxes.</dd>
   *
   *   <dt>string <var>m_price</var></dt>
   *   <dd>The price of the Purchase Option or single visit.</dd>
   * </dl>
   *
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
   * Key is quiz key from {@link \Core\Quiz\QuizSql} table.
   * Value is response key from {@link \Core\Quiz\Response\ResponseSql} table.
   *
   * @post post
   * @var array
   */
  public $a_quiz_response = [];

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
   * The key of source mode. A constant of {@link \WellnessLiving\Wl\Mode\ModeSid}.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * The payment type for the appointment. A constant of {@link \WellnessLiving\Wl\Appointment\WlAppointmentPaySid}.
   *
   * @post result
   * @var int
   */
  public $id_pay;

  /**
   * The purchase item ID. A constant of {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid}.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_purchase_item = 0;

  /**
   * `true` if client is walk-in, otherwise `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * The item key. Depends of {@link \WellnessLiving\Wl\Appointment\Book\Payment\PaymentModel::$id_purchase_item} property.
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
   * Surcharge amount.
   *
   * @get result
   * @var string
   */
  public $m_surcharge = '0.00';

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
   *   {@link \WellnessLiving\RsServicePriceSid::VARIES} from spa backend {@link \WellnessLiving\Wl\Mode\ModeSid::SPA_BACKEND}.
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
   * User to get information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>