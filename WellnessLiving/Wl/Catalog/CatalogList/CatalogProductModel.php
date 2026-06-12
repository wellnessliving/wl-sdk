<?php

namespace WellnessLiving\Wl\Catalog\CatalogList;

use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of products.
 */
class CatalogProductModel extends WlModelAbstract
{
  /**
   * Categories with sort settings. Keys refer to shop category keys. Values refer to sort settings. Contains the following structure: 
   *
   * @get result
   * @var array[]
   */
  public $a_category_sort;

  /**
   * Additional data to filter products. 
   *
   * @get get
   * @var array
   */
  public $a_filter;

  /**
   * The list of products. Each element has the following keys: 
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

?>