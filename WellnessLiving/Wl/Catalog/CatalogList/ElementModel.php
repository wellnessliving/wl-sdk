<?php

namespace WellnessLiving\Wl\Catalog\CatalogList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Catalog\PurchaseOptionViewSid;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
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
   * @get result
   * @var array
   */
  public $a_data;

  /**
   * Information about the discount code:
   *
   * @get get
   * @var array
   */
  public $a_discount_code = [];

  /**
   * Image information:
   *
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
   * @get result
   * @var array[]
   */
  public $a_image_list = [];

  /**
   * A list of installment plans. Each element has the following next keys:
   *
   * @get result
   * @var array[]
   */
  public $a_installment_template;

  /**
   * The list of information pertaining to the specified item.
   *
   * @get result
   * @var array[]
   */
  public $a_item;

  /**
   * The list of items grouped by sale categories on the store page.
   * Keys refer to sale IDs from {@link WlSaleSid}, and values refer to data to identify an item:
   *
   * @get get
   * @var array[]
   */
  public $a_sale_id_group = [];

  /**
   * A list of the item's taxes.
   * Keys refer tax keys, and values refer to the amount of tax.
   *
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