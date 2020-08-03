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
   * The structure may be different depending on the item category.
   * <dl>
   *   <dt>
   *     bool <var>is_renew_public</var>
   *   </dt>
   *   <dd>
   *     Only for promotions.
   *     <tt>true</tt> - client can set promotion auto renew.
   *     <tt>false</tt> - client can not set promotion auto renew.
   *   </dd>
   * </dl>
   *
   * For example, for a product it contains inventory information. For a gift card - possible amounts.
   * For a pass/membership/package - information about starting and stopping.
   *
   * @get result
   * @var array
   */
  public $a_data = null;

  /**
   * Image information:
   * <dl>
   *   <dt>
   *     int <var>i_height</var>
   *   </dt>
   *   <dd>
   *     Height in pixels.
   *   </dd>
   *   <dt>
   *     int <var>i_width</var>
   *   </dt>
   *   <dd>
   *     Width in pixels.
   *   </dd>
   *   <dt>
   *     bool <var>is_empty</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> - item has no image (in this case ignore another keys of this array).
   *     <tt>false</tt> - item has an image.
   *   </dd>
   *   <dt>
   *     string <var>s_url</var>
   *   </dt>
   *   <dd>
   *     Image URL.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_image = null;

  /**
   * A list of installment plans. Each element has next keys:
   * <dl>
   *   <dt>
   *     int <var>i_count</var>
   *   </dt>
   *   <dd>
   *      Number of payments.
   *   </dd>
   *   <dt>
   *     int <var>id_duration</var>
   *   </dt>
   *   <dd>
   *      Duration of a single period.
   *   </dd>
   *   <dt>
   *     int <var>i_period</var>
   *   </dt>
   *   <dd>
   *      Number of periods specified by <var>id_period</var> between individual payments.
   *   </dd>
   *   <dt>
   *     string <var>k_currency</var>
   *   </dt>
   *   <dd>
   *     Payment currency Key.
   *   </dd>
   *   <dt>
   *     string <var>k_pay_installment_template</var>
   *   </dt>
   *   <dd>
   *      Key of installment plan template.
   *   </dd>
   *   <dt>
   *     string <var>m_amount</var>
   *   </dt>
   *   <dd>
   *     Amount of installment plan.
   *   </dd>
   *   <dt>
   *     string <var>s_duration</var>
   *   </dt>
   *   <dd>
   *     Title of installment plan.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_installment_template;

  /**
   * List of requested goods information.
   * Every element contains keys that correspond to each another field with <tt>&#64;get result</tt> in this class.
   *
   * <tt>null</tt> until loaded. And if {@link ElementModel::$text_item} is empty.
   *
   * @get result
   * @var array[]|null
   */
  public $a_item = null;

  /**
   * List of item taxes.
   * Keys - unique tax keys.
   * Values - amounts.
   *
   * @get result
   * @var array
   */
  public $a_tax = null;

  /**
   * ID of purchase item category.
   * One of {@link \WellnessLiving\WlPurchaseItemSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_purchase_item = null;

  /**
   * ID of item view category. One of {@link \WellnessLiving\Wl\Catalog\PurchaseOptionViewSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_purchase_option_view = null;

  /**
   * ID of item category.
   * One of {@link \WellnessLiving\WlSaleSid} constants.
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
   * You can get it from {@link \WellnessLiving\Wl\Catalog\StaffApp\CatalogList\CatalogListModel::$a_shop_product}.
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
   * Product option key.
   *
   * @get get
   * @var string|null
   */
  public $k_shop_product_option = null;

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
   * Price on the price tag.
   *
   * @get result
   * @var string
   */
  public $m_price = null;

  /**
   * Price including taxes.
   *
   * @get result
   * @var string
   */
  public $m_price_include = null;

  /**
   * Amount of texes.
   *
   * @get result
   * @var string
   */
  public $m_tax = null;

  /**
   * Additional comment.
   *
   * @get result
   * @var string
   */
  public $s_comment = null;

  /**
   * List of goods to get information for. Every element must contain next keys:
   * <dl>
   *   <dt>int <var>id_sale</var></dt>
   *   <dd>ID of item category. One of {@link \WellnessLiving\WlSaleSid} constants.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>Key of item.</dd>
   *   <dt>string <var>k_shop_product_option</var></dt>
   *   <dd>Key of product option. <tt>0</tt> if item is not a product.</dd>
   * </dl>
   * Must be serialized via JSON.
   *
   * If you specify this field, you must NOT specify fields {@link ElementModel::$id_sale}, {@link ElementModel::$k_id},
   * {@link ElementModel::$k_shop_product_option}.
   *
   * <tt>null</tt> to get information of only 1 item.
   *
   * @get get
   * @var string|null
   */
  public $text_item = null;

  /**
   * Price on price tag with currency sign.
   *
   * @get result
   * @var string
   */
  public $text_price = null;

  /**
   * Title of item category.
   *
   * @get result
   * @var string
   */
  public $text_sale = null;

  /**
   * Item title.
   *
   * @get result
   * @var string
   */
  public $text_title = null;

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