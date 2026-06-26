<?php

namespace WellnessLiving\Wl\Shop\Product\Inventory\Report;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns a list of categories in a business’s store for.
 *
 * @method WlModelRequest get()
 */
class InventoryShopCategoryModel extends WlModelAbstract
{
  /**
   * An array containing information about store categories.
   * Each array element is an array containing the following fields:
   *
   * <dl>
   *   <dt>string `k_shop_category`</dt>
   *   <dd>The shop category key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The category name.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_shop_category = [];

  /**
   * The key of the business to get shop categories for.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>