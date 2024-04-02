<?php

namespace WellnessLiving\Wl\Catalog\CatalogList;

use WellnessLiving\WlModelAbstract;

/**
 * Displays information about store items.
 */
class ListModel extends WlModelAbstract
{
  /**
   * The list of all sale items.
   *
   * @get result
   * @var array
   */
  public $a_product;

  /**
   * The list of products to show with duplicates.
   *
   * Products have their own order within every shop category, and they can be related to several categories.
   * As a design decision, products are sorted in the backend using duplicates for every category.
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