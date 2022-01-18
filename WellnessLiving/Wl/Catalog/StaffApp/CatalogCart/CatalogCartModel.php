<?php

namespace WellnessLiving\Wl\Catalog\StaffApp\CatalogCart;

use WellnessLiving\WlModelAbstract;

/**
 * Model to calculate price data for sale item.
 */
class CatalogCartModel extends WlModelAbstract
{
    /**
     * Cart items list with next structure:
     * <dl>
     * <dt>array [<var>a_config</var>]</dt>
     * <dd>Membership settings. Structure:<dl>
     *   <dt>string <var>dt_start</var></dt>
     *   <dd>Date when promotion starts.</dd>
     *   <dt>string <var>dt_prorate</var></dt>
     *   <dd>Prorate date. Should be passed when <var>is_prorate</var>=<tt>true</tt>.</dd>
     *   <dt>bool <var>is_prorate</var></dt>
     *   <dd>Whether to prorate the first payment.</dd>
     *   <dt>bool <var>is_prorate_only</var></dt>
     *   <dd>Should client pay for the first period now or not.</dd>
     *   <dt>string <var>k_coupon</var></dt>
     *   <dd>Coupon key.</dd>
     *   <dt>string <var>k_coupon_amount</var></dt>
     *   <dd>Coupon amount key.</dd>
     *   <dt>string <var>m_prorate_custom</var></dt>
     *   <dd>Amount of money for prorate period. Should be passed only in a case of manual entering.</dd>
     * </dl></dd>
     * <dt>array [<var>a_tax_custom</var>]</dt>
     * <dd>Information about taxes. If not passed means no custom taxes applied to sale item.
     * If record is present, it means that tax is custom. Structure:<dl>
     *   <dt>string <var>f_tax</var></dt>
     *   <dd>Tax amount.</dd>
     *   <dt>string <var>k_tax</var></dt>
     *   <dd>Tax keys.</dd>
     * </dl></dd>
     * <dt>int [<var>f_discount_percent</var>]</dt>
     * <dd>Percent discount, applied to current item.</dd>
     * <dt>int <var>i_quantity</var></dt>
     * <dd>Quantity of sale items.</dd>
     * <dt>int <var>id_sale</var></dt>
     * <dd>Sale item type.</dd>
     * <dt>string <var>k_id</var></dt>
     * <dd>Sale item key.</dd>
     * <dt>string <var>k_shop_product_option</var></dt>
     * <dd>Shop product option. <tt>null</tt> if sale item has no options.</dd>
     * <dt>string [<var>m_discount_fix</var>]</dt>
     * <dd>Fixed price discount, applied to current item.</dd>
     * <dt>string [<var>m_price_custom</var>]</dt>
     * <dd>Custom price of sale item. If not passed means no custom price applied to sale item.</dd>
     * </dl>
     *
     * @get get
     * @var array[]
     */
    public $a_item = [];

    /**
     * Discount in percents.
     *
     * @get get
     * @var float
     */
    public $f_discount_percent = 0;

    /**
     * `true` to enable checking every item at the cart; `false` to disable.
     *
     * @get get
     * @var bool
     */
    public $is_check_cart_item = 0;

    /**
     * Whether business applied commission at checkout.
     *
     * @get result
     * @var bool
     */
    public $is_commission = 0;

    /**
     * Whether display custom receipt notes at checkout.
     *
     * @get result
     * @var bool
     */
    public $is_receipt_note = 0;

    /**
     * Business key.
     *
     * <b>This field is not used directly and described for correct auto generation JavaScript.</b>
     *
     * @get get
     * @var string
     * @see \RsBusinessSql
     */
    public $k_business = '';

    /**
     * Business location key.
     *
     * @get get
     * @var string
     */
    public $k_location = '';

    /**
     * Amount of discount.
     *
     * @get result
     * @var string
     */
    public $m_discount = '0.00';

    /**
     * Discount in amount of money.
     *
     * @get get
     * @var string
     */
    public $m_discount_flat = '';

    /**
     * Amount of subtotal.
     *
     * @get result
     * @var string
     */
    public $m_subtotal = '0.00';

    /**
     * Amount of tax.
     *
     * @get result
     * @var string
     */
    public $m_tax = '0.00';

    /**
     * Tips amount.
     *
     * @get get
     * @var string
     */
    public $m_tip = '';

    /**
     * Amount of appointment tips.
     *
     * @get result
     * @var string
     */
    public $m_tip_purchase = '0.00';

    /**
     * Total amount of the cart.
     *
     * @get result
     * @var string
     */
    public $m_total = '0.00';

    /**
     * Discount code.
     *
     * <tt>null</tt> if not set.
     *
     * @get get
     * @var string|null
     */
    public $text_discount_code = null;

    /**
     * Error message for discount code.
     *
     * <tt>null</tt> if code is not set or has no problems.
     *
     * @get result
     * @var string|null
     */
    public $text_error_code = null;

    /**
     * Custom receipt note text.
     *
     * @get result
     * @var string
     */
    public $text_receipt_note = '';

    /**
     * Current user key.
     *
     * @get get
     * @var string
     * @see \PassportLoginSql
     */
    public $uid_current = '';

    /**
     * User ID, who performs purchase.
     *
     * @get get
     * @var string
     */
    public $uid_customer = '';
}