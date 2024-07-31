<?php

namespace WellnessLiving\Wl\Catalog\CatalogList;

use WellnessLiving\Core\Sid\SortOrderSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlSaleSid;

/**
 * Returns a list of products.
 */
class CatalogProductModel extends WlModelAbstract
{
  /**
   * Categories with sort settings. Keys refer to shop category keys. Values refer to sort settings. Contains the following structure:<dl>
   *   <dt>array <var>a_order</var></dt>
   *   <dt>int <var>id_order</var></dt><dd>The sort order. One of the {@link SortOrderSid} constants.</dd>
   *   <dt>int <var>id_sort</var></dt><dd>The sort order ID. One of the {@link SortOrderSid} constants.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_category_sort;

  /**
   * Additional data to filter products.<dl>
   *   <dt>array [<var>a_quick_config</var>]</dt>
   *   <dd>Additional data for cases where the catalog list is in Quick Buy mode.</dd>
   *
   *   <dt>array [<var>a_sale_id</var>]</dt>
   *   <dd>The list of special categories for the catalogue. Each value is a constant of {@link WlSaleSid}.</dd>
   *
   *   <dt>array [<var>a_shop_category</var>]</dt>
   *   <dd>Shop categories to filter by.</dd>
   *
   *   <dt>int <var>i_last</var></dt>
   *   <dd>The last shown product.</dd>
   *
   *   <dt>int <var>id_order</var></dt><dd>The sort order ID. One of the {@link SortOrderSid} constants.</dd>
   *
   *   <dt>int <var>id_sort</var></dt>
   *   <dd>The sort options ID.</dd>
   *
   *   <dt>string <var>k_business</var></dt>
   *   <dd>The business key.</dd>
   *
   *   <dt>string [<var>k_location</var>]</dt>
   *   <dd>The location key.</dd>
   *
   *   <dt>string [<var>s_title</var>]</dt>
   *   <dd>A title of a product to filter by.</dd>
   *
   *   <dt>string [<var>uid</var>]</dt>
   *   <dd>The UID of a user.</dd>
   * </dl>
   *
   * @get get
   * @var array
   */
  public $a_filter;

  /**
   * The list of elements.
   *
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

