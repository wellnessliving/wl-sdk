<?php

namespace WellnessLiving\Wl\Purchase\Item;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Data of certain purchase.
 *
 * @method WlModelRequest get() Gets information about purchase and it's items.
 */
class PurchaseItemListModel extends WlModelAbstract
{
  /**
   * Additional information. Uses only on desktop version.
   *
   * @get result
   * @var array
   */
  public $a_additional_info;

  /**
   * Logo details array.
   *
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
   *   <dd>. This key doesn't returned when {@link PurchaseItemListModel::$is_web} is `false`</dd>
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