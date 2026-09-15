<?php

namespace WellnessLiving\Wl\Purchase\Item;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Data of certain purchase.
 *
 * @method WlModelRequest get() Gets information about purchase and it's items.  Validates the purchase and checks that the current user has access to it: either being the  purchase owner, or a staff member with the `rs.purchase.item.list` privilege, or location  access when the purchase belongs to a location. Depending on  {@link \Wl\Purchase\Item\PurchaseItemListApi::$is_web}, returns either a compact list of purchase items with  plain amounts, or a fully formatted set of items and totals (discount, subtotal, surcharge,  tax, tip, total) with `HTML`-formatted money values and additional business and client  contact information for receipts.
 */
class PurchaseItemListModel extends WlModelAbstract
{
  /**
   * Additional information. Uses only on desktop version.
   *
   * <dl>
   *   <dt>string `html_business_address`</dt>
   *   <dd>Business address.</dd>
   * 
   *   <dt>string `html_business_mail`</dt>
   *   <dd>Business mail.</dd>
   * 
   *   <dt>string `html_business_phone`</dt>
   *   <dd>Business phone.</dd>
   * 
   *   <dt>string `html_business_title`</dt>
   *   <dd>Business name.</dd>
   * 
   *   <dt>string `html_receipt`</dt>
   *   <dd>Text which will be in footer of receipt check.</dd>
   * 
   *   <dt>string `html_user_address`</dt>
   *   <dd>Customer address.</dd>
   * 
   *   <dt>string `html_user_mail`</dt>
   *   <dd>Customer mail.</dd>
   * 
   *   <dt>string `html_user_name`</dt>
   *   <dd>Customer name.</dd>
   * 
   *   <dt>string `html_user_phone`</dt>
   *   <dd>Customer phone.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_additional_info;

  /**
   * Logo details array. Business logo:
   *
   * <dl>
   *   <dt>array `a_image`</dt>
   *   <dd>
   *     Image details, present only when the business has a logo image (when `is_empty` is
   * `false`):
   *     <dl>
   *       <dt>int `i_height`</dt>
   *       <dd>Actual height of thumbnail image.</dd>
   * 
   *       <dt>int `i_height_src`</dt>
   *       <dd>Height of original image.</dd>
   * 
   *       <dt>int `i_rotate`</dt>
   *       <dd>Angle on which image was rotated compared to the original.</dd>
   * 
   *       <dt>int `i_width`</dt>
   *       <dd>Actual width of thumbnail image.</dd>
   * 
   *       <dt>int `i_width_src`</dt>
   *       <dd>Width of original image.</dd>
   * 
   *       <dt>bool `is-resize`</dt>
   *       <dd>Whether thumbnail is a resized variant of original image.</dd>
   * 
   *       <dt>string `url-thumbnail`</dt>
   *       <dd>URL to resized and rotated image in file storage.</dd>
   * 
   *       <dt>string `url-view`</dt>
   *       <dd>URL to original image in file storage.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `i_height`</dt>
   *   <dd>Thumbnail height, or the empty-image placeholder height when the business has no logo.</dd>
   * 
   *   <dt>int `i_width`</dt>
   *   <dd>Thumbnail width, or the empty-image placeholder width when the business has no logo.</dd>
   * 
   *   <dt>bool `is_empty`</dt>
   *   <dd>Whether the business has no logo image.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>Business title.</dd>
   * 
   *   <dt>string `s_url`</dt>
   *   <dd>Logo image URL, or the empty-image placeholder URL when the business has no logo.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_logo;

  /**
   * List of purchase items:
   *
   * <dl>
   *   <dt>string `m_price`</dt>
   *   <dd>Item price. This key doesn't returned when {@link PurchaseItemListModel::$is_web} is `true`</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Item title. This key doesn't returned when {@link PurchaseItemListModel::$is_web} is `true`</dd>
   * 
   *   <dt>string `html_category`</dt>
   *   <dd>
   *     Item category. This key doesn't returned when {@link PurchaseItemListModel::$is_web} is `false`
   *   </dd>
   * 
   *   <dt>string `html_description`</dt>
   *   <dd>
   *     Item description. This key doesn't returned when {@link PurchaseItemListModel::$is_web} is `false`
   *   </dd>
   * 
   *   <dt>string `html_price`</dt>
   *   <dd>Item price. This key doesn't returned when {@link PurchaseItemListModel::$is_web} is `false`</dd>
   * 
   *   <dt>string `html_title`</dt>
   *   <dd>Item title. This key doesn't returned when {@link PurchaseItemListModel::$is_web} is `false`</dd>
   * 
   *   <dt>string `html_total`</dt>
   *   <dd>
   *     Item total price. This key doesn't returned when {@link PurchaseItemListModel::$is_web} is `false`
   *   </dd>
   * 
   *   <dt>int `i_count`</dt>
   *   <dd>Item count. This key doesn't returned when {@link PurchaseItemListModel::$is_web} is `false`</dd>
   * 
   *   <dt>int `i_logo_height`</dt>
   *   <dd>
   *     Item picture height. This key doesn't returned when {@link PurchaseItemListModel::$is_web} is `false`
   *   </dd>
   * 
   *   <dt>int `i_logo_width`</dt>
   *   <dd>
   *     Item picture width. This key doesn't returned when {@link PurchaseItemListModel::$is_web} is `false`
   *   </dd>
   * 
   *   <dt>int `id_purchase_item`</dt>
   *   <dd>
   *     Purchase item type. See {@link WlPurchaseItemSid}. Not returned when {@link PurchaseItemListModel::$is_web} is `false`
   *   </dd>
   * 
   *   <dt>bool `is_logo_empty`</dt>
   *   <dd>
   *     Whether item picture exists. This key doesn't returned when {@link PurchaseItemListModel::$is_web} is `false`
   *   </dd>
   * 
   *   <dt>string `s_logo_url`</dt>
   *   <dd>
   *     Item picture URL. This key doesn't returned when {@link PurchaseItemListModel::$is_web} is `false`
   *   </dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_purchase_item;

  /**
   * Purchase date in business timezone.
   *
   * @get result
   * @var string
   */
  public $dt_date_local;

