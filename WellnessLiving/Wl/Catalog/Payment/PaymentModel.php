<?php

namespace WellnessLiving\Wl\Catalog\Payment;

use WellnessLiving\WlModelAbstract;

/**
 * Model to perform payment in online store.
 */
class PaymentModel extends WlModelAbstract
{
  /**
   * List of items in the cart.
   *
   * <b>Required!</b>
   *
   * Every element must have keys:
   * <dl>
   *   <dt>
   *     array [<var>a_config</var>]
   *   </dt>
   *   <dd>
   *     Additional configuration. May contain next keys:
   *     <dl>
   *       <dt>
   *         array [<var>a_wellness_program</var>]
   *       </dt>
   *       <dd>
   *          "Wellness Program" fields.
   *
   *          <var>k_wellness_program<var/> must be passed along with this array. See description below.
   *
   *          <dl>
   *            <dt>array <var>a_account</var></dt>
   *            <dd>See {@link \WellnessLiving\Wl\Insurance\Enrollment\Field\EnrollmentFieldListModel::$a_account} for a full description.</dd>
   *            <dt>array <var>a_field</var></dt>
   *            <dd>See {@link \WellnessLiving\Wl\Insurance\Enrollment\Field\EnrollmentFieldListModel::$a_field} for a full description.</dd>
   *          </dl>
   *
   *          It is recommended to validate the fields using the POST method of the {@link \WellnessLiving\Wl\Insurance\Enrollment\Field\EnrollmentFieldListModel} model.
   *       </dd>
   *       <dt>
   *         string [<var>dt_prorate</var>]
   *       </dt>
   *       <dd>
   *         Prorate date. For memberships only.
   *       </dd>
   *       <dt>
   *         string [<var>dt_send</var>]
   *       </dt>
   *       <dd>
   *         Date when gift card must be send. For gft cards only.
   *       </dd>
   *       <dt>
   *         string [<var>dt_start</var>]
   *       </dt>
   *       <dd>
   *         Start date. For memberships only.
   *       </dd>
   *       <dt>
   *         bool [<var>is_prorate</var>]
   *       </dt>
   *       <dd>
   *         <tt>true</tt> to use prorate; <tt>false</tt> otherwise. For memberships only.
   *       </dd>
   *       <dt>
   *         bool [<var>is_prorate_fix</var>]
   *       </dt>
   *       <dd>
   *         <tt>true</tt> to use custom prorate amount; <tt>false</tt> otherwise. For memberships only.
   *       </dd>
   *       <dt>
   *         bool [<var>is_prorate_only</var>]
   *       </dt>
   *       <dd>
   *         <tt>true</tt> to pay for prorate only; <tt>false</tt> otherwise. For memberships only.
   *       </dd>
   *       <dt>
   *         bool [<var>is_renew</var>]
   *       </dt>
   *       <dd>
   *         <tt>true</tt> to enable auto-renew for the item; <tt>false</tt> otherwise. For memberships/passes only.
   *       </dd>
   *       <dt>
   *         string [<var>k_appointment</var>]
   *       </dt>
   *       <dd>
   *         Appointment key. For appointment add-ons only.
   *       </dd>
   *       <dt>
   *         string [<var>k_coupon_amount</var>]
   *       </dt>
   *       <dd>
   *         Key of gift card amount. For gift cards only.
   *       </dd>
   *       <dt>
   *         string [<var>k_staff</var>]
   *       </dt>
   *       <dt>
   *         string [<var>k_wellness_program</var>]
   *       </dt>
   *       <dd>
   *          "Wellness Program" key. Set for insurance membership promotion.
   *
   *          <var>a_wellness_program<var/> array must be passed along with the key. See array description above.
   *
   *          <p>Use the following models to work with this type of promotion:</p>
   *          <ul>
   *            <li>{@link \WellnessLiving\Wl\Insurance\Catalog\ProgramListModel} to obtain list of active programs.</li>
   *            <li>{@link \WellnessLiving\Wl\Insurance\Enrollment\Field\EnrollmentFieldListModel} to get and validate fields for a given program.</li>
   *          </ul>
   *       </dd>
   *       <dd>
   *         Staff member key. For appointment tips only.
   *       </dd>
   *       <dt>
   *         string [<var>m_prorate_custom</var>]
   *       </dt>
   *       <dd>
   *         Custom prorate price. For memberships only. Has sense only if <var>is_prorate_fix</var> is <tt>true</tt>.
   *       </dd>
   *       <dt>
   *         string [<var>s_code</var>]
   *       </dt>
   *       <dd>
   *         Gift card code. Required for gift card.
   *       </dd>
   *       <dt>
   *         string [<var>s_mail</var>]
   *       </dt>
   *       <dd>
   *         Gift card receiver email. Required for gift card.
   *       </dd>
   *       <dt>
   *         string [<var>s_recipient</var>]
   *       </dt>
   *       <dd>
   *         Gift card receiver name. Required for gift card.
   *       </dd>
   *       <dt>
   *         string [<var>s_sender</var>]
   *       </dt>
   *       <dd>
   *         Gift card sender name. Required for gift card.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     array[] [<var>a_tax_custom</var>]
   *   </dt>
   *   <dd>
   *     Customer taxes. Optional. Every element mut contain keys:
   *     <dl><dt>string <var>f_tax</var></dt><dd>Tax amount.</dd>
   *     <dt>string <var>k_tax</var></dt><dd>Tax key.</dd></dl>
   *   </dd>
   *   <dt>
   *     string [<var>html_contract</var>]
   *   </dt>
   *   <dd>
   *     Contract text. Required for items that requires contract signing only.
   *   </dd>
   *   <dt>
   *     int <var>i_quantity</var>
   *   </dt>
   *   <dd>
   *     Quantity.
   *   </dd>
   *   <dt>
   *     int <var>id_sale</var>
   *   </dt>
   *   <dd>
   *     ID of item type. One of {@link \WellnessLiving\WlSaleSid} constants.
   *   </dd>
   *   <dt>
   *     string <var>k_id</var>
   *   </dt>
   *   <dd>
   *     Key of the item.
   *   </dd>
   *   <dt>
   *     string [<var>k_shop_product_option</var>]
   *   </dt>
   *   <dd>
   *     Key of product option. Required for products only.
   *   </dd>
   *   <dt>
   *     string [<var>m_price_custom</var>]
   *   </dt>
   *   <dd>
   *     Custom price. Optional.
   *   </dd>
   *   <dt>
   *     string <var>[s_signature]</var>
   *   </dt>
   *   <dd>
   *     Signature. Required for items that requires contract signing only.
   *   </dd>
   * </dl>
   *
   * @post post
   * @var array[]
   */
  public $a_item = [];

