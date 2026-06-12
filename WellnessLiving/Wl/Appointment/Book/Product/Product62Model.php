<?php

namespace WellnessLiving\Wl\Appointment\Book\Product;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Shop\Product\PurchaseRestrictionSid;

/**
 * Returns information about service add-ons.
 */
class Product62Model extends WlModelAbstract
{
  /**
   * A list service add-ons.
   *
   * This will be `null` if not set yet.
   *
   * <dl>
   *   <dt>array `a_logo`</dt>
   *   <dd>
   *     Information about first image connected to the product.
   * *     <dl>
   *       <dt>int `i_height`</dt>
   *       <dd>Height of the image.</dd>
   * 
   *       <dt>int `i_width`</dt>
   *       <dd>Width of the image.</dd>
   * 
   *       <dt>bool `is_empty`</dt>
   *       <dd>`true` mean mock instead of real image.</dd>
   * 
   *       <dt>string `s_url`</dt>
   *       <dd>URL on the image.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `html_description`</dt>
   *   <dd>Description of the product as prepared html code.</dd>
   * 
   *   <dt>string `i_duration`</dt>
   *   <dd>Duration that will be added to the appointment with this addon as count of minutes.</dd>
   * 
   *   <dt>bool `is_client_duration`</dt>
   *   <dd>`true` means that the duration information will be displayed for the client.</dd>
   * 
   *   <dt>bool `is_online_sell`</dt>
   *   <dd>`true` if client can purchase product, `false` if only staff can perform purchase.</dd>
   * 
   *   <dt>bool `is_amount`</dt>
   *   <dd>`true` means that addon increases price of the appointment.</dd>
   * 
   *   <dt>string `k_currency`</dt>
   *   <dd>ID of the currency.</dd>
   * 
   *   <dt>string `k_shop_product`</dt>
   *   <dd>ID of the product.</dd>
   * 
   *   <dt>string `k_shop_product_option`</dt>
   *   <dd>
   *     ID of the product option.
   * Zero means that product has multiple options and option should be selected by client.
   *   </dd>
   * 
   *   <dt>string `m_amount`</dt>
   *   <dd>Amount that will be added to the appointment price with this addon.</dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>Description of the product.</dd>
   * 
   *   <dt>string `text_duration`</dt>
   *   <dd>Duration that will be added to the appointment with this addon as a formatted string.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Name of the product.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_product;

  /**
   * The key of a location where appointment is going to be booked.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The key of a service to show information for.
   *
   * @get get
   * @var string
   */
  public $k_service = '0';

  /**
   * The key of a user to show information for.
   *
   * Products with a {@link PurchaseRestrictionSid::TYPE} restriction will be filtered out.
   * Only those products that match the client type or those that have no restrictions will be shown.
   *
   * `null` if the client is not logged in.
   *
   * If you don't need to filter products by client type/group, use {@link ProductModel}.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>