<?php

namespace WellnessLiving\Wl\Catalog\StaffApp\CatalogCart;

use WellnessLiving\WlModelAbstract;

/**
 * A model to calculate price data for a sale item.
 */
class CatalogCartModel extends WlModelAbstract
{
    /**
     * A list of cart items with the next structure:
     * <dl>
     * <dt>array [<var>a_config</var>]</dt>
     * <dd>Membership settings with the following structure:<dl>
     *   <dt>string <var>dt_start</var></dt>
     *   <dd>The date when the promotion starts.</dd>
     *   <dt>string <var>dt_prorate</var></dt>
     *   <dd>The prorate date. Should be passed when <var>is_prorate</var>=<tt>true</tt>.</dd>
     *   <dt>bool <var>is_prorate</var></dt>
     *   <dd>Determines whether to prorate the first payment.</dd>
     *   <dt>bool <var>is_prorate_only</var></dt>
     *   <dd>Determines if the client should pay for the first period now or not.</dd>
     *   <dt>string <var>k_coupon</var></dt>
     *   <dd>The coupon key.</dd>
     *   <dt>string <var>k_coupon_amount</var></dt>
     *   <dd>The coupon amount key.</dd>
     *   <dt>string <var>m_prorate_custom</var></dt>
     *   <dd>The amount of money for prorate period. Should be passed only in a case of manual entry.</dd>
     * </dl></dd>
     * <dt>array [<var>a_tax_custom</var>]</dt>
     * <dd>Information about taxes. If not passed means no custom taxes have been applied to the sale item.
     * If a record is present, it means that the tax is custom. Structured as follows:<dl>
     *   <dt>string <var>f_tax</var></dt>
     *   <dd>The tax amount.</dd>
     *   <dt>string <var>k_tax</var></dt>
     *   <dd>The tax keys.</dd>
     * </dl></dd>
     * <dt>int [<var>f_discount_percent</var>]</dt>
     * <dd>The discount percentage, applied to the current item.</dd>
     * <dt>int <var>i_quantity</var></dt>
     * <dd>The quantity of sale items.</dd>
     * <dt>int <var>id_sale</var></dt>
     * <dd>The sale item type.</dd>
     * <dt>string <var>k_id</var></dt>
     * <dd>The sale item key.</dd>
     * <dt>string <var>k_shop_product_option</var></dt>
     * <dd>The store product option. <tt>null</tt> if the sale item has no options.</dd>
     * <dt>string [<var>m_discount_fix</var>]</dt>
     * <dd>The fixed price discount, applied to the current item.</dd>
     * <dt>string [<var>m_price_custom</var>]</dt>
     * <dd>The custom price of sale item. If not passed means no custom price has been applied to the sale item.</dd>
     * </dl>
     *
     * @get get
     * @var array[]
     */
    public $a_item = [];

    /**
     * The discount as a percentage.
     *
     * @get get
     * @var float
     */
    public $f_discount_percent = 0;

    /**
     * `true` to enable checking every item at the cart. `false` to disable.
     *
     * @get get
     * @var bool
     */
    public $is_check_cart_item = 0;

    /**
     * Determines whether the business applied a commission at checkout.
     *
     * @get result
     * @var bool
     */
    public $is_commission = 0;

    /**
     * Determines whether to display custom receipt notes at checkout.
     *
     * @get result
     * @var bool
     */
    public $is_receipt_note = 0;

    /**
     * The business key.
     *
     * <b>This field isn't used directly but described for correct auto generation JavaScript.</b>
     *
     * @get get
     * @var string
     */
    public $k_business = '';

    /**
     * The business location key.
     *
     * @get get
     * @var string
     */
    public $k_location = '';

    /**
     * The discount amount.
     *
     * @get result
     * @var string
     */
    public $m_discount = '0.00';

    /**
     * The discount amount of money.
     *
     * @get get
     * @var string
     */
    public $m_discount_flat = '';

    /**
     * The subtotal amount.
     *
     * @get result
     * @var string
     */
    public $m_subtotal = '0.00';

    /**
     * The amount of tax.
     *
     * @get result
     * @var string
     */
    public $m_tax = '0.00';

    /**
     * The amount of tips.
     *
     * @get get
     * @var string
     */
    public $m_tip = '';

    /**
     * The amount of appointment tips.
     *
     * @get result
     * @var string
     */
    public $m_tip_purchase = '0.00';

    /**
     * The cart's total amount.
     *
     * @get result
     * @var string
     */
    public $m_total = '0.00';

    /**
     * The discount code.
     *
     * <tt>null</tt> if not set.
     *
     * @get get
     * @var string|null
     */
    public $text_discount_code = null;

    /**
     * The discount code's error message.
     *
     * <tt>null</tt> if a code isn't set or if there aren't any discount errors.
     *
     * @get result
     * @var string|null
     */
    public $text_error_code = null;

    /**
     * The custom receipt note's text.
     *
     * @get result
     * @var string
     */
    public $text_receipt_note = '';

    /**
     * The key of the current user.
     *
     * @get get
     * @var string
     */
    public $uid_current = '';

    /**
     * The ID of the user who performed the purchase.
     *
     * @get get
     * @var string
     */
    public $uid_customer = '';
}