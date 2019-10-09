<?php

namespace WellnessLiving\Wl\Catalog\CatalogList;

use WellnessLiving\WlModelAbstract;

/**
 * Information about certain item of store.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * Additional information specific for the item.
   *
   * @get result
   * @var array
   */
  public $a_data = null;

  /**
   * Image information.
   *
   * @get result
   * @var array
   */
  public $a_image = null;

  /**
   * Tax information.
   *
   * @get result
   * @var array
   */
  public $a_tax = null;

  /**
   * Price on the price tag.
   *
   * @get result
   * @var string
   */
  public $f_price = null;

  /**
   * Price including taxes.
   *
   * @get result
   * @var string
   */
  public $f_price_include = null;

  /**
   * Amount of texes.
   *
   * @get result
   * @var string
   */
  public $f_tax = null;

  /**
   * ID of purchase item category.
   * One of {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_purchase_item = null;

  /**
   * ID of item view category.
   *
   * @get result
   * @var int
   */
  public $id_purchase_option_view = null;

  /**
   * ID of item category.
   *
   * @get get
   * @var int
   */
  public $id_sale = null;

  /**
   * <tt>true</tt> if the item requires a contract, <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_contract = null;

  /**
   * Item key.
   *
   * @get get
   * @var string
   */
  public $k_id = null;

  /**
   * Location key.
   *
   * @get get
   * @var string
   */
  public $k_location = null;

  /**
   * Discount amount for a discount code.
   *
   * @get result
   * @var string
   */
  public $m_discount_code = null;

  /**
   * Discount amount for a user's type.
   *
   * @get result
   * @var string
   */
  public $m_discount_login = null;

  /**
   * Additional comment.
   *
   * @get result
   * @var string
   */
  public $s_comment = null;

  /**
   * Price of price tag with currency sign.
   *
   * @get result
   * @var string
   */
  public $s_price = null;

  /**
   * Title of item category.
   *
   * @get result
   * @var string
   */
  public $s_sate = null;

  /**
   * Item title.
   *
   * @get result
   * @var string
   */
  public $s_title = null;

  /**
   * Detailed description.
   *
   * @get result
   * @var string
   */
  public $xml_description = null;

  /**
   * Special instructions.
   *
   * @get result
   * @var string
   */
  public $xml_special = null;
}

?>