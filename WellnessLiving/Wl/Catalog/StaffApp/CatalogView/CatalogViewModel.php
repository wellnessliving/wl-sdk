<?php

namespace WellnessLiving\Wl\Catalog\StaffApp\CatalogView;

use WellnessLiving\WlModelAbstract;

/**
 * Model to calculate price information for sale item.
 */
class CatalogViewModel extends WlModelAbstract
{
  /**
   * Information about item.
   *
   * @get get
   * @var array|null
   */
  public $a_config = [];

  /**
   * Contains information about edited taxes.
   *
   * <tt>null</tt> if not set yet or taxes are default.
   *
   * The key is tax identifier and the value are:
   * <dl>
   *   <dt>string <var>k_tax</var></dt>
   *   <dd>Tax identifier, primary key in {@link \RsTaxSql}.
   *   <dt>string <var>m_tax_custom</dt>
   *   <dd>Amount of custom tax.</dd>
   * </dl>
   *
   * @get get
   * @var array
   */
  public $a_tax = null;

  /**
   * Contains information about calculated taxes. Structure of this array is described in {@link \RsTax::$a_tax}.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var array
   */
  public $a_tax_data = null;

  /**
   * Quantity of items.
   *
   * @get get
   * @var int|null
   */
  public $i_quantity = null;

  /**
   * ID of sale category.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $id_sale = null;

  /**
   * Purchase item ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var int|null
   */
  public $id_purchase_item = null;

  /**
   * Business ID.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * ID of the sale item.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_id = null;

  /**
   * ID of the product option.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_shop_product_option = null;

  /**
   * Custom price of the sale item.
   *
   * <tt>null</tt> if not set yet or if price default.
   *
   * @get get
   * @var string|null
   */
  public $m_price = null;

  /**
   * Prorate amount.
   *
   * <tt>null</tt> if not calculated yet.
   *
   * @get result
   * @var string
   */
  public $m_prorate = null;

  /**
   * Calculated amount of money of the sale item including the taxes.
   *
   * <tt>null</tt> if not calculated yet.
   *
   * @get result
   * @var string|null
   */
  public $m_total = null;

  /**
   * Calculated amount of tax.
   *
   * <tt>null</tt> if not calculated yet.
   *
   * @get result
   * @var string|null
   */
  public $m_tax = null;

  /**
   * User ID who make actions.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>