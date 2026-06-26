<?php

namespace WellnessLiving\Wl\Shop\Category\StaffApp;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Categories of online store.
 *
 * @method WlModelRequest get() This method is called to process GET query.
 */
class CategoryModel extends WlModelAbstract
{
  /**
   * Categories in online store for business {@link \WellnessLiving\Wl\Shop\Category\CategoryModel::$k_business}, with next keys:
   *
   * <dl>
   *   <dt>int `i_order`</dt>
   *   <dd>Shop category order.</dd>
   * 
   *   <dt>string `k_shop_category`</dt>
   *
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>Category description.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Category title.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_shop_category;

  /**
   * Key of business to get categories for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>