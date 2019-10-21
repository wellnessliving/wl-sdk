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
   *         string [<var>dt_prorate</var>]
   *       </dt>
   *       <dd>
   *         Prorate date. For memberships only.
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
   *         string [<var>k_staff</var>]
   *       </dt>
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
   * A list of payment sources. Every element must contain next keys:
   * <dl>
   *   <dt>
   *     array [<var>a_pay_card</var>]
   *   </dt>
   *   <dd>
   *     Payment cart information.
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
   *   </dd>
   *   <dt>
   *     string <var>sid_pay_method</var>
   *   </dt>
   *   <dd>
   *     Payment method ID. One of the {@link WlPayMethodSid} constants.
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