  /**
   * A list of payment sources.
   * Key is string representation of one of the {@link WlPayMethodSid} constants.
   * For example, if payment method is {@link WlPayMethodSid::ECOMMERCE}, specify string <tt>ecommerce</tt>.
   *
   * Values contain next keys:
   * <dl>
   *   <dt>
   *     array [<var>a_pay_card</var>]
   *   </dt>
   *   <dd>
   *     Payment cart information:
   *     <dl>
   *       <dt>
   *         array <var>a_pay_address</var>
   *       </dt>
   *       <dd>
   *         Payment address:
   *         <dl>
   *           <dt>bool <var>is_new</var></dt>
   *           <dd><tt>1</tt> to add a new payment address; <tt>0</tt> to use a saved payment address.</dd>
   *           <dt>string [<var>k_geo_country</var>]</dt>
   *           <dd>Key of country for payment address. Specify to add a new address.</dd>
   *           <dt>string [<var>k_geo_region</var>]</dt>
   *           <dd>Key of region for payment address. Specify to add a new address.</dd>
   *           <dt>string [<var>k_pay_address</var>]</dt>
   *           <dd>Key of already saves payment address. Specify to use a saved address.</dd>
   *           <dt>string [<var>s_city</var>]</dt>
   *           <dd>City for payment address. Specify to add a new address.</dd>
   *           <dt>string [<var>s_name</var>]</dt>
   *           <dd>Card name. Specify to add a new address.</dd>
   *           <dt>string [<var>s_phone</var>]</dt>
   *           <dd>Payment phone. Specify to add a new address.</dd>
   *           <dt>string [<var>s_postal</var>]</dt>
   *           <dd>Postal code for payment address. Specify to add a new address.</dd>
   *           <dt>string [<var>s_street1</var>]</dt>
   *           <dd>Payment address. Specify to add a new address.</dd>
   *           <dt>string [<var>s_street2</var>]</dt>
   *           <dd>Optional payment address. Specify to add a new address.</dd>
   *         </dl>
   *       </dd>
   *       <dt>
   *         int [<var>i_csc</var>]
   *       </dt>
   *       <dd>
   *         Card CSC. Specify to add a new card.
   *       </dd>
   *       <dt>
   *         int [<var>i_month</var>]
   *       </dt>
   *       <dd>
   *         Card expiration month. Specify to add a new card.
   *       </dd>
   *       <dt>
   *         int [<var>i_year</var>]
   *       </dt>
   *       <dd>
   *         Card expiration year. Specify to add a new card.
   *       </dd>
   *       <dt>
   *         bool <var>is_new</var>
   *       </dt>
   *       <dd>
   *         <tt>1</tt> to add a new card; <tt>0</tt> to use saved card.
   *       </dd>
   *       <dt>
   *         string [<var>k_pay_bank</var>]
   *       </dt>
   *       <dd>
   *         Key of a card. Specify to use saved card.
   *       </dd>
   *       <dt>
   *         string [<var>s_comment</var>]
   *       </dt>
   *       <dd>
   *         Optional comment. Specify to add a new card.
   *       </dd>
   *       <dt>
   *         string [<var>s_number</var>]
   *       </dt>
   *       <dd>
   *         Card number. Specify to add a new card.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string <var>f_amount</var>
   *   </dt>
   *   <dd>
   *     Amount of money to withdraw with this payment source.
   *   </dd>
   *   <dt>
   *     bool [<var>is_hide</var>]
   *   </dt>
   *   <dd>
   *     Whether this payment method is hidden.
   *   </dd>
   *   <dt>
   *     bool [<var>is_success</var>=<tt>false</tt>]
   *   </dt>
   *   <dd>
   *     Whether this source was successfully charged.
   *   </dd>
   *   <dt>
   *     string [<var>s_index</var>]
   *   </dt>
   *   <dd>
   *     Index of this form.
   *     Optional.
   *   </dd>
   *   <dt>
   *     string <var>sid_pay_method</var>
   *   </dt>
   *   <dd>
   *     Payment method ID. String representation of one of the {@link WlPayMethodSid} constants.
   *     For example, if payment method is {@link WlPayMethodSid::ECOMMERCE}, specify string <tt>ecommerce</tt>.
   *   </dd>
   * </dl>
   *
   * @post post
   * @var array[]
   */
  public $a_pay_form = [];

