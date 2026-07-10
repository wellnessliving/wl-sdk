<?php

namespace WellnessLiving\Wl\Billing\Bulk;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlProgramSid;
use WellnessLiving\Wl\WlProgramTypeSid;

/**
 * Returns the list of promotions and products of a business that are available at a specific location.
 *
 * Intended for backend staff scenarios (for example, the "Bulk bill" popup).
 * Promotions are returned with their prices; products are expanded into their options, each with its own price and
 *  location availability.
 *
 * @method WlModelRequest get() Gets the list of promotions and products available at the location.  Validates access to the business, then loads promotions with their prices and products expanded into  their options, keeping only the items available at the requested location.
 */
class PurchaseItemListModel extends WlModelAbstract
{
  /**
   * The list of products available at the location. Each element has the following structure: 
   *
   * <dl>
   *   <dt>array[] `a_option`</dt>
   *   <dd>
   *     The list of product options available at the location. Each element has the following structure:
   *     <dl>
   *       <dt>bool `is_inventory`</dt>
   *       <dd>`true` if the product tracks inventory, `false` otherwise.</dd>
   * 
   *       <dt>string `k_shop_product_option`</dt>
   *       <dd>The product option key. </dd>
   * 
   *       <dt>string `m_price`</dt>
   *       <dd>The regular price of the option.</dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>The product option title.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `k_shop_product`</dt>
   *   <dd>The product key. </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The product title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_product = [];

  /**
   * The list of promotions available at the location. Each element has the following structure: 
   *
   * <dl>
   *   <dt>int `id_program`</dt>
   *   <dd>The promotion program. One of the {@link WlProgramSid} constants.</dd>
   * 
   *   <dt>int `id_program_type`</dt>
   *   <dd>The promotion program type. One of the {@link WlProgramTypeSid} constants.</dd>
   * 
   *   <dt>string `k_promotion`</dt>
   *   <dd>The promotion key. </dd>
   * 
   *   <dt>string `m_price`</dt>
   *   <dd>The promotion price, excluding taxes.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The promotion title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_promotion = [];

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The location key to filter available items by.
   *
   * @get get
   * @var string
   */
  public $k_location = '';
}

?>