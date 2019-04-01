<?php

namespace WellnessLiving\Wl\Shop\Category;

use WellnessLiving\WlModelAbstract;

/**
 * Categories of the online store.
 */
class CategoryModel extends WlModelAbstract
{
  /**
   * Information for shop categories. Each element is an array containing the following elements.<dl>
   *   <dt>int <var>i_order</var></dt>
   *   <dd>The order in which to display the categories.</dd>
   *   <dt>string <var>k_shop_category</var></dt>
   *   <dd>The shop category ID.</dd>
   *   <dt>string <var>text_description</var></dt>
   *   <dd>The description of the category.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>The title of shop category.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_shop_category=[];

  /**
   * Business ID of the business to get shop categories for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;
}

?>