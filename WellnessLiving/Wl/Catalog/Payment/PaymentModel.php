<?php

namespace WellnessLiving\Wl\Catalog\Payment;

use WellnessLiving\WlModelAbstract;

/**
 * Model to purchase an item and perform the payment in the online store.
 *
 * This endpoint using captcha check.
 * To pass captcha need study the documentation by captcha API, there you will find that you need to send a captcha for a specific action.
 * For this API an action is {@link Wl\Business\BusinessPaymentCaptcha::CID}.
 */
class PaymentModel extends WlModelAbstract
{
  /**
   * Commission which staff earns for this purchase. If not empty, has next fields: <dl>
   *   <dt>string <var>k_staff</var></dt>
   *   <dd>Staff key.</dd>
   *   <dt>string <var>k_staff_pay</var></dt>
   *   <dd>Payment schema key.</dd>
   * </dl>
   *
   * @post get
   * @var array
   */
  public $a_commission = [];

  /**
   * The list of items in the cart.
   *
   * This parameter is required.
   *
   * Every element must have the following keys:
   * <dl>
   *   <dt>
   *     array [<var>a_config</var>]
   *   </dt>
   *   <dd>
   *     Additional configuration information. May contain the next keys:
   *     <dl>
   *       <dt>
   *         array [<var>a_quick_gift</var>]
   *       </dt>
   *       <dd>
   *         A list of components to be added to the client. For quick gift cards only: <dl>
   *         <dt>int <var>i_count</var></dt>
   *         <dd>The quantity of elements.</dd>
   *         <dt>int <var>id_purchase_item</var></dt>
   *         <dd>The purchase type of the element. One of {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid} constants.</dd>
   *         <dt>string <var>k_id</var></dt>
   *         <dd>The primary key of the element depends on type of the element.</dd></dl>
   *       </dd>
   *       <dt>
   *         array [<var>a_wellness_program</var>]
   *       </dt>
   *       <dd>
   *          "Wellness Program" fields.
   *
   *          <var>k_wellness_program</var> must be passed along with this array. See description below.
   *
   *          <dl>
   *            <dt>array <var>a_account</var></dt>
   *            <dd>See {@link \WellnessLiving\Wl\Insurance\Enrollment\Field\EnrollmentFieldListModel::$a_account} for a full description.</dd>
   *            <dt>array <var>a_field</var></dt>
   *            <dd>See {@link \WellnessLiving\Wl\Insurance\Enrollment\Field\EnrollmentFieldListModel::$a_field} for a full description.</dd>
   *          </dl>
   *
   *          It's recommended to validate the fields using the POST method of the {@link \WellnessLiving\Wl\Insurance\Enrollment\Field\EnrollmentFieldListModel} model.
   *       </dd>
   *       <dt>
   *         string [<var>dt_prorate</var>]
   *       </dt>
   *       <dd>
   *         The prorate date. For memberships only.
   *       </dd>
   *       <dt>
   *         string [<var>dt_send_local</var>]
   *       </dt>
   *       <dd>
   *         The date when the gift card will be sent. This is used for gift cards only.
   *       </dd>
   *       <dt>
   *         string [<var>dt_start</var>]
   *       </dt>
   *       <dd>
   *         The start date. For memberships only.
   *       </dd>
   *       <dt>
   *         bool [<var>is_prorate</var>]
   *       </dt>
   *       <dd>
   *         If set to `1` then this purchase will use the prorate rule. Set to `0` otherwise. For memberships only.
   *       </dd>
   *       <dt>
   *         bool [<var>is_prorate_fix</var>]
   *       </dt>
   *       <dd>
   *         If set to `1` then use the custom prorate amount. Set to `0` otherwise. For memberships only.
   *       </dd>
   *       <dt>
   *         bool [<var>is_prorate_only</var>]
   *       </dt>
   *       <dd>
   *         If set to `1` this purchase is prorate only. Set to `0` otherwise. For memberships only.
   *       </dd>
   *       <dt>
   *         bool [<var>is_renew</var>]
   *       </dt>
   *       <dd>
   *         Setting this to `1` will enable auto-renew for the item. Set to `0` otherwise. For memberships/passes only.
   *       </dd>
   *       <dt>
   *         string [<var>k_appointment</var>]
   *       </dt>
   *       <dd>
   *         The appointment key. For appointment add-ons only.
   *       </dd>
   *       <dt>
   *         string [<var>k_coupon_amount</var>]
   *       </dt>
   *       <dd>
   *         The key of the gift card amount. For gift cards only.
   *       </dd>
   *       <dt>
   *         string [<var>k_staff</var>]
   *       </dt>
   *       <dt>
   *         string [<var>k_wellness_program</var>]
   *       </dt>
   *       <dd>
   *          The "Wellness Program" key. Set for insurance membership promotion.
   *
   *          <var>a_wellness_program</var> array must be passed along with the key. See the array description above.
   *
   *          <p>Use the following models to work with this type of promotion:</p>
   *          <ul>
   *            <li>{@link \WellnessLiving\Wl\Insurance\Catalog\ProgramListModel} to obtain list of active programs.</li>
   *            <li>{@link \WellnessLiving\Wl\Insurance\Enrollment\Field\EnrollmentFieldListModel} to get and validate fields for a given program.</li>
   *          </ul>
   *       </dd>
   *       <dd>
   *         The staff member key (for appointment tips only).
   *       </dd>
   *       <dt>
   *         string [<var>m_prorate_custom</var>]
   *       </dt>
   *       <dd>
   *         The custom prorate price. For memberships only. This is only used if <var>is_prorate_fix</var> is true.
   *       </dd>
   *       <dt>
   *         string [<var>s_code</var>]
   *       </dt>
   *       <dd>
   *         The gift card code. This is required for gift cards.
   *       </dd>
   *       <dt>
   *         string [<var>s_image</var>]
   *       </dt>
   *       <dd>
   *         The key of an image for a gift card. If empty, the first of the business's gift card images will be used (specify for gift cards only).
   *       </dd>
   *       <dt>
   *         string [<var>s_mail</var>]
   *       </dt>
   *       <dd>
   *         The gift card receiver email. This is required for gift cards.
   *       </dd>
   *       <dt>
   *         string [<var>s_recipient</var>]
   *       </dt>
   *       <dd>
   *         The gift card receiver name. This is required for gift cards.
   *       </dd>
   *       <dt>
   *         string [<var>s_sender</var>]
   *       </dt>
   *       <dd>
   *         The gift card sender name. This is required for gift cards.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     array[] [<var>a_tax_custom</var>]
   *   </dt>
   *   <dd>
   *     Customer taxes (optional). Every element must contain the following keys:
   *     <dl><dt>string <var>f_tax</var></dt><dd>The tax amount.</dd>
   *     <dt>string <var>k_tax</var></dt><dd>The tax key.</dd></dl>
   *   </dd>
   *   <dt>
   *     string [<var>html_contract</var>]
   *   </dt>
   *   <dd>
   *     The contract text. Required for items that require contract signing only.
   *   </dd>
   *   <dt>
   *     int <var>i_quantity</var>
   *   </dt>
   *   <dd>
   *     The quantity.
   *   </dd>
   *   <dt>
   *     int <var>id_sale</var>
   *   </dt>
   *   <dd>
   *     The ID of item type. One of {@link \WellnessLiving\WlSaleSid} constants.
   *   </dd>
   *   <dt>
   *     string <var>k_id</var>
   *   </dt>
   *   <dd>
   *     The key of the item.
   *   </dd>
   *   <dt>
   *     string [<var>k_shop_product_option</var>]
   *   </dt>
   *   <dd>
   *     The key of the product option (required for products only).
   *   </dd>
   *   <dt>
   *     string [<var>m_price_custom</var>]
   *   </dt>
   *   <dd>
   *     The custom price (optional).
   *   </dd>
   *   <dt>
   *     string <var>[s_signature]</var>
   *   </dt>
   *   <dd>
   *     The client signature. This is only used for items that require a signed contract.
   *   </dd>
   * </dl>
   *
   * @post post
   * @var array[]
   */
  public $a_item = [];

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
   * List of quiz response keys.
   * Key is a quiz key.
   * Value is response or special value from {@link Wl\Quiz\Response\QuizResponse::RESPONSE_SKIP} constant.
   *
   * @post post
   * @var array
   */
  public $a_quiz_response = [];

