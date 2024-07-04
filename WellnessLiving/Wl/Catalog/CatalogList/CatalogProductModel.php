<?php

namespace WellnessLiving\Wl\Catalog\CatalogList;

use WellnessLiving\Core\Sid\SortOrderSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlSaleSid;

/**
 * Returns list of products.
 */
class CatalogProductModel extends WlModelAbstract
{
  /**
   * Categories with sort settings. Keys are shop category keys, values - sort settings. Has next structure:<dl>
   *   <dt>array <var>a_order</var></dt>
   *   <dt>int <var>id_order</var></dt><dd>Sort order. One of {@link SortOrderSid} constants.</dd>
   *   <dt>int <var>id_sort</var></dt><dd>Sort order ID, one of {@link SortOrderSid} constants.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_category_sort;

  /**
   * Additional data to filter products.<dl>
   *   <dt>array [<var>a_quick_config</var>]</dt>
   *   <dd>Additional data in a case when catalog list is in Quick Buy mode.</dd>
   *
   *   <dt>array [<var>a_sale_id</var>]</dt>
   *   <dd>List of special categories for catalogue, each value is one of {@link WlSaleSid} constants.</dd>
   *
   *   <dt>array [<var>a_shop_category</var>]</dt>
   *   <dd>Shop categories to filter by.</dd>
   *
   *   <dt>int <var>i_last</var></dt>
   *   <dd>Last shown product.</dd>
   *
   *   <dt>int <var>id_order</var></dt><dd>Sort order ID, one of {@link SortOrderSid}.</dd>
   *
   *   <dt>int <var>id_sort</var></dt>
   *
   *   <dt>string <var>k_business</var></dt>
   *   <dd>Business key.</dd>
   *
   *   <dt>string [<var>k_location</var>]</dt>
   *   <dd>Location key.</dd>
   *
   *   <dt>string [<var>s_title</var>]</dt>
   *   <dd>A title of a product to filter.</dd>
   *
   *   <dt>string [<var>uid</var>]</dt>
   *   <dd>UID of a user.</dd>
   * </dl>
   *
   * @get get
   * @var array
   */
  public $a_filter;

  /**
   * List of elements.
   *
   * @get result
   * @var array
   */
  public $a_product;

  /**
   * Last currently shown element.
   *
   * @get get,result
   * @var int
   */
  public $i_last;

  /**
   * Whether more products can be loaded.
   *
   * @get result
   * @var bool
   */
  public $is_load_more;

  /**
   * Business key to get products for.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Selected shop category.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string
   */
  public $k_shop_category = null;

  /**
   * Cache key to get products.
   *
   * @get get,result
   * @var string
   */
  public $s_cache_key;
}

?>