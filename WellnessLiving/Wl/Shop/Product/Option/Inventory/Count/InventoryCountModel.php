<?php

namespace WellnessLiving\Wl\Shop\Product\Option\Inventory\Count;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Used to retrieve and change inventory quantities and notes for product options in the store.
 *
 * @method WlModelRequest get() Returns information about product options. Works in two modes: review and search. In review mode, the method returns products with changed inventory quantities and notes. In search mode, the method returns one product and its options (the result of searching by product barcode).  Returns product option details including the current inventory quantity, last change date, and notes. In barcode search mode, returns matching products; in review mode, returns only options whose inventory or notes have been modified via the pending quantity or note maps.
 * @method WlModelRequest post() Saves changes of product inventory quantities and notes.  Persists updated inventory counts and per-option notes for the specified product options. Requires backend access with the store management privilege. Creates an inventory transaction record for audit trail purposes.
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
   * <dl>
   *   <dt>array `a_image`</dt>
   *   <dd>
   *     Information about the product option image:
   *     <dl>
   *       <dt>int `i_height`</dt>
   *       <dd>The image height.</dd>
   * 
   *       <dt>int `i_width`</dt>
   *       <dd>The image width.</dd>
   * 
   *       <dt>string `url`</dt>
   *       <dd>The image URL.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `dl_change`</dt>
   *   <dd>The date of the last product inventory change.</dd>
   * 
   *   <dt>int `i_count`</dt>
   *   <dd>The product option quantity.</dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>The location key.</dd>
   * 
   *   <dt>string `k_shop_product_option`</dt>
   *   <dd>The key of the product option in the store.</dd>
   * 
   *   <dt>string `k_shop_product_option_inventory`</dt>
   *   <dd>The key of the product option inventory in the store.</dd>
   * 
   *   <dt>string `text_category`</dt>
   *   <dd>The title of the store category.</dd>
   * 
   *   <dt>string `text_location`</dt>
   *   <dd>The location title.</dd>
   * 
   *   <dt>string `text_note`</dt>
   *   <dd>The product option inventory note.</dd>
   * 
   *   <dt>string `text_option`</dt>
   *   <dd>The product option title.</dd>
   * 
   *   <dt>string `text_product`</dt>
   *   <dd>The product option title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
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