<?php

namespace WellnessLiving\Wl\Catalog\Cart;

use WellnessLiving\WlModelAbstract;

/**
 * Information about cart in the catalog.
 *
 * @augments Core_Spa_Model
 * @mixes Core_Spa_Model
 * @constructor
 */
class CartModel extends WlModelAbstract
{
    /**
     * List of items in the cart.
     *
     * @get get
     * @var array
     */
    public $a_item = [];

    /**
     * Location key.
     *
     * @get get
     * @var string
     */
    public $k_location = '0';

    /**
     * Custom amount for a gift card which user entered.
     *
     * <tt>null</tt> if not set yet.
     *
     * @get result
     * @var string|null
     */
    public $m_custom = null;

    /**
     * Full discount of the cart.
     *
     * <tt>null</tt> if not calculated yet.
     *
     * @get result
     * @var string|null
     */
    public $m_discount = null;

    /**
     * Total amount in the catalog cart without tax.
     *
     * <tt>null</tt> if not set yet.
     *
     * @get result
     * @var string|null
     */
    public $m_subtotal = null;

    /**
     * Amount of tax.
     *
     * <tt>null</tt> if not set yet.
     *
     * @get result
     * @var string|null
     */
    public $m_tax = null;

    /**
     * Total amount in the catalog cart.
     *
     * <tt>null</tt> if not set yet.
     *
     * @get result
     * @var string|null
     */
    public $m_total = null;

    /**
     * Discount code.
     *
     * <tt>null</tt> Means that discount code has been reset.
     *
     * @get get
     * @var string|null
     */
    public $text_discount_code = '';

    /**
     * ID of a user
     *
     * @get get
     * @var string
     */
    public $uid = '0';
}

?>