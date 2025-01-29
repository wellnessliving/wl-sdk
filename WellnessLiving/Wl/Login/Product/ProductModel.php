<?php

namespace WellnessLiving\Wl\Login\Product;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * An endpoint containing a model to get the list of products purchased by client.
 */
class ProductModel extends WlModelAbstract
{
    /**
     * List of purchased products:<dl>
     *   <dt>string <var>dtu_purchase</var></dt>
     *   <dd>Date and time of purchase in UTC.</dd>
     *   <dt>int <var>i_quantity</var></dt>
     *   <dd>Quantity of the product purchased.</dd>
     *   <dt>string <var>k_shop_product_option</var></dt>
     *   <dd>Key of product.</dd>
     *   <dt>string <var>m_price</var></dt>
     *   <dd>Price per unit of the product.</dd>
     *   <dt>string <var>m_total_amount</var></dt>
     *   <dd>Total amount paid for the product.</dd>
     *   <dt>string <var>text_location</var></dt>
     *   <dd>Location where the purchase was made.</dd>
     *   <dt>string <var>text_product</var></dt>
     *   <dd>Name of the purchased product.</dd>
     * </dl>
     *
     * @get result
     * @var array
     */
    public $a_login_product = [];

    /**
     * Maximal date and time of purchase in UTC (i.e. '2025-01-28 13:00:00').
     * Empty string means no filter by maximal date.
     *
     * @get get
     * @var string
     */
    public $dtu_end = '';

    /**
     * Minimal date and time of purchase in UTC (i.e. '2025-01-28 13:00:00').
     * Empty string means no filter by minimal date.
     *
     * @get get
     * @var string
     */
    public $dtu_start = '';

    /**
     * Number of the page to get.
     *
     * @get get
     * @var int
     */
    public $i_page = 1;

    /**
     * Page size.
     *
     * @get get
     * @var int
     */
    public $i_page_size = 50;

    /**
     * ID of the payment method. One of the {@link WlPayMethodSid} constants. Zero means no filter by payment method.
     *
     * @get get
     * @var int
     */
    public $id_pay_method = 0;

    /**
     * Business key.
     *
     * @get get
     * @var string
     */
    public $k_business = '';

    /**
     * Location key. Empty string means no filter by location.
     *
     * @get get
     * @var string
     */
    public $k_location = '';

    /**
     * Product option key. Empty string means no filter by product option.
     *
     * @get get
     * @var string
     */
    public $k_shop_product_option = '';

    /**
     * Maximum price of the product. 0 means no filter by maximum price.
     *
     * @get get
     * @var float
     */
    public $m_price_max = 0.0;

    /**
     * Minimum price of the product.
     *
     * @get get
     * @var float
     */
    public $m_price_min = 0.0;

    /**
     * User key. Empty string means return products purchased by walk-in.
     *
     * @get get
     * @var string
     */
    public $uid = '';
}

?>