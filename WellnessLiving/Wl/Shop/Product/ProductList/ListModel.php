<?php

namespace WellnessLiving\Wl\Shop\Product\ProductList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Product API.
 *
 * @method WlModelRequest get() Gets list of products.
 */
class ListModel extends WlModelAbstract
{
  /**
   * List of products.
   *
   * <dl>
   *   <dt>array `a_option`</dt>
   *   <dd>
   *     <dl>
   *       <dt>string `k_shop_product_option`</dt>
   *
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Title of the product option.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `k_shop_product`</dt>
   *
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Title of product.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_product = [];

  /**
   * Whether to return franchisee-created products (if business is franchisor).
   * <tt>true</tt> to include franchisee-created products.
   *
   * @get get
   * @var bool
   */
  public $is_franchise = false;

  /**
   * `true` to get only gift cards available for current user; `false` to get all gift cards.
   *
   * @get get
   * @var bool
   */
  public $is_frontend = false;

  /**
   * A flag to include inactive items in the query result.
   *
   * @get get
   * @var bool
   */
  public $is_inactive_include = false;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>