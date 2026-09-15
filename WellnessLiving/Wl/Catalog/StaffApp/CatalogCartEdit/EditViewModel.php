<?php

namespace WellnessLiving\Wl\Catalog\StaffApp\CatalogCartEdit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlSaleSid;

/**
 * Products list for online store.
 *
 * @method WlModelRequest get() Calculates price information about sale item.  Validates the location, user, and requested sale item, builds the appropriate purchase  item (product, promotion, or other catalog item), applies any prorate configuration,  manual discount rules for the client, and manually set taxes, then returns the  resulting subtotal, tax, discount, and total amounts for the requested quantity.
 */
class EditViewModel extends WlModelAbstract
{
  /**
   * Configuration information.
   *
   * Empty array means not set. May include: 
   *
   * <dl>
   *   <dt>string `dt_start`</dt>
   *   <dd>Local date when the promotion starts, in `Y-m-d` format. Required when
   *    `is_pay_when_start` is `true`.</dd>
   * 
   *   <dt>bool `is_pay_when_start`</dt>
   *   <dd>`true` if the client should be charged only once the promotion actually starts.</dd>
   * 
   *   <dt>bool `is_prorate`</dt>
   *   <dd>`true` to calculate a prorated tax amount for the item.</dd>
   * 
   *   <dt>bool `is_prorate_only`</dt>
   *   <dd>`true` to use only the prorated amount as the taxable amount.</dd>
   * 
   *   <dt>string `m_prorate_custom`</dt>
   *   <dd>Custom prorated amount that overrides the automatically calculated one.</dd>
   * </dl>
   * @get get
   * @var array
   */
  public $a_config = [];

  /**
   * List of manual set taxes.
   *
   * Empty array means not set. Each key is the tax key, and the value is the manually set
   *  tax amount for that tax.
   *
   * @get get
   * @var array<string, string>
   */
  public $a_tax = [];

  /**
   * Contains information about taxes. Each key is the tax key, and the value describes the
   *  calculated amount for that tax: 
   *
   * <dl>
   *   <dt>string `m_tax`</dt>
   *   <dd>Calculated tax amount.</dd>
   * </dl>
   * @get result
   * @var array<string, array>
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