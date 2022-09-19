<?php

namespace WellnessLiving\Wl\Catalog\CatalogList;

use WellnessLiving\WlModelAbstract;

/**
 * Information about a certain item in the store.
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
   *     <tt>true</tt> - client can set promotion auto-renew.
   *     <tt>false</tt> - client can't set promotion auto-renew.
   *   </dd>
   * </dl>
   *
   * For example, for a product it contains inventory information. For a gift card, it contains possible amounts.
   * For a pass/membership/package, it contains information about starting and stopping.
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
   *     The height in pixels.
   *   </dd>
   *   <dt>
   *     int <var>i_width</var>
   *   </dt>
   *   <dd>
   *     The width in pixels.
   *   </dd>
   *   <dt>
   *     bool <var>is_empty</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> - item has no image (in this case ignore other keys of this array).
   *     <tt>false</tt> - item has an image.
   *   </dd>
   *   <dt>
   *     string <var>s_url</var>
   *   </dt>
   *   <dd>
   *     The image URL.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_image = null;

  /**
   * A list of installment plans. Each element has the following next keys:
   * <dl>
   *   <dt>
   *     int <var>i_count</var>
   *   </dt>
   *   <dd>
   *      The number of payments.
   *   </dd>
   *   <dt>
   *     int <var>id_duration</var>
   *   </dt>
   *   <dd>
   *      The duration of a single period.
   *   </dd>
   *   <dt>
   *     int <var>i_period</var>
   *   </dt>
   *   <dd>
   *      The number of periods specified by <var>id_period</var> between individual payments.
   *   </dd>
   *   <dt>
   *     string <var>k_currency</var>
   *   </dt>
   *   <dd>
   *     The payment currency Key.
   *   </dd>
   *   <dt>
   *     string <var>k_pay_installment_template</var>
   *   </dt>
   *   <dd>
   *      The key of the installment plan template.
   *   </dd>
   *   <dt>
   *     string <var>m_amount</var>
   *   </dt>
   *   <dd>
   *     The amount of the installment plan.
   *   </dd>
   *   <dt>
   *     string <var>s_duration</var>
   *   </dt>
   *   <dd>
   *     The title of the installment plan.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_installment_template;

  /**
   * A list of requested goods information.
   * Every element contains keys that correspond to another field with <tt>&#64;get result</tt> in this class.
   *
   * <tt>null</tt> until loaded. And if {@link ElementModel::$text_item} is empty.
   *
   * @get result
   * @var array[]|null
   */
  public $a_item = null;

  /**
   * A list of the item's taxes.
   * Keys - unique tax keys.
   * Values - amounts.
   *
   * @get result
   * @var array
   */
  public $a_tax = null;

  /**
   * The ID of the purchase item category.
   * One of {@link \WellnessLiving\WlPurchaseItemSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_purchase_item = null;

  /**
   * The ID of the item view category. One of {@link \WellnessLiving\Wl\Catalog\PurchaseOptionViewSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_purchase_option_view = null;

  /**
   * The ID of item category.
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
   * The item key.
   * You can get it from {@link \WellnessLiving\Wl\Catalog\StaffApp\CatalogList\CatalogListModel::$a_shop_product}.
   *
   * @get get
   * @var string
   */
  public $k_id = null;

  /**
   * The location key.
   *
   * @get get
   * @var string
   */
  public $k_location = null;

  /**
   * The product option key.
   *
   * @get get
   * @var string|null
   */
  public $k_shop_product_option = null;

  /**
   * The discount amount for a discount code.
   *
   * @get result
   * @var string
   */
  public $m_discount_code = null;

  /**
   * The discount amount for a user's type.
   *
   * @get result
   * @var string
   */
  public $m_discount_login = null;

  /**
   * The price on the price tag.
   *
   * @get result
   * @var string
   */
  public $m_price = null;

  /**
   * The price including taxes.
   *
   * @get result
   * @var string
   */
  public $m_price_include = null;

  /**
   * The amount of taxes.
   *
   * @get result
   * @var string
   */
  public $m_tax = null;

  /**
   * Additional comment(s).
   *
   * @get result
   * @var string
   */
  public $s_comment = null;

  /**
   * A list of goods to get information for. Every element must contain the next keys:
   * <dl>
   *   <dt>int <var>id_sale</var></dt>
   *   <dd>The ID of the item category. One of {@link \WellnessLiving\WlSaleSid} constants.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>The key of the item.</dd>
   *   <dt>string <var>k_shop_product_option</var></dt>
   *   <dd>The key of the product option. <tt>0</tt> if the item is not a product.</dd>
   * </dl>
   * Must be serialized via JSON.
   *
   * If you specify this field, you must NOT specify fields {@link ElementModel::$id_sale}, {@link ElementModel::$k_id},
   * {@link ElementModel::$k_shop_product_option}.
   *
   * <tt>null</tt> to get information of only one item.
   *
   * @get get
   * @var string|null
   */
  public $text_item = null;

  /**
   * The price on the price tag with currency sign.
   *
   * @get result
   * @var string
   */
  public $text_price = null;

  /**
   * The title of the item category.
   *
   * @get result
   * @var string
   */
  public $text_sale = null;

  /**
   * The item title.
   *
   * @get result
   * @var string
   */
  public $text_title = null;

  /**
   * A detailed description.
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