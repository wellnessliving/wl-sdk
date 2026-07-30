<?php

namespace WellnessLiving\Wl\Catalog\Payment;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Business\BusinessPaymentCaptcha;
use WellnessLiving\Wl\Insurance\Catalog\ProgramListModel;
use WellnessLiving\Wl\Insurance\Enrollment\Field\EnrollmentFieldListModel;
use WellnessLiving\Wl\Mode\ModeSid;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\WlSaleSid;

/**
 * Purchases an item and performs the payment in the store.
 *
 * This endpoint uses a CAPTCHA check. To pass the CAPTCHA, consult the CAPTCHA API documentation.
 * The documentation specifies that a captcha must be sent for a specific action.
 *
 * For this API an action is {@link BusinessPaymentCaptcha::CID}.
 *
 * @method WlModelRequest post() Allows to pay items for the client.  The checkout endpoint that finalizes a purchase in the client-facing store. Charges the client's selected payment method, applies any discounts and tips, and creates the purchase record. Returns the resulting purchase key so the frontend can redirect to the confirmation page.
 */
class PaymentModel extends WlModelAbstract
{
  /**
   * The staff commission earned for this purchase. If this isn't empty, it has the next fields: 
   *
   * <dl>
   *   <dt>string `uid_staff`</dt>
   *   <dd>The staff user ID. </dd>
   * 
   *   <dt>string `k_staff`</dt>
   *   <dd><b>Deprecated!</b>
   *   Staff key. </dd>
   * 
   *   <dt>string `k_staff_pay`</dt>
   *   <dd>The payment schema key.</dd>
   * </dl>
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
   *
   * <dl>
   *   <dt>array `a_config`</dt>
   *   <dd>
   *     Additional configuration information. This may contain the next keys:
   *     <dl>
   *       <dt>array `a_event_list`</dt>
   *       <dd>
   *         List of tuition events. Used only for {@link WlSaleSid::TUITION}.
   * Each entry has the next structure:
   *         <dl>
   *           <dt>array `a_discount`</dt>
   *           <dd>
   *             Discount applied to the event price.
   * Staff-only: ignored when sent by a client.
   *             <dl>
   *               <dt>string `m_discount`</dt>
   *               <dd>Discount amount.</dd>
   * 
   *               <dt>string `text_discount`</dt>
   *               <dd>Discount title.</dd>
   *             </dl>
   *           </dd>
   * 
   *           <dt>array `a_tax`</dt>
   *           <dd>
   *             List of taxes to be applied to the event price.
   * Keys are tax keys. 
   * Values are tax amounts. If not specified, taxes are calculated based on class setup.
   * Staff-only: ignored when sent by a client.
   *           </dd>
   * 
   *           <dt>string `k_class`</dt>
   *           <dd>Key of the event class. </dd>
   * 
   *           <dt>string `m_checkout`</dt>
   *           <dd>
   *             The amount charged for this event at checkout. Staff-only: ignored when sent by a client.
   * When provided for all events in the list, per-event amounts are used as-is without
   * aggregate redistribution, allowing a non-uniform distribution across events (Mode 2).
   * If omitted for any event, falls back to item-level `m_checkout` redistribution.
   *           </dd>
   * 
   *           <dt>string `m_price`</dt>
   *           <dd>
   *             Price of the event for the tuition participant.
   * If not specified, price is calculated based on class setup.
   * Staff-only: ignored when sent by a client.
   *           </dd>
   * 
   *           <dt>string `uid`</dt>
   *           <dd>Key of the tuition participant. </dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array `a_quick_gift`</dt>
   *       <dd>
   *         A list of components to be added to the client. For quick gift cards only:
   *         <dl>
   *           <dt>int `i_count`</dt>
   *           <dd>The quantity of elements.</dd>
   * 
   *           <dt>int `id_purchase_item`</dt>
   *           <dd>The purchase type of the element. One of the {@link WlPurchaseItemSid} constants.</dd>
   * 
   *           <dt>string `k_id`</dt>
   *           <dd>
   *             The primary key of the element, depending on the element type.
   * Pay attention that if you add a product into gift card, there must be specified not product key but product option key.
   * Do not specify separate field `k_shop_product_option`.
   *           </dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array `a_registration_fee_list`</dt>
   *       <dd>
   *         Registration fees for tuition participants. Used only for `id_sale` = {@link WlSaleSid::TUITION}.
   * Keys are participant keys. 
   * Staff-only: ignored when sent by a client.
   * Each value has the next structure:
   *         <dl>
   *           <dt>array `a_discount`</dt>
   *           <dd>
   *             Manual discount applied to the registration fee.
   *             <dl>
   *               <dt>string `m_discount`</dt>
   *               <dd>Discount amount.</dd>
   * 
   *               <dt>string `text_discount`</dt>
   *               <dd>Discount title.</dd>
   *             </dl>
   *           </dd>
   * 
   *           <dt>array `a_tax`</dt>
   *           <dd>
   *             List of taxes to be applied to the registration fee.
   * Keys are tax keys. 
   * Values are tax amounts.
   *           </dd>
   * 
   *           <dt>string `m_amount`</dt>
   *           <dd>Registration fee amount for the tuition participant.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string[] `a_uid_share`</dt>
   *       <dd>An array of UIDs representing the client's relatives that share the Purchase Option.</dd>
   * 
   *       <dt>array `a_wellness_program`</dt>
   *       <dd>
   *         "Wellness Program" fields.
   * <var>k_wellness_program</var> must be passed along with this array. See the description below.
   * 
   * It's recommended to validate the fields using the POST method of the {@link EnrollmentFieldListModel} model.
   *         <dl>
   *           <dt>array `a_account`</dt>
   *           <dd>
   *             The list of reimbursement account field values.
   * Corresponds to the `a_account` list in {@link EnrollmentFieldListModel::$a_field_list}.
   * Each element:
   *             <dl>
   *               <dt>string `k_field`</dt>
   *               <dd>The field key identifying the account field.</dd>
   * 
   *               <dt>string `text_value`</dt>
   *               <dd>The submitted value for the field.</dd>
   *             </dl>
   *           </dd>
   * 
   *           <dt>array `a_field`</dt>
   *           <dd>
   *             The list of wellness program field values.
   * Corresponds to the `a_field` list in {@link EnrollmentFieldListModel::$a_field_list}.
   * Each element:
   *             <dl>
   *               <dt>string `k_field`</dt>
   *               <dd>The field key identifying the program field.</dd>
   * 
   *               <dt>string `text_value`</dt>
   *               <dd>The submitted value for the field.</dd>
   *             </dl>
   *           </dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dt_prorate`</dt>
   *       <dd>The prorate date, used only for memberships.</dd>
   * 
   *       <dt>string `dt_send_local`</dt>
   *       <dd>The date when the gift card will be sent. This is only used for gift cards.</dd>
   * 
   *       <dt>string `dt_start`</dt>
   *       <dd>The start date, used only for memberships.</dd>
   * 
   *       <dt>bool `is_pay_when_start`</dt>
   *       <dd>
   *         If `true`, the client won't be charged for this item until its start date. Otherwise, this will be `false`.
   * The Purchase Option must have a specified start date.
   *       </dd>
   * 
   *       <dt>bool `is_prorate`</dt>
   *       <dd>
   *         If this is set to `1`, this purchase will use the prorate rule. Otherwise, set this to `0`. This is only used for memberships.
   *       </dd>
   * 
   *       <dt>bool `is_prorate_fix`</dt>
   *       <dd>
   *         If this is set to `1`, the custom prorate amount will be used. Otherwise, set this to `0`. This is only used for memberships.
   *       </dd>
   * 
   *       <dt>bool `is_prorate_only`</dt>
   *       <dd>
   *         If this is set to `1`, this purchase is prorate only. Otherwise, set this to `0`. This is only used for memberships.
   *       </dd>
   * 
   *       <dt>bool `is_renew`</dt>
   *       <dd>
   *         If this is set to `1`, auto-renew will be enabled for the item. Otherwise, set this to `0`. This is only used for memberships.
   *       </dd>
   * 
   *       <dt>string `k_appointment`</dt>
   *       <dd>The appointment key, used only for appointment add-ons.</dd>
   * 
   *       <dt>string `k_coupon_amount`</dt>
   *       <dd>The key of the gift card amount, used only for gift cards.</dd>
   * 
   *       <dt>string `k_staff`</dt>
   *       <dd>
   *         <b>Deprecated!</b>
   *  The staff member key, used only for appointment tips.
   *  
   *       </dd>
   * 
   *       <dt>string `k_wellness_program`</dt>
   *       <dd>
   *         The "Wellness Program" key. Set this for the insurance membership promotion.
   * <var>a_wellness_program</var> array must be passed along with the key. See the array description above.
   * <p>Use the following models to work with this type of promotion:</p>
   * <ul>
   *   <li>{@link ProgramListModel} to obtain list of active programs.</li>
   *   <li>{@link EnrollmentFieldListModel} to get and validate fields for a given program.</li>
   * </ul>
   *       </dd>
   * 
   *       <dt>string `m_checkout`</dt>
   *       <dd>
   *         Staff-only: ignored when sent by a client.
   * Total amount to charge for the tuition item at checkout (Mode 1). Distributed
   * proportionally across `a_event_list` entries based on their own final cost.
   * Ignored when all entries in `a_event_list` already contain `m_checkout` values (Mode 2).
   * 
   *       </dd>
   * 
   *       <dt>string `m_prorate_custom`</dt>
   *       <dd>
   *         The custom prorate price, used only for memberships. This is only used if <var>is_prorate_fix</var> is <tt>true</tt>.
   *       </dd>
   * 
   *       <dt>string `s_code`</dt>
   *       <dd>The gift card code. This is required for gift cards.</dd>
   * 
   *       <dt>string `s_image`</dt>
   *       <dd>
   *         The key of the image for the gift card. If empty, the business's first gift card image will be used. Specify this only for gift cards.
   *       </dd>
   * 
   *       <dt>string `s_mail`</dt>
   *       <dd>The gift card receiver email. This is required for gift cards.</dd>
   * 
   *       <dt>string `s_recipient`</dt>
   *       <dd>The gift card receiver name. This is required for gift cards.</dd>
   * 
   *       <dt>string `s_sender`</dt>
   *       <dd>The gift card sender name. This is required for gift cards.</dd>
   * 
   *       <dt>string `uid_staff`</dt>
   *       <dd>The staff member user ID, used only for appointment tips.</dd>
   * 
   *       <dt>string `uid_to`</dt>
   *       <dd>Specifies the recipient of a transfer Purchase Option.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_tax_custom`</dt>
   *   <dd>
   *     Customer taxes (optional). Every element must contain the following keys:
   *     <dl>
   *       <dt>string `f_tax`</dt>
   *       <dd>The tax amount.</dd>
   * 
   *       <dt>string `k_tax`</dt>
   *       <dd>The tax key.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `i_quantity`</dt>
   *   <dd>The item quantity.</dd>
   * 
   *   <dt>int `id_sale`</dt>
   *   <dd>The item type ID. One of the {@link WlSaleSid} constants.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>The item key.</dd>
   * 
   *   <dt>string `k_login_prize`</dt>
   *   <dd>The key of the login prize to apply a login prize discount.</dd>
   * 
   *   <dt>string `k_shop_product_option`</dt>
   *   <dd>The product option key, required only for products.</dd>
   * 
   *   <dt>string `m_price_custom`</dt>
   *   <dd>The custom price (optional).</dd>
   * 
   *   <dt>string `s_signature`</dt>
   *   <dd>The client signature, used for items that require a signed contract.</dd>
   * </dl>
   * @post post
   * @var array[]
   */
  public $a_item = [];

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
   * The list of quiz response keys.
   * Keys refer to quiz keys. 
   * And values refer to responses. 
   *
   * @post post
   * @var string[]
   */
  public $a_quiz_response = [];

