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