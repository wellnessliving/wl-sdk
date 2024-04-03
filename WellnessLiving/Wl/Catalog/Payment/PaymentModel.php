<?php

namespace WellnessLiving\Wl\Catalog\Payment;

use WellnessLiving\WlModelAbstract;
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
 */
class PaymentModel extends WlModelAbstract
{
  /**
   * The staff commission earned for this purchase. If this isn't empty, it has the next fields: <dl>
   *   <dt>string <var>k_staff</var></dt>
   *   <dd>The staff key.</dd>
   *   <dt>string <var>k_staff_pay</var></dt>
   *   <dd>The payment schema key.</dd>
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
   *     Additional configuration information. This may contain the next keys:
   *     <dl>
   *       <dt>
   *         array [<var>a_quick_gift</var>]
   *       </dt>
   *       <dd>
   *         A list of components to be added to the client. For quick gift cards only: <dl>
   *         <dt>int <var>i_count</var></dt>
   *         <dd>The quantity of elements.</dd>
   *         <dt>int <var>id_purchase_item</var></dt>
   *         <dd>The purchase type of the element. One of the {@link WlPurchaseItemSid} constants.</dd>
   *         <dt>string <var>k_id</var></dt>
   *         <dd>The primary key of the element, depending on the element type.</dd></dl>
   *       </dd>
   *       <dt>
   *         array [<var>a_uid_share</var>]
   *       </dt>
   *       <dd>
   *         An array of UIDs representing the client's relatives that share the Purchase Option.
   *       </dd>
   *       <dt>
   *         array [<var>a_wellness_program</var>]
   *       </dt>
   *       <dd>
   *          "Wellness Program" fields.
   *
   *          <var>k_wellness_program</var> must be passed along with this array. See the description below.
   *
   *          <dl>
   *            <dt>array <var>a_account</var></dt>
   *            <dd>See {@link EnrollmentFieldListModel::$a_account} for a full description.</dd>
   *            <dt>array <var>a_field</var></dt>
   *            <dd>See {@link EnrollmentFieldListModel::$a_field} for a full description.</dd>
   *          </dl>
   *
   *          It's recommended to validate the fields using the POST method of the {@link EnrollmentFieldListModel} model.
   *       </dd>
   *       <dt>
   *         string [<var>dt_prorate</var>]
   *       </dt>
   *       <dd>
   *         The prorate date, used only for memberships.
   *       </dd>
   *       <dt>
   *         string [<var>dt_send_local</var>]
   *       </dt>
   *       <dd>
   *         The date when the gift card will be sent. This is only used for gift cards.
   *       </dd>
   *       <dt>
   *         string [<var>dt_start</var>]
   *       </dt>
   *       <dd>
   *         The start date, used only for memberships.
   *       </dd>
   *       <dt>
   *         bool [<var>is_pay_when_start</var>]
   *       </dt>
   *       <dd>
   *         If `true`, the client won't be charged for this item until its start date. Otherwise, this will be `false`.
   *         The Purchase Option must have a specified start date.
   *       </dd>
   *       <dt>
   *         bool [<var>is_prorate</var>]
   *       </dt>
   *       <dd>
   *         If this is set to `1`, this purchase will use the prorate rule. Otherwise, set this to `0`. This is only used for memberships.
   *       </dd>
   *       <dt>
   *         bool [<var>is_prorate_fix</var>]
   *       </dt>
   *       <dd>
   *         If this is set to `1`, the custom prorate amount will be used. Otherwise, set this to `0`. This is only used for memberships.
   *       </dd>
   *       <dt>
   *         bool [<var>is_prorate_only</var>]
   *       </dt>
   *       <dd>
   *         If this is set to `1`, this purchase is prorate only. Otherwise, set this to `0`. This is only used for memberships.
   *       </dd>
   *       <dt>
   *         bool [<var>is_renew</var>]
   *       </dt>
   *       <dd>
   *         If this is set to `1`, auto-renew will be enabled for the item. Otherwise, set this to `0`. This is only used for memberships.
   *       </dd>
   *       <dt>
   *         string [<var>k_appointment</var>]
   *       </dt>
   *       <dd>
   *         The appointment key, used only for appointment add-ons.
   *       </dd>
   *       <dt>
   *         string [<var>k_coupon_amount</var>]
   *       </dt>
   *       <dd>
   *         The key of the gift card amount, used only for gift cards.
   *       </dd>
   *       <dt>
   *         string [<var>k_staff</var>]
   *       </dt>
   *       <dt>
   *         string [<var>k_wellness_program</var>]
   *       </dt>
   *       <dd>
   *          The "Wellness Program" key. Set this for the insurance membership promotion.
   *
   *          <var>a_wellness_program</var> array must be passed along with the key. See the array description above.
   *
   *          <p>Use the following models to work with this type of promotion:</p>
   *          <ul>
   *            <li>{@link ProgramListModel} to obtain list of active programs.</li>
   *            <li>{@link EnrollmentFieldListModel} to get and validate fields for a given program.</li>
   *          </ul>
   *       </dd>
   *       <dd>
   *         The staff member key, used only for appointment tips.
   *       </dd>
   *       <dt>
   *         string [<var>m_prorate_custom</var>]
   *       </dt>
   *       <dd>
   *         The custom prorate price, used only memberships only. This is only used if <var>is_prorate_fix</var> is <tt>true</tt>.
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
   *         The key of the image for the gift card. If empty, the business's first gift card image will be used. Specify this only for gift cards.
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
   *       <dt>
   *         string <var>[uid_to]</var>
   *       </dt>
   *       <dd>
   *         Specifies the recipient of a transfer Purchase Option.
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
   *     The contract text. This is only required for items that require contract signing.
   *   </dd>
   *   <dt>
   *     int <var>i_quantity</var>
   *   </dt>
   *   <dd>
   *     The item quantity.
   *   </dd>
   *   <dt>
   *     int <var>id_sale</var>
   *   </dt>
   *   <dd>
   *     The item type ID. One of the {@link WlSaleSid} constants.
   *   </dd>
   *   <dt>
   *     string <var>k_id</var>
   *   </dt>
   *   <dd>
   *     The item key.
   *   </dd>
   *   <dt>
   *     string [<var>k_shop_product_option</var>]
   *   </dt>
   *   <dd>
   *     The product option key, required only for products.
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
   *     The client signature, used for items that require a signed contract.
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
   * The list of quiz response keys.
   * Keys refer to quiz keys.
   * And values refer to responses.
   *
   * @post post
   * @var array
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