  /**
   * Define a different type result of API. For economy of traffic `false` it means in response will less data.
   * Otherwise, more detailed data will be returned.
   *
   * @get get
   * @var bool
   */
  public $is_web = false;

  /**
   * Business ID.
   *
   * @get result
   * @var string
   */
  public $k_business;

  /**
   * Purchase currency.
   *
   * @get result
   * @var string
   */
  public $k_currency;

  /**
   * Purchase location.
   *
   * @get result
   * @var string
   */
  public $k_location;

  /**
   * Purchase ID.
   *
   * @get get
   * @var string
   */
  public $k_purchase = '0';

  /**
   * Discount amount.
   *
   * @get result
   * @var string
   */
  public $m_discount;

  /**
   * Subtotal amount.
   *
   * @get result
   * @var string
   */
  public $m_subtotal;

  /**
   * Surcharge amount.
   *
   * <tt>null</tt> - if purchase is made without surcharge and not is web.
   *
   * @get result
   * @var string|null
   */
  public $m_surcharge;

  /**
   * Tax amount.
   *
   * @get result
   * @var string
   */
  public $m_tax;

  /**
   * Tips amount.
   *
   * @get result
   * @var string
   */
  public $m_tip;

  /**
   * Total amount.
   *
   * @get result
   * @var string
   */
  public $m_total;

  /**
   * Human-readable description of payment method.
   *
   * @get result
   * @var string
   */
  public $text_pay_method;

  /**
   * Purchase owner.
   *
   * @get result
   * @var string
   */
  public $uid;
}

?>