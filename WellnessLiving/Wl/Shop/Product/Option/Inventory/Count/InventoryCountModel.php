<?php

namespace WellnessLiving\Wl\Shop\Product\Option\Inventory\Count;

use WellnessLiving\WlModelAbstract;

/**
 * Change inventory quantity and notes for the shop product options.
 */
class InventoryCountModel extends WlModelAbstract
{
  /**
   * List of notes for the shop product options.
   *
   * @get get
   * @post get
   * @var array
   */
  public $a_note = [];

  /**
   * Information about product options for review or search.
   * Each element contains:
   * <dl>
   *   <dt>array <var>a_image</var></dt>
   *   <dd>Information about product image:
   *     <dl>
   *       <dt>int <var>i_height</var></dt>
   *       <dd>Height of the image.</dd>
   *       <dt>int <var>i_width</var></dt>
   *       <dd>Width of the image.</dd>
   *       <dt>string <var>url</var></dt>
   *       <dd>URL of the image.</dd>
   *     </dl>
   *   </dd>
   *   <dt>string <var>dl_change</var></dt>
   *   <dd>Date of the last change product inventory.</dd>
   *   <dt>int <var>i_count</var></dt>
   *   <dd>Product quantity.</dd>
   *   <dt>string <var>k_location</var></dt>
   *   <dd>Key of the location.</dd>
   *   <dt>string <var>k_shop_product_option</var></dt>
   *   <dd>Key of the shop product option.</dd>
   *   <dt>string <var>k_shop_product_option_inventory</var></dt>
   *   <dd>Key of the shop product option inventory.</dd>
   *   <dt>string <var>text_category</var></dt>
   *   <dd>Online Store categories title.</dd>
   *   <dt>string <var>text_location</var></dt>
   *   <dd>Location title.</dd>
   *   <dt>string <var>text_note</var></dt>
   *   <dd>Product option inventory note.</dd>
   *   <dt>string <var>text_option</var></dt>
   *   <dd>Product option title.</dd>
   *   <dt>string <var>text_product</var></dt>
   *   <dd>Product title.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_product_option = [];

  /**
   * List of quantities of the shop product options.
   *
   * @get get
   * @post get
   * @var array
   */
  public $a_quantity = [];

  /**
   * Current business.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Product barcode for the search.
   *
   * @get get
   * @var string
   */
  public $text_barcode;

  /**
   * Current user name.
   *
   * @get result
   * @var string
   */
  public $text_user_name;
}

?>