<?php

namespace WellnessLiving\Wl\Catalog\CatalogList;

use WellnessLiving\Core\Drive\DriveTypeSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\Core\a\AFlagSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Catalog\PurchaseOptionViewSid;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\Service\ServiceSid;
use WellnessLiving\Wl\Tax\WlTaxSid;
use WellnessLiving\Wl\WlProgramSid;
use WellnessLiving\Wl\WlSaleSid;

/**
 * Displays information about a certain item in the store.
 *
 * When using this endpoint, note that the terms "promotion" and "Purchase Option" refer to the same thing.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * The age restriction configuration.
   *
   * Age restrictions for an item apply when they're configured for a specific item and the API is requested from the backend
   * or when age restriction are public.
   *
   * <dl>
   *   <dt>int|null `i_age_from`</dt>
   *   <dd>The minimum age permitted for the event. This will be `null` if a minimum age isn't set or available.</dd>
   * 
   *   <dt>int|null `i_age_to`</dt>
   *   <dd>The maximum age permitted for the event. This will be `null` if a maximum age isn't set or available.</dd>
   * 
   *   <dt>bool `is_age_public`</dt>
   *   <dd>
   *     If `true`, age restrictions are public and available. Otherwise, this will be `false` if they're hidden.
   * When restrictions are hidden and the current user isn't a staff member, the age range will be empty.
   *   </dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_age_restriction;

  /**
   * Additional information specific for the item.
   *
   * The structure may be different depending on the item category.
   *
   * Consider the following examples:
   * * For a product, this contains inventory information.
   * * For a gift card, this contains possible amounts.
   * * For a session pass/membership/package, this contains information about start and stop dates.
   *
   * <dl>
   *   <dt>int[] `a_service_access`</dt>
   *   <dd>
   *     Access to services for a purchase option.
   * Keys are one of the {@link ServiceSid} constants, values are one of the {@link AFlagSid}
   * constants. Set only for relevant purchase option service category.
   * {@link AFlagSid::ON} access to some services.
   * {@link AFlagSid::OFF} no access to services. It can be set only for classes and events.
   * {@link AFlagSid::ALL} access to all services. It can be set only for classes and events.
   * For purchase options with appointments and assets service category status is always {@link AFlagSid::ON}.
   *   </dd>
   * 
   *   <dt>bool `is_renew_public`</dt>
   *   <dd>
   *     This applies only for promotions.
   * `true` - clients can set promotion auto-renew.
   * `false` - clients can't set promotion auto-renew.
   *   </dd>
   * 
   *   <dt>array[] `a_component`</dt>
   *   <dd>
   *     This applies only for coupons. Coupon components information. Each element will contain the following keys:
   *     <dl>
   *       <dt>int `id_program`</dt>
   *       <dd>Program ID. One of {@link WlProgramSid} ID's. Only applies to promotions.</dd>
   * 
   *       <dt>int `id_purchase_item`</dt>
   *       <dd>Purchase item ID. One of {@link WlPurchaseItemSid} ID's.</dd>
   * 
   *       <dt>int `id_sale`</dt>
   *       <dd>Sale ID. One of {@link WlSaleSid} ID's.</dd>
   * 
   *       <dt>string `k_id`</dt>
   *       <dd>The identifier of the item.</dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>The title of the item.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_staff`</dt>
   *   <dd>
   *     This applies to enrollment/event items. Staff list for class periods. Each element contains:
   *     <dl>
   *       <dt>string `k_staff`</dt>
   *       <dd>@deprecated Legacy staff key.  Deprecated, use `uid_staff`.</dd>
   * 
   *       <dt>string `uid_staff`</dt>
   *       <dd>Staff user key. </dd>
   * 
   *       <dt>string `text_family`</dt>
   *       <dd>Staff last name.</dd>
   * 
   *       <dt>string `text_staff`</dt>
   *       <dd>Staff display name.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `dl_expire`</dt>
   *   <dd>Date of expiration of coupon, local date in MySQL format.</dd>
   * 
   *   <dt>string `dl_now`</dt>
   *   <dd>Current date, local date in MySQL format.</dd>
   * 
   *   <dt>string `dl_start`</dt>
   *   <dd>
   *     Date to activate the coupon on, local date in MySQL format.
   *   When `id_activation`=FIXED, this field contains a custom date to activate the coupon on, local date in MySQL format.
   *   </dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>Number of periods the coupon is active. Type of a period is specified by `id_duration`.</dd>
   * 
   *   <dt>int `id_activation`</dt>
   *   <dd>Type of a coupon activation date specification.</dd>
   * 
   *   <dt>int `id_duration`</dt>
   *   <dd>Duration of a period. A constant from {@link ADurationSid}.</dd>
   * 
   *   <dt>int `id_duration_type`</dt>
   *   <dd>A way to specify a duration.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_data;

  /**
   * Information about the discount code:
   *
   * <dl>
   *   <dt>string `f_amount`</dt>
   *   <dd>The fixed amount of the discount.</dd>
   * 
   *   <dt>float `f_percent`</dt>
   *   <dd>The percentage amount of the discount.</dd>
   * 
   *   <dt>int `i_limit`</dt>
   *   <dd>Limitation.</dd>
   * 
   *   <dt>string `k_discount_code`</dt>
   *   <dd>The discount code key.</dd>
   * 
   *   <dt>string `s_discount_code`</dt>
   *   <dd>The discount code value.</dd>
   * </dl>
   * @get get
   * @var array
   */
  public $a_discount_code = [];

  /**
   * Image information:
   *
   * <dl>
   *   <dt>int `i_height`</dt>
   *   <dd>The height in pixels.</dd>
   * 
   *   <dt>int `i_width`</dt>
   *   <dd>The width in pixels.</dd>
   * 
   *   <dt>bool `is_empty`</dt>
   *   <dd>
   *     `true` - the item has no image (in this case, ignore the other keys of this array).
   * `false` - the item has an image.
   *   </dd>
   * 
   *   <dt>string `s_url`</dt>
   *   <dd>The image URL.</dd>
   * </dl>
   * @get result
   * @var array
   * @deprecated This property is deprecated as it does not support multiple images.
   *  Use {@link ElementModel::$a_image_list} instead.
   */
  public $a_image;

  /**
   * List of images.
   * Keys are index and value is below information: 
   *
   * <dl>
   *   <dt>int `i_height`</dt>
   *   <dd>The height in pixels.</dd>
   * 
   *   <dt>int `i_width`</dt>
   *   <dd>The width in pixels.</dd>
   * 
   *   <dt>bool `is_empty`</dt>
   *   <dd>`true` - item has no image (in this case ignore other keys of this array).
   * `false` - item has an image.</dd>
   * 
   *   <dt>string `s_url`</dt>
   *   <dd>The image URL.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_image_list = [];

  /**
   * A list of installment plans. Each element has the following next keys:
   *
   * <dl>
   *   <dt>int `i_count`</dt>
   *   <dd>The number of payments.</dd>
   * 
   *   <dt>int `id_duration`</dt>
   *   <dd>The duration of a single period. One of the {@link ADurationSid} constants.</dd>
   * 
   *   <dt>int `i_period`</dt>
   *   <dd>The number of periods specified by <var>id_period</var> between individual payments.</dd>
   * 
   *   <dt>string `k_currency`</dt>
   *   <dd>The payment currency Key.</dd>
   * 
   *   <dt>string `k_pay_installment_template`</dt>
   *   <dd>
   *     The key of the installment plan template. 
   *   </dd>
   * 
   *   <dt>string `m_amount`</dt>
   *   <dd>The amount of the installment plan.</dd>
   * 
   *   <dt>string `s_duration`</dt>
   *   <dd>The title of the installment plan.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_installment_template;

  /**
   * The list of information pertaining to the specified item.
   *
   * <dl>
   *   <dt>array `a_data`</dt>
   *   <dd>
   *     Contains additional data for the sale item.
   * For Package, it contains also the following key:
   * 
   * The same structure as {@link ElementModel::$a_data} has.
   *     <dl>
   *       <dt>bool `is_price_breakdown`</dt>
   *       <dd>
   *         Whether to display individual prices for each item in the package.
   * `true` display individual prices for each item in the package,
   * `false` display a single total price for the package.
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_image`</dt>
   *   <dd>
   *     Contains information about one image connected to a sale item.
   *     <dl>
   *       <dt>array `a_image`</dt>
   *       <dd>
   *         <dl>
   *           <dt>int `i_height`</dt>
   *           <dd>Height of the variant image.</dd>
   * 
   *           <dt>int `i_height_src`</dt>
   *           <dd>Height of the original image.</dd>
   * 
   *           <dt>int `i_rotate`</dt>
   *           <dd>Rotate.</dd>
   * 
   *           <dt>int `i_width`</dt>
   *           <dd>Width of the variant image.</dd>
   * 
   *           <dt>int `i_width_src`</dt>
   *           <dd>Width of the original image.</dd>
   * 
   *           <dt>int `id_type_src`</dt>
   *           <dd>Type ID of the image. Constant from {@link DriveTypeSid}.</dd>
   * 
   *           <dt>bool `is-resize`</dt>
   *           <dd>`true` if the variant differs from the original, `false` - otherwise.</dd>
   * 
   *           <dt>string `url-thumbnail`</dt>
   *           <dd>URL to download variant (thumbnail) file.</dd>
   * 
   *           <dt>string `url-view`</dt>
   *           <dd>URL to download original file.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>int `i_height`</dt>
   *       <dd>Height of the variant image.</dd>
   * 
   *       <dt>int `i_width`</dt>
   *       <dd>Width of the variant image.</dd>
   * 
   *       <dt>bool `is_empty`</dt>
   *       <dd>`true` if the image file does not exist, `false` - otherwise.</dd>
   * 
   *       <dt>string `s_url`</dt>
   *       <dd>Link to the variant file.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_tax`</dt>
   *   <dd>
   *     Contains information about taxes.
   * 
   *     <dl>
   *       <dt>float `f_tax`</dt>
   *       <dd>The calculated tax amount applied by this rule.</dd>
   * 
   *       <dt>string `f_tax_discount`</dt>
   *       <dd>The tax amount after applying all discounts.</dd>
   * 
   *       <dt>string `f_tax_discount_login`</dt>
   *       <dd>The tax amount after applying the client type discount only.</dd>
   * 
   *       <dt>float `f_value`</dt>
   *       <dd>The tax rate. Its meaning depends on `id_tax`.</dd>
   * 
   *       <dt>int `id_tax`</dt>
   *       <dd>The tax type. One of {@link WlTaxSid} constants.</dd>
   * 
   *       <dt>string `k_tax`</dt>
   *       <dd>The tax key. </dd>
   * 
   *       <dt>string `s_tax`</dt>
   *       <dd>The tax name.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `id_purchase_option_view`</dt>
   *   <dd>The Purchase Option view type. One of the {@link PurchaseOptionViewSid} constants.</dd>
   * 
   *   <dt>string `m_discount_code`</dt>
   *   <dd>The discount code amount.</dd>
   * 
   *   <dt>string `m_discount_login`</dt>
   *   <dd>The discount amount for the client type.</dd>
   * 
   *   <dt>string `s_comment`</dt>
   *   <dd>Additional information about the sale item. For example, information about 'introductory offer'.</dd>
   * 
   *   <dt>string `s_price`</dt>
   *   <dd>The price of the sale item in a human-readable format.</dd>
   * 
   *   <dt>string `s_sale`</dt>
   *   <dd>The category title of the sale item.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>The title of the sale item.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_item;

  /**
   * The list of items grouped by sale categories on the store page.
   * Keys refer to sale IDs from {@link WlSaleSid}, and values refer to data to identify an item:
   *
   * <dl>
   *   <dt>int `id_sale`</dt>
   *   <dd>The item category ID. One of the {@link WlSaleSid} constants.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>The primary key of item.</dd>
   * 
   *   <dt>string `k_shop_product_option`</dt>
   *   <dd>
   *     The product option or <tt>0</tt> for any other cases. 
   *   </dd>
   * </dl>
   * @get get
   * @var array[]
   */
  public $a_sale_id_group = [];

  /**
   * A list of the item's taxes.
   * Keys refer tax keys, and values refer to the amount of tax.
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
   * @var array[]
   */
  public $a_tax;

  /**
   * The client prorate date.
   *
   * This will be `null` in cases where the client prorate date hasn't passed.
   *
   * @get get
   * @var string|null
   */
  public $dl_client_prorate = null;

  /**
   * The price of the sale item.
   *
   * @get result
   * @var string|null
   */
  public $f_price;

  /**
   * The price of the sale item, including tax.
   *
   * @get result
   * @var string|null
   */
  public $f_price_include;

  /**
   * The retail price of the product. This will be empty if this isn't a product.
   *
   * @get result
   * @var string
   */
  public $f_price_retail_product = '';

  /**
   * Full price of event. This will be empty if this isn't an event.
   *
   * @get result
   * @var string
   */
  public $f_price_total_enrollment = '';

  /**
   * The tax amount.
   *
   * @get result
   * @var string|null
   */
  public $f_tax;

  /**
   * The sale item description.
   *
   * @get result
   * @var string|null
   */
  public $html_description;

  /**
   * Special instructions for the sale item.
   *
   * @get result
   * @var string|null
   */
  public $html_special;

  /**
   * The image height in pixels. Specify this value if you need the image to be returned in a specific size.
   * The returned image will have default thumbnail size if this value isn't specified.
   *
   * @get get
   * @var int
   */
  public $i_image_height = 0;

  /**
   * The image width in pixels. Specify this value if you need the image to be returned in a specific size.
   * The returned image will have default thumbnail size if this value isn't specified.
   *
   * @get get
   * @var int
   */
  public $i_image_width = 0;

  /**
   * The promotion image height in pixels. Specify this value if you need the image to be returned in a specific size.
   * The returned image will have default thumbnail size if this value isn't specified.
   *
   * @get get
   * @var int
   */
  public $i_promotion_image_height = 0;

  /**
   * The promotion image width in pixels. Specify this value if you need the image to be returned in a specific size.
   * The returned image will have default thumbnail size if this value isn't specified.
   *
   * @get get
   * @var int
   */
  public $i_promotion_image_width = 0;

  /**
   * The purchase item category ID.
   * One of the {@link WlPurchaseItemSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_purchase_item;

  /**
   * The ID of the item view category. One of the {@link PurchaseOptionViewSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_purchase_option_view;

  /**
   * The ID of item category.
   * One of the {@link WlSaleSid} constants.
   *
   * @get get,result
   * @var int
   */
  public $id_sale = 0;

  /**
   * Determines whether the API is called in the backend mode.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * If `true`, the item requires a contract. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_contract;

  /**
   * The business key.
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
   * This will be `null` if not set yet.
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
   * The price, including taxes.
   *
   * @get result
   * @var string
   */
  public $m_price_include;

  /**
   * The tax amount.
   *
   * @get result
   * @var string
   */
  public $m_tax;

  /**
   * Additional comment(s).
   * For example, information about 'introductory offer'.
   *
   * @get result
   * @var string
   */
  public $s_comment;

  /**
   * The price of the sale item in a human-readable format.
   *
   * @get result
   * @var string|null
   */
  public $s_price;

  /**
   * The category title of the sale item.
   *
   * @get result
   * @var string|null
   */
  public $s_sale;

  /**
   * The sale item title.
   *
   * @get result
   * @var string|null
   */
  public $s_title;

  /**
   * A list of goods to get information for. Every element must contain the next keys:
   * 
   * Note that this must be serialized via JSON.
   *
   * If this field is specified, don't specify any of the following fields:
   * * {@link ElementModel::$id_sale}
   * * {@link ElementModel::$k_id}
   * * {@link ElementModel::$k_shop_product_option}
   *
   * This will be `null` to get information for only one item.
   *
   * <dl>
   *   <dt>int `id_sale`</dt>
   *   <dd>The ID of the item category. One of the {@link WlSaleSid} constants.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>The item key.</dd>
   * 
   *   <dt>string `k_shop_product_option`</dt>
   *   <dd>The product option key. This will be <tt>0</tt> if the item isn't a product.</dd>
   * </dl>
   * @get get
   * @var string|null
   */
  public $text_item = null;

  /**
   * The price on the price tag, with the currency sign.
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
   * The UID of a customer (user) for whom the purchase is made. This is used in the backend to calculate discounts.
   *
   * @get get
   * @var string
   */
  public $uid_customer = '';

  /**
   * A detailed description.
   *
   * @get result
   * @var string|null
   * @deprecated Use `html_description`.
   */
  public $xml_description;

  /**
   * Special instructions.
   *
   * @get result
   * @var string|null
   * @deprecated Use `html_special`.
   */
  public $xml_special;
}

?>