<?php

namespace WellnessLiving\Wl\Catalog\StaffApp\CatalogView;

use WellnessLiving\WlModelAbstract;

/**
 * Returns information about an item’s price after taxes.
 */
class CatalogViewModel extends WlModelAbstract
{
  /**
   * Configuration information about the item, which can specify prorated amounts.
   *
   * If set, these values will change the values returned by the endpoint call.
   *
   * <dl>
   *   <dt>float <var>f_promote</var></dt>
   *   <dd>The amount to prorate the item by.</dd>
   *   <dt>bool <var>is_prorate</var></dt>
   *   <dd>If <tt>true</tt> this item is prorated.</dd>
   *   <dt>string <var>m_prorate_custom</var></dt>
   *   <dd>The custom prorate amount.</dd>
   * </dl>
   *
   * @get get
   * @var array
   */
  public $a_config = [];

  /**
   * Contains information about edited taxes.
   *
   * It is `null` if not set yet or taxes are default.
   *
   * The key is the tax identifier and the value is:
   * <dl>
   *   <dt>string <var>k_tax</var></dt>
   *   <dd>The tax ID.</dd>
   *   <dt>string <var>m_tax_custom</var></dt>
   *   <dd>The amount of custom tax.</dd>
   * </dl>
   *
   * @get get
   * @var array
   */
  public $a_tax = [];

  /**
   * Contains information about calculated taxes. The structure of this array is described in {@link RsTax::$a_tax}.
   *
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
   * The ID of the sale category. One of {@link \WellnessLiving\WlSaleSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_sale = 0;

  /**
   * The business key.
   * `null` means system business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The key of the sale item.
   * It can be retrieved with the {@link \WellnessLiving\Wl\Catalog\StaffApp\CatalogList\CatalogListModel} endpoint (see the
   * <var>a_shop_product</var> parameter).
   *
   * @get get
   * @var string
   */
  public $k_id = '';

  /**
   * The key of the product option.
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
   * Amount of sale item without taxes.
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