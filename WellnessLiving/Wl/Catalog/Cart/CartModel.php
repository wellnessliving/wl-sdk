<?php

namespace WellnessLiving\Wl\Catalog\Cart;

use WellnessLiving\WlModelAbstract;

/**
 * Information about the cart in the catalog.
 *
 * @augments Core_Spa_Model
 * @mixes Core_Spa_Model
 * @constructor
 */
class CartModel extends WlModelAbstract
{
    /**
     * A list of items in the cart.
     *
     * @get get
     * @var array
     */
    public $a_item = [];

    /**
     * The location key.
     *
     * @get get
     * @var string
     */
    public $k_location = '0';

    /**
     * The full discount of the cart.
     *
     * <tt>null</tt> if not calculated yet.
     *
     * @get result
     * @var string|null
     */
    public $m_discount = null;

    /**
     * The total amount in the catalog cart without tax.
     *
     * <tt>null</tt> if not set yet.
     *
     * @get result
     * @var string|null
     */
    public $m_subtotal = null;

    /**
     * The amount of tax.
     *
     * <tt>null</tt> if not set yet.
     *
     * @get result
     * @var string|null
     */
    public $m_tax = null;

    /**
     * The total amount in the catalog cart.
     *
     * <tt>null</tt> if not set yet.
     *
     * @get result
     * @var string|null
     */
    public $m_total = null;

    /**
     * The discount code.
     *
     * <tt>null</tt> means that the discount code has been reset.
     *
     * @get get
     * @var string|null
     */
    public $text_discount_code = '';

    /**
     * The user ID.
     *
     * @get get
     * @var string
     */
    public $uid = '0';
}

?>