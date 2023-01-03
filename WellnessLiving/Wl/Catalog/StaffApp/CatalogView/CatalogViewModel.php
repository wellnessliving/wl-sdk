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
   *   <dd>The tax ID.
   *   <dt>string <var>m_tax_custom</dt>
   *   <dd>The amount of custom tax.</dd>
   * </dl>
   *
   * @get get
   * @var array|null
   */
  public $a_tax = null;

  /**
   * Contains information about calculated taxes. The structure of this array is described in {@link \RsTax::$a_tax}.
   *
   * It is `null` if not set yet.
   *
   * @get result
   * @var array|null
   */
  public $a_tax_data = null;

  /**
   * The quantity of items.
   *
   * It is `null` if there is no limit of items at the location.
   *
   * @get get
   * @var int|null
   */
  public $i_quantity = null;

  /**
   * The ID of the sale category.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $id_sale = null;

  /**
   * The business ID.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The ID of the sale item.
   * It can be retrieved with the (@link WellnessLiving\Wl\CatalogList\CatalogListMode} endpoint (see the
   * <var>$a_shop_product parameter</var>).
   *
   * `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_id = null;

  /**
   * The ID of the product option.
   *
   * `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_shop_product_option = null;

  /**
   * The custom price of the sale item.
   *
   * It is `null` if not set yet or if price default.
   *
   * @get get
   * @var string|null
   */
  public $m_price = null;

  /**
   * The prorated amount.
   *
   * It is `null` if not calculated yet.
   *
   * @get result
   * @var string
   */
  public $m_prorate = null;

  /**
   * The calculated amount of the sale item, including taxes.
   *
   * It is `null` if not calculated yet.
   *
   * @get result
   * @var string|null
   */
  public $m_total = null;

  /**
   * The calculated amount of tax.
   *
   * `null` if not calculated yet.
   *
   * @get result
   * @var string|null
   */
  public $m_tax = null;

  /**
   * The ID of the user who performed the actions.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>