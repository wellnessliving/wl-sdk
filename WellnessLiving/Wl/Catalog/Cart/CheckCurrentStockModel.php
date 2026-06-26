<?php

namespace WellnessLiving\Wl\Catalog\Cart;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * API to check current stock count.
 *
 * @method WlModelRequest get() Checks showing confirmation, when product's inventory current count would be negative.
 * @method WlModelRequest post() Checks showing confirmation, when product's inventory current count would be negative.  Works exactly as {@link \Wl\Catalog\Cart\CheckCurrentStockApi::get()} method.
 */
class CheckCurrentStockModel extends WlModelAbstract
{
  /**
   * Current stock counts for products. Every element has next fields:
   *
   * <dl>
   *   <dt>int `i_current`</dt>
   *   <dd>Product's inventory count at current location.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>Product option key.</dd>
   * 
   *   <dt>string `html_title`</dt>
   *   <dd>Product title.</dd>
   * </dl>
   * @get result
   * @post result
   * @var array
   */
  public $a_current;

  /**
   * Purchase items.
   * Every element has next fields:
   *
   * <dl>
   *   <dt>int `i_count`</dt>
   *   <dd>Current stock quantity.</dd>
   * 
   *   <dt>int `id_purchase_item`</dt>
   *   <dd>Purchase Item ID, one of {@link WlPurchaseItemSid} constants.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *
   * </dl>
   * @get get
   * @post get
   * @var array[]
   */
  public $a_item = [];

  /**
   * Purchase items.
   * This field is the same as {@link CheckCurrentStockModel::$a_item}, but for POST method.
   *
   * Currently, it's prohibited to make API field working for both GET and POST, so it's necessary to make another field
   *   for different method.
   *
   * Every element has next fields:
   *
   * <dl>
   *   <dt>int `i_count`</dt>
   *   <dd>Current stock quantity.</dd>
   * 
   *   <dt>int `id_purchase_item`</dt>
   *   <dd>Purchase Item ID, one of {@link WlPurchaseItemSid} constants.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *
   * </dl>
   * @post post
   * @var array[]
   */
  public $a_item_post = [];

  /**
   * <tt>true</tt> if user has access to the business, <tt>false</tt> otherwise.
   *
   * @get result
   * @post result
   * @var bool
   */
  public $has_access;

  /**
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * <tt>null</tt> if not set.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_location;

  /**
   * <tt>true</tt> if show confirmation of negative current count, <tt>false</tt> otherwise.
   *
   * @get result
   * @post result
   * @var bool
   */
  public $show_confirmation;
}

?>