<?php

namespace WellnessLiving\Wl\Shop\Product\Option\Inventory\Count;

use WellnessLiving\WlModelAbstract;

/**
 * Used to retrieve and change inventory quantities and notes for product options in the store.
 */
class InventoryCountModel extends WlModelAbstract
{
  /**
   * The list of notes for product options in the store.
   * Keys refer to product options in the store. Values refer to text notes.
   *
   * @get get
   * @post get
   * @var array<string, string>
   */
  public $a_note = [];

  /**
   * Information about product options for review or search.
   * Each element contains:
   *
   * @get result
   * @var array[]
   */
<dl>
  <dt>array `a_image`</dt>
  <dd>
    Information about the product option image:
<dl>
  <dt>int <var>i_height</var></dt>
  <dd>The image height.</dd>
  <dt>int <var>i_width</var></dt>
  <dd>The image width.</dd>
  <dt>string <var>url</var></dt>
  <dd>The image URL.</dd>
</dl> <dl>
      <dt>int `i_height`</dt>
      <dd>The image height.</dd>

      <dt>int `i_width`</dt>
      <dd>The image width.</dd>

      <dt>string `url`</dt>
      <dd>The image URL.</dd>
    </dl>
  </dd>

  <dt>string `dl_change`</dt>
  <dd>The date of the last product inventory change.</dd>

  <dt>int `i_count`</dt>
  <dd>The product option quantity.</dd>

  <dt>string `k_location`</dt>
  <dd>The location key.</dd>

  <dt>string `k_shop_product_option`</dt>
  <dd>The key of the product option in the store.</dd>

  <dt>string `k_shop_product_option_inventory`</dt>
  <dd>The key of the product option inventory in the store.</dd>

  <dt>string `text_category`</dt>
  <dd>The title of the store category.</dd>

  <dt>string `text_location`</dt>
  <dd>The location title.</dd>

  <dt>string `text_note`</dt>
  <dd>The product option inventory note.</dd>

  <dt>string `text_option`</dt>
  <dd>The product option title.</dd>

  <dt>string `text_product`</dt>
  <dd>The product option title.</dd>
</dl>
  public $a_product_option = [];

  /**
   * The list of product option quantities in the store.
   * Keys refer to product options in the store. Values refer to product counts.
   *
   * @get get
   * @post get
   * @var array<string, int>
   */
  public $a_quantity = [];

  /**
   * The current business.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * The product barcode, used for the search.
   *
   * @get get
   * @var string
   */
  public $text_barcode;

  /**
   * The current username.
   *
   * @get result
   * @var string
   */
  public $text_user_name;
}

?>