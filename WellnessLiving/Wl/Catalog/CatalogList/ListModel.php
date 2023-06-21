<?php

namespace WellnessLiving\Wl\Catalog\CatalogList;

use WellnessLiving\WlModelAbstract;

/**
 * Information about store items.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of all sale items.
   *
   * @get result
   * @var array
   */
  public $a_product;

  /**
   * List of products to show with duplicates.
   *
   * Products have their own order within every category. On the other hand they can be related to several shop
   * categories. Due to the fact that sorting realization in browser would be rather complicated It was decided to
   * sort products in backend using duplicates for every shop category.
   *
   * @get result
   * @var array
   */
  public $a_product_duplicate;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of a location.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The key of user.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>