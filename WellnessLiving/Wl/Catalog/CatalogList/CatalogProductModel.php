<?php

namespace WellnessLiving\Wl\Catalog\CatalogList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlSaleSid;

/**
 * Returns a list of products.
 *
 * @method WlModelRequest get() Gets store products by shop category.  Used to populate a specific product category tab in the client-facing store. Supports pagination so large categories can be loaded incrementally. Returns the products together with the sort order configured for the category and a cache key for client-side caching.
 */
class CatalogProductModel extends WlModelAbstract
{
  /**
   * Categories with sort settings. Keys refer to shop category keys. Values refer to sort settings. Contains the following structure: 
   *
   * <dl>
   *   <dt>int[] `a_order`</dt>
   *   <dd>
   *
   * Each element is a product key string, ordered as desired.
   *   </dd>
   * 
   *   <dt>int `id_order`</dt>
   *   <dd>The sort order.</dd>
   * 
   *   <dt>int `id_sort`</dt>
   *   <dd>The sort field ID.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_category_sort;

  /**
   * Additional data to filter products. 
   *
   * <dl>
   *   <dt>array `a_quick_config`</dt>
   *   <dd>
   *     Additional data for cases where the catalog list is in Quick Buy mode. Contains:
   *     <dl>
   *       <dt>string `k_visit`</dt>
   *       <dd>The visit key used to filter quick-buy items.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int[] `a_sale_id`</dt>
   *   <dd>The list of special categories for the catalogue.
   * Each value is a constant of {@link WlSaleSid}.</dd>
   * 
   *   <dt>string[] `a_shop_category`</dt>
   *   <dd>Shop category keys to filter by. </dd>
   * 
   *   <dt>int `i_last`</dt>
   *   <dd>The last shown product index for pagination.</dd>
   * 
   *   <dt>int `id_order`</dt>
   *   <dd>The sort order ID.</dd>
   * 
   *   <dt>int `id_sort`</dt>
   *   <dd>The sort field ID.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>The business key. </dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>The location key. </dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>A title fragment to filter products by name.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>The user key. </dd>
   * </dl>
   * @get get
   * @var array
   */
  public $a_filter;

  /**
   * The list of products. Each element has the following keys: 
   *
   * <dl>
   *   <dt>string `html_price`</dt>
   *   <dd>HTML-escaped formatted price of the product.</dd>
   * 
   *   <dt>string `html_price_early`</dt>
   *   <dd>HTML-escaped formatted early-bird price of the product. Present only when an early price applies.</dd>
   * 
   *   <dt>int `id_sale`</dt>
   *   <dd>The sale category ID. One of the {@link WlSaleSid} constants.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>The product key.</dd>
   * 
   *   <dt>string `k_shop_category`</dt>
   *   <dd>The shop category key. </dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>The product title.</dd>
   * 
   *   <dt>string `url_catalog`</dt>
   *   <dd>Direct link to the catalog view page for this product.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_product;

  /**
   * The currently shown element.
   *
   * @get get,result
   * @var int
   */
  public $i_last;

  /**
   * Determines whether more products can be loaded.
   *
   * @get result
   * @var bool
   */
  public $is_load_more;

  /**
   * The business key to get products for.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * The selected shop category.
   *
   * This will be `0` for the system's Unassigned category or `null` if not set yet.
   *
   * @get get
   * @var string
   */
  public $k_shop_category = null;

  /**
   * The cache key used to get products.
   *
   * @get get,result
   * @var string
   */
  public $s_cache_key;
}

?>