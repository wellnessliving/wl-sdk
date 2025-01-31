<?php

namespace WellnessLiving\Wl\Shop\Category;

use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of all categories in a business’s store.
 */
class CategoryModel extends WlModelAbstract
{
  /**
   * An array containing information about all store categories.
   * Each array element is an array containing the following fields:
   * <dl>
   *   <dt>
   *     bool <var>is_default</var>
   *   </dt>
   *   <dd>
   *     Whether category is selected as default.
   *   </dd>
   *   <dt>
   *     int <var>i_order</var>
   *   </dt>
   *   <dd>
   *     The display order for the category.
   *   </dd>
   *   <dt>
   *     string <var>k_shop_category</var>
   *   </dt>
   *   <dd>
   *     The shop category key.
   *   </dd>
   *   <dt>
   *     string <var>text_description</var>
   *   </dt>
   *   <dd>
   *     The category description.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     The category name.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_shop_category;

  /**
   * The key of the business to get shop categories for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of the created shop category.
   *
   * @post result
   * @var string
   */
  public $k_shop_category;

  /**
   * Title of new category.
   *
   * @post post
   * @var string
   */
  public $text_title = '';
}

?>