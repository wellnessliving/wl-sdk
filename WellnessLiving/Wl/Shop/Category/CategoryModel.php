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
<dl>
  <dt>bool `is_default`</dt>
  <dd>Whether category is selected as default.</dd>

  <dt>int `i_order`</dt>
  <dd>The display order for the category.</dd>

  <dt>string `k_shop_category`</dt>
  <dd>The shop category key. 

  <dt>string `text_description`</dt>
  <dd>The category description.</dd>

  <dt>string `text_title`</dt>
  <dd>The category name.</dd>
</dl>
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