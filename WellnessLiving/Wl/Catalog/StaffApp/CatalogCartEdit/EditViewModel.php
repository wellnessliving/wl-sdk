<?php

namespace WellnessLiving\Wl\Catalog\StaffApp\CatalogCartEdit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlSaleSid;

/**
 * Products list for online store.
 *
 * @method WlModelRequest get() Calculates price information about sale item.
 */
class EditViewModel extends WlModelAbstract
{
  /**
   * Configuration information.
   *
   * Empty array means not set.
   *
   * @get get
   * @var array
   */
  public $a_config = [];

  /**
   * List of manual set taxes.
   *
   * Empty array means not set.
   *
   * @get get
   * @var array
   */
  public $a_tax = [];

  /**
   * Contains information about taxes.
   *
   * @get result
   * @var array
   */
  public $a_tax_data;

  /**
   * Quantity of items.
   *
   * Empty value means not set.
   *
   * @get get
   * @var int
   */
  public $i_quantity = '';

  /**
   * ID of sale category. One of {@link WlSaleSid}.
   *
   * Empty value means not set.
   *
   * @get get
   * @var int
   */
  public $id_sale = 0;

  /**
   * ID of the sale item.
   *
   * Empty value means not set.
   *
   * @get get
   * @var string
   */
  public $k_id = '';

  /**
   * Location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * Shop product option ID.
   *
   * Empty value means not set.
   *
   * @get get
   * @var string
   */
  public $k_shop_product_option = '';

  /**
   * Discount value of the sale item.
   *
   * @get result
   * @var string
   */
  public $m_discount;

  /**
   * Price amount.
   *
   * Empty value means not set.
   *
   * @get get
   * @var string
   */
  public $m_price = '';

  /**
   * Prorate amount.
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
   * Amount of tax.
   *
   * @get result
   * @var string
   */
  public $m_tax;

  /**
   * Amount of sale item including taxes and quantity.
   *
   * @get result
   * @var string
   */
  public $m_total;

  /**
   * Current user ID.
   *
   * Empty value means not set.
   *
   * @get get
   * @var string
   */
  public $uid = '';

  /**
   * Client user ID.
   *
   * Empty string or <tt>false</tt> means 'walk-in' option
   *
   * @get get
   * @var string
   */
  public $uid_customer = '0';
}

?>