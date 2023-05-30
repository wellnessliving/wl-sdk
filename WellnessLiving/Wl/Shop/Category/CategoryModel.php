<?php

namespace WellnessLiving\Wl\Shop\Category;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns a list of all categories in a business’s store.
 */
class CategoryModel extends WlModelAbstract
{
  /**
   * An array containing information about all store categories.
   * Each array element is an array containing the following fields:
   * <dl>
   *   <dt>int <var>i_order</var></dt>
   *   <dd>The display order for the category.</dd>
   *   <dt>string <var>k_shop_category</var></dt>
   *   <dd>The shop category ID.</dd>
   *   <dt>string <var>text_description</var></dt>
   *   <dd>The category description.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>The category name.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_shop_category=[];

  /**
   * The key of the business to get shop categories for.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;
}

?>