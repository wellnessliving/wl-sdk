<?php

namespace WellnessLiving\Wl\Login\Product;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * Return information about products purchased by client.
 *
 * @method WlModelRequest get() Returns information about products purchased by client.  Accepts filters for business, user, location, payment method, product option, price range, and date range, then returns a paginated list of product purchases with quantity, unit price, total amount, product name, and purchase location.
 */
class ProductModel extends WlModelAbstract
{
  /**
   * List of purchased products:
   *
   * <dl>
   *   <dt>string `dtu_purchase`</dt>
   *   <dd>Date and time of purchase in UTC.</dd>
   * 
   *   <dt>int `i_quantity`</dt>
   *   <dd>Quantity of the product purchased.</dd>
   * 
   *   <dt>string `k_shop_product_option`</dt>
   *   <dd>Key of product. </dd>
   * 
   *   <dt>string `m_price`</dt>
   *   <dd>Price per unit of the product.</dd>
   * 
   *   <dt>string `m_total_amount`</dt>
   *   <dd>Total amount paid for the product.</dd>
   * 
   *   <dt>string `text_location`</dt>
   *   <dd>Location where the purchase was made.</dd>
   * 
   *   <dt>string `text_product`</dt>
   *   <dd>Name of the purchased product.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_login_product = [];

  /**
   * Maximal date and time of purchase in UTC. Empty string means no filter by maximal date.
   *
   * @get get
   * @var string
   */
  public $dtu_end = '';

  /**
   * Minimal date and time of purchase in UTC. Empty string means no filter by minimal date.
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
   * @var string
   */
  public $m_price_max = '0.00';

  /**
   * Minimum price of the product.
   *
   * @get get
   * @var string
   */
  public $m_price_min = '0.00';

  /**
   * User key. Empty string means return products purchased by walk-in.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>