  /**
   * The percentage discount (optional).
   *
   * @post post
   * @var float
   */
  public $f_discount_percent = 0;

  /**
   * The WellnessLiving mode type (required). One of the {@link ModeSid} constants.
   *
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * Determines if the payment owner is an anonymous user (optional).
   *
   * @post get
   * @var bool
   */
  public $is_guest = false;

  /**
   * Specify this if operations are performed by the staff member (optional).
   *
   * @post get
   * @var bool
   */
  public $is_staff = false;

  /**
   * The business key (required).
   *
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * The location key (required).
   *
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * The key of login activity.
   *
   * This will be `null` if not set yet.
   *
   * @post result
   * @var string|null
   */
  public $k_login_activity = null;

  /**
   * The installment template key (optional).
   * This will be `null` if the installment plan doesn't exist or isn't set for the purchased item.
   *
   * @post post
   * @var string
   */
  public $k_pay_installment_template;

  /**
   * The purchase key created during payment.
   *
   * @post result
   * @var string
   */
  public $k_purchase;

  /**
   * The visit key to be paid (optional).
   *
   * @post post
   * @var string
   */
  public $k_visit = '0';

  /**
   * The amount to discount (optional).
   *
   * @post post
   * @var string
   */
  public $m_discount_flat = '0';

  /**
   * The manual surcharge amount.
   *
   * An empty string represents an automatic surcharge amount.
   *
   * @post post
   * @var string
   */
  public $m_surcharge;

  /**
   * The tip amount (optional).
   *
   * @post post
   * @var string
   */
  public $m_tip = '0';

  /**
   * The discount code (optional).
   *
   * @post post
   * @var string
   */
  public $text_discount_code = '';

  /**
   * The custom receipt note.
   *
   * @post post
   * @var string
   */
  public $text_receipt_note = '';

  /**
   * The user's key (required).
   *
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>