  /**
   * Discount in percents. Optional
   *
   * @post post
   * @var float
   */
  public $f_discount_percent = 0;

  /**
   * WellnessLiving mode type, one of {@link WlBookModeSid} constants.
   *
   * <b>Required!</b>
   *
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * Payment owner is an anonymous user. Optional
   *
   * @post get
   * @var bool
   */
  public $is_guest = 0;

  /**
   * Set if the operations are performed under the staff. Optional.
   *
   * @post get
   * @var bool
   */
  public $is_staff = 0;

  /**
   * Business key.
   *
   * <b>Required!</b>
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Location key.
   *
   * <b>Required!</b>
   *
   * @post get
   * @var string
   */
  public $k_location = '';

  /**
   * Key of purchase that was created during payment.
   *
   * <tt>null</tt> if result is not returned yet, or request was not successful.
   *
   * @post result
   * @var string|null
   */
  public $k_purchase = null;

  /**
   * Key of the visit to be paid. Optional.
   *
   * @post post
   * @var string
   */
  public $k_visit = '';

  /**
   * Discount in amount of money. Optional.
   *
   * @post post
   * @var string
   */
  public $m_discount_flat = '';

  /**
   * Amount of tips. Optional.
   *
   * @post post
   * @var string
   */
  public $m_tip = '0';

  /**
   * Discount code. Optional.
   *
   * @post post
   * @var string
   */
  public $text_discount_code = '';

  /**
   * User's key.
   *
   * <b>Required!</b>
   *
   * @post get
   * @var string
   */
  public $uid = '';

}

?>