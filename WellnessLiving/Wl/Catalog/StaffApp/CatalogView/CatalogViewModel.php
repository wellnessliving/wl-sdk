<?php

namespace WellnessLiving\Wl\Catalog\StaffApp\CatalogView;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Catalog\StaffApp\CatalogList\CatalogListModel;
use WellnessLiving\Wl\Tax\WlTaxSid;
use WellnessLiving\Wl\WlSaleSid;

/**
 * Returns information about an item’s price after taxes.
 *
 * @method WlModelRequest get() Calculates price information about sale item.  Used in the staff app checkout to show the real-time price of a single line item as the staff member configures it (adjusting quantity, custom price, or proration). Returns the full tax breakdown so the staff member sees exactly what the client will be charged.
 */
class CatalogViewModel extends WlModelAbstract
{
  /**
   * Configuration information about the item, which can specify prorated amounts.
   *
   * If set, these values will change the values returned by the endpoint call.
   *
   * <dl>
   *   <dt>float `f_promote`</dt>
   *   <dd>The amount to prorate the item by.</dd>
   * 
   *   <dt>bool `is_prorate`</dt>
   *   <dd>If <tt>true</tt>, this item is prorated.</dd>
   * 
   *   <dt>string `m_prorate_custom`</dt>
   *   <dd>The custom prorate amount.</dd>
   * </dl>
   * @get get
   * @var array
   */
  public $a_config = [];

  /**
   * Contains information about edited taxes.
   *
   * This will be `null` if not set yet or default taxes are used.
   *
   * The key is the tax identifier, where the value is:
   *
   * <dl>
   *   <dt>string `k_tax`</dt>
   *   <dd>The tax ID.</dd>
   * 
   *   <dt>string `m_tax_custom`</dt>
   *   <dd>The amount of custom tax.</dd>
   * </dl>
   * @get get
   * @var array
   */
  public $a_tax = [];

  /**
   * Contains information about calculated taxes.
   *
   * <dl>
   *   <dt>float `f_tax`</dt>
   *   <dd>The calculated tax amount applied by this rule.</dd>
   * 
   *   <dt>string `f_tax_discount`</dt>
   *   <dd>The tax amount after applying all discounts.</dd>
   * 
   *   <dt>string `f_tax_discount_login`</dt>
   *   <dd>The tax amount after applying the client type discount only.</dd>
   * 
   *   <dt>float `f_value`</dt>
   *   <dd>The tax rate. Its meaning depends on `id_tax`.</dd>
   * 
   *   <dt>int `id_tax`</dt>
   *   <dd>The tax type. One of {@link WlTaxSid} constants.</dd>
   * 
   *   <dt>string `k_tax`</dt>
   *   <dd>The tax key. </dd>
   * 
   *   <dt>string `s_tax`</dt>
   *   <dd>The tax name.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_tax_data;

  /**
   * The quantity of items.
   *
   * @get get
   * @var int
   */
  public $i_quantity = '';

  /**
   * The ID of the sale category. One of the {@link WlSaleSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_sale = 0;

  /**
   * The business key.
   * This will be `null` for the system business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The key of the sale item.
   * This can be retrieved with the {@link CatalogListModel} endpoint (see the
   * <var>a_shop_product</var> parameter).
   *
   * @get get
   * @var string
   */
  public $k_id = '';

  /**
   * The product option key.
   *
   * @get get
   * @var string
   */
  public $k_shop_product_option = '';

  /**
   * The custom price of the sale item.
   *
   * @get get
   * @var string
   */
  public $m_price = '';

  /**
   * The prorated amount.
   *
   * @get result
   * @var string
   */
  public $m_prorate;

  /**
   * The amount of the sale item, excluding taxes.
   *
   * @get result
   * @var string
   */
  public $m_subtotal;

  /**
   * The calculated amount of tax.
   *
   * @get result
   * @var string
   */
  public $m_tax;

  /**
   * The calculated amount of the sale item, including taxes.
   *
   * @get result
   * @var string
   */
  public $m_total;

  /**
   * The ID of the user who performed the actions.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>