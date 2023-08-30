<?php

namespace WellnessLiving\Wl\Catalog\CatalogList;

use WellnessLiving\WlModelAbstract;

/**
 * Information about a certain item in the store.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * Age restriction config.
   *
   * Age restrictions for item fills when they are configured for specific item and API requested from back side,
   * or when age restriction are public.
   *
   * <dl>
   *   <dt>int|null <var>i_age_from</var></dt>
   *   <dd>The minimum age permitted for the event. This will be `null` if a minimum age isn't set or available.</dd>
   *   <dt>int|null <var>i_age_to</var></dt>
   *   <dd>The maximum age permitted for the event. This will be `null` if a maximum age isn't set or available.</dd>
   *   <dt>bool <var>is_age_public</var></dt>
   *   <dd>This will be `true` if age restrictions are public and available. Otherwise, this will be `false` if they're hidden.
   *     When restrictions are hidden and current user isn't a staff member, the age range will be empty.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_age_restriction;

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
  public $a_data;

  /**
   * Information about discount code:
   * <dl>
   *   <dt>string <var>f_amount</var></dt>
   *   <dd>Fixed amount of the discount.</dd>
   *   <dt>float <var>f_percent</var></dt>
   *   <dd>Percentage amount of the discount.</dd>
   *   <dt>int <var>i_limit</var></dt>
   *   <dd></dd>
   *   <dt>string <var>k_discount_code</var></dt>
   *   <dd>Discount code key.</dd>
   *   <dt>string <var>s_discount_code</var></dt>
   *   <dd>Discount code value.</dd>
   * </dl>
   *
   * @get get
   * @var array
   */
  public $a_discount_code = [];

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
  public $a_image;

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
   *      The duration of a single period. One of {@link \WellnessLiving\Core\a\ADurationSid} constants.
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
   * <dl>
   *   <dt>array <var>a_data</var></dt>
   *   <dd>Contains additional specified data for the sale item.</dd>
   *
   *   <dt>array <var>a_image</var></dt>
   *   <dd>Information about one image connected to a sale item.</dd>
   *
   *   <dt>array <var>a_tax</var></dt>
   *   <dd>Contains information about taxes. Structure of this array is described in {@link RsTax::$a_tax}.</dd>
   *
   *   <dt>string <var>id_purchase_option_view</var></dt>
   *   <dd>Purchase option view type, one of {@link \WellnessLiving\Wl\Catalog\PurchaseOptionViewSid}.</dd>
   *
   *   <dt>string <var>m_discount_code</var></dt>
   *   <dd>Amount of discount code.</dd>
   *
   *   <dt>string <var>m_discount_login</var></dt>
   *   <dd>Amount of discount for client type.</dd>
   *
   *   <dt>string <var>s_comment</var></dt>
   *   <dd>Additional information about sale item. For example: information about 'introductory offer'.</dd>
   *
   *   <dt>string <var>s_price</var></dt>
   *   <dd>Price of the sale item in human readable format.</dd>
   *
   *   <dt>string <var>s_sale</var></dt>
   *   <dd>Category title of the sale item.</dd>
   *
   *   <dt>string <var>s_title</var></dt>
   *   <dd>Title of sale item.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_item;

  /**
   * List of items groped by sale categories on the store page.
   * Keys are sale IDs {@link \WellnessLiving\WlSaleSid}, values - data to identify an item:<dl>
   *   <dt>int <var>id_sale</var></dt>
   *   <dd>ID of item category. One of {@link \WellnessLiving\WlSaleSid} constants.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>Primary key of item.</dd>
   *   <dt>string <var>k_shop_product_option</var></dt>
   *   <dd>Product option. <tt>0</tt> for any other cases.</dd>
   * </dl>
   *
   * @get get
   * @var array[]
   */
  public $a_sale_id_group = [];

  /**
   * A list of the item's taxes.
   * Keys - tax keys.
   * Values - The amount of tax
   *
   * @get result
   * @var array
   */
  public $a_tax;

  /**
   * Client prorate date.
   *
   * `null` in case when client prorate date is not passed.
   *
   * @get get
   * @var string|null
   */
  public $dl_client_prorate;

  /**
   * Price of the sale item.
   *
   * @get result
   * @var string|null
   */
  public $f_price;

  /**
   * Price of the sale item including the tax.
   *
   * @get result
   * @var string|null
   */
  public $f_price_include;

  /**
   * Amount of tax.
   *
   * @get result
   * @var string|null
   */
  public $f_tax;

  /**
   * Description about the sale item.
   *
   * @get result
   * @var string|null
   */
  public $html_description;

  /**
   * Special instructions of the sale item.
   *
   * @get result
   * @var string|null
   */
  public $html_special;

  /**
   * Image height in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_image_height = 0;

  /**
   * Image width in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_image_width = 0;

  /**
   * Promotion image height in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_promotion_image_height = 0;

  /**
   * Promotion image width in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_promotion_image_width = 0;

  /**
   * The ID of the purchase item category.
   * One of {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_purchase_item;

  /**
   * The ID of the item view category. One of {@link \WellnessLiving\Wl\Catalog\PurchaseOptionViewSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_purchase_option_view;

  /**
   * The ID of item category.
   * One of {@link \WellnessLiving\WlSaleSid} constants.
   *
   * @get get,result
   * @var int
   */
  public $id_sale = 0;

  /**
   * Whether API is called in the backend mode.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;


  /**
   * <tt>true</tt> if the item requires a contract, <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_contract;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The item key.
   *
   * @get get,result
   * @var string
   */
  public $k_id = 0;

  /**
   * The location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The product option key.
   *
   * <tt>null</tt> if not initialized yet.
   *
   * @get get,result
   * @var string|null
   */
  public $k_shop_product_option = '';

  /**
   * The discount amount for a discount code.
   *
   * @get result
   * @var string
   */
  public $m_discount_code;

  /**
   * The discount amount for a user's type.
   *
   * @get result
   * @var string
   */
  public $m_discount_login;

  /**
   * The price on the price tag.
   *
   * @get result
   * @var string
   */
  public $m_price;

  /**
   * The price including taxes.
   *
   * @get result
   * @var string
   */
  public $m_price_include;

  /**
   * The amount of taxes.
   *
   * @get result
   * @var string
   */
  public $m_tax;

  /**
   * Additional comment(s).
   * For example: information about 'introductory offer'.
   *
   * @get result
   * @var string
   */
  public $s_comment;

  /**
   * Price of the sale item in human readable format.
   *
   * @get result
   * @var string|null
   */
  public $s_price;

  /**
   * Category title of the sale item.
   *
   * @get result
   * @var string|null
   */
  public $s_sale;

  /**
   * Title of sale item.
   *
   * @get result
   * @var string|null
   */
  public $s_title;

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
   * If you specify this field, you must NOT specify fields {@link \WellnessLiving\Wl\Catalog\CatalogList\ElementModel::$id_sale}, {@link \WellnessLiving\Wl\Catalog\CatalogList\ElementModel::$k_id},
   * {@link \WellnessLiving\Wl\Catalog\CatalogList\ElementModel::$k_shop_product_option}.
   *
   * <tt>null</tt> to get information of only one item.
   *
   * @get get
   * @var string|null
   */
  public $text_item;

  /**
   * The price on the price tag with currency sign.
   *
   * @get result
   * @var string
   */
  public $text_price;

  /**
   * The title of the item category.
   *
   * @get result
   * @var string
   */
  public $text_sale;

  /**
   * The item title.
   *
   * @get result
   * @var string
   */
  public $text_title;

  /**
   * UID of a customer user for whom purchase is performed. Is used in backend to calculate discounts.
   *
   * @get get
   * @var string
   */
  public $uid_customer;

  /**
   * A detailed description.
   *
   * @deprecated Use `html_description`.
   * @get result
   * @var string|null
   */
  public $xml_description;

  /**
   * Special instructions.
   *
   * @deprecated Use `html_special`.
   * @get result
   * @var string|null
   */
  public $xml_special;
}

?>