<?php

namespace WellnessLiving\Wl\Shop\Category;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns a list of all categories in a business’s store.
 *
 * @method WlModelRequest get() Returns the list of shop categories available for the given business.  Returns all store categories that the current user is allowed to access, including their titles, descriptions, and display order. Guest and client users see only public categories; staff and admin users may see additional categories based on their access level.
 * @method WlModelRequest post() Creates new shop category.  Creates a new product category in the business store with the given title. Requires backend access with the appropriate store management privilege.
 */
class CategoryModel extends WlModelAbstract
{
  /**
   * An array containing information about all store categories.
   * Each array element is an array containing the following fields:
   *
   * <dl>
   *   <dt>bool `is_default`</dt>
   *   <dd>Whether category is selected as default.</dd>
   * 
   *   <dt>int `i_order`</dt>
   *   <dd>The display order for the category.</dd>
   * 
   *   <dt>string `k_shop_category`</dt>
   *   <dd>The shop category key. </dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>The category description.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The category name.</dd>
   * </dl>
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