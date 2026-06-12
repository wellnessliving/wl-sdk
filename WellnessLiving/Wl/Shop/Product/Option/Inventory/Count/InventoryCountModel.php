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