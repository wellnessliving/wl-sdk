<?php

namespace WellnessLiving\Wl\Catalog\CatalogList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlSaleSid;

/**
 * Displays information about store items.
 */
class ListModel extends WlModelAbstract
{
  /**
   * Arguments from direct purchase link, which can give additional access to products, which are available
   *   only by such link.
   *
   * @get get
   * @var array
   */
<dl>
  <dt>int `id_sale`</dt>
  <dd>Type of the item from {@link WlSaleSid}.</dd>

  <dt>bool `is_product`</dt>
  <dd>
    `true` if `k_id` value is product key, `false` if `k_id` value is product option key.
     Optional. Default value is `false`.
     Used for `id_
  </dd>

  <dt>string `k_id`</dt>
  <dd>Key of item.</dd>
</dl>
  public $a_direct_link = [];

  /**
   * The list of all sale items (de-duplicated). Each element has the following keys: 
   *
   * @get result
   * @var array[]
   */
<dl>
  <dt>string[] `a_location`</dt>
  <dd>
    The list of location keys where the sale item is available.
/dd>

  <dt>string[] `a_shop_category`</dt>
  <dd>Shop category keys the item belongs to.


  <dt>string `dtu_create`</dt>
  <dd>UTC creation date of the item in MySQL format.</dd>

  <dt>string `f_price`</dt>
  <dd>The item price.</dd>

  <dt>bool `hide_application`</dt>
  <dd>`true` if the item should be hidden from the application, `false` otherwise.</dd>

  <dt>int `id_sale`</dt>
  <dd>The sale category ID. One of the {@link WlSaleSid} constants.</dd>

  <dt>bool `is_direct`</dt>
  <dd>`true` if the item was accessed via a direct purchase link, `false` otherwise.</dd>

  <dt>bool `is_introductory`</dt>
  <dd>`true` if the item is an introductory offer, `false` otherwise.</dd>

  <dt>string `k_id`</dt>
  <dd>The item key.</dd>

  <dt>string `k_shop_category`</dt>
  <dd>
    The primary shop category key for this item entry.
/dd>

  <dt>string `s_key`</dt>
  <dd>The unique string key identifying the item (product key combined with its DB SID).</dd>

  <dt>string `s_title`</dt>
  <dd>The item title.</dd>

  <dt>string `url_catalog`</dt>
  <dd>Direct URL to the catalog view page for this item.</dd>
</dl>
  public $a_product = [];

  /**
   * The list of products to show with duplicates.
   *
   * Products have their own order within every shop category, and they can be related to several categories.
   * As a design decision, products are sorted in the backend using duplicates for every category.
   *
   * @get result
   * @var array
   */
<dl>
  <dt>string[] `a_location`</dt>
  <dd>
    The list of location keys where the sale item is available.
/dd>

  <dt>string[] `a_shop_category`</dt>
  <dd>Shop category keys the item belongs to.


  <dt>string `dtu_create`</dt>
  <dd>UTC creation date of the item in MySQL format.</dd>

  <dt>string `f_price`</dt>
  <dd>The item price.</dd>

  <dt>bool `hide_application`</dt>
  <dd>`true` if the item should be hidden from the application, `false` otherwise.</dd>

  <dt>int `id_sale`</dt>
  <dd>The sale category ID. One of the {@link WlSaleSid} constants.</dd>

  <dt>bool `is_direct`</dt>
  <dd>`true` if the item was accessed via a direct purchase link, `false` otherwise.</dd>

  <dt>bool `is_introductory`</dt>
  <dd>`true` if the item is an introductory offer, `false` otherwise.</dd>

  <dt>string `k_id`</dt>
  <dd>The item key.</dd>

  <dt>string `k_shop_category`</dt>
  <dd>
    The primary shop category key for this item entry.
/dd>

  <dt>string `s_key`</dt>
  <dd>The unique string key identifying the item (product key combined with its DB SID).</dd>

  <dt>string `s_title`</dt>
  <dd>The item title.</dd>

  <dt>string `url_catalog`</dt>
  <dd>Direct URL to the catalog view page for this item.</dd>
</dl>
  public $a_product_duplicate;

  /**
   * `true` to consider the requirement to have a credit card for booking
   * (this requirement can be set in business settings)
   * `false` to ignore it.
   *
   * @get get
   * @var bool
   */
  public $is_credit_card_check = true;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of a location. If `0`, all products in the business are retrieved.
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