  /**
   * The discount as a percentage. Optional.
   *
   * @post post
   * @var float
   */
  public $f_discount_percent = 0;

  /**
   * The WellnessLiving mode type, one of the {@link \WellnessLiving\Wl\Mode\ModeSid} constants (required).
   *
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * The payment owner is an anonymous user. Optional.
   *
   * @post get
   * @var bool
   */
  public $is_guest = false;

  /**
   * Set if the operations are performed under the staff member. Optional.
   *
   * @post get
   * @var bool
   */
  public $is_staff = false;

  /**
   * The business key. Required.
   *
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * The location key. Required.
   *
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * Key of login activity.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post result
   * @var string|null
   */
  public $k_login_activity;

  /**
   * The installment template key.
   * This property is optional. <tt>null</tt> if the installment plan doesn't exist or isn't set for the purchased item.
   *
   * @post post
   * @var string
   */
  public $k_pay_installment_template;

  /**
   * The key of the purchase that was created during payment.
   *
   * @post result
   * @var string
   */
  public $k_purchase;

  /**
   * The key of the visit to be paid. Optional.
   *
   * @post post
   * @var string
   */
  public $k_visit = '0';

  /**
   * The amount of money to discount. Optional.
   *
   * @post post
   * @var string
   */
  public $m_discount_flat = '0';

  /**
   * Manual surcharge amount.
   *
   * Empty string means automatic surcharge amount.
   *
   * @post post
   * @var string
   */
  public $m_surcharge;

  /**
   * The tip amount. Optional.
   *
   * @post post
   * @var string
   */
  public $m_tip = '0';

  /**
   * The discount code. Optional.
   *
   * @post post
   * @var string
   */
  public $text_discount_code = '';

  /**
   * Custom receipt note.
   *
   * @post post
   * @var string
   */
  public $text_receipt_note = '';

  /**
   * The user's key. Required.
   *
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>