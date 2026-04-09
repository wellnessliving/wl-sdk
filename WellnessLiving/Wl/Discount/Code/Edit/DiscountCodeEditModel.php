<?php

namespace WellnessLiving\Wl\Discount\Code\Edit;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\WlDurationTypeSid;

/**
 * API point for read, create and edit existing discount code.
 */
class DiscountCodeEditModel extends WlModelAbstract
{
  /**
   * List of components that are affected by this discount code.
   * Each element is an array containing:
   * <dl>
   *   <dt>int <var>id_purchase_item</var></dt>
   *   <dd>Type ID of the purchase item. One of {@link WlPurchaseItemSid} constants.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>
   *     Primary key of the component.
   *     <p>Special Notes:</p>
   *     <ul>
   *       <li>Zero means that all elements of this type are available.</li>
   *       <li>For `id_purchase_item`={@link WlPurchaseItemSid::CLASS_PERIOD} we store {@link \RsClassSql}.`k_class` in the `k_id` field.</li>
   *     </ul>
   *   </dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>Title of the component.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_component = [];

  /**
   * List of client types.
   *
   * @get result
   * @post post
   * @var array
   */
  public $a_login_type = [];

  /**
   * List of client groups.
   *
   * @get result
   * @post post
   * @var array
   */
  public $a_member_group = [];

  /**
   * Expiration date. <tt>null</tt> if discount code is never expires.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $dl_end = null;

  /**
   * Activation date.
   *
   * @get result
   * @post post
   * @var string
   */
  public $dl_start = '';

  /**
   * Value of the percentage or fixed discount.
   *
   * @get result
   * @post post
   * @var string
   */
  public $f_value = '0.00';

  /**
   * Count of calendar periods from <var>id_duration</var> before expiration.
   *
   * @get result
   * @post post
   * @var int
   */
  public $i_duration = 0;

  /**
   * Maximum count of usage. Zero means unlimited usage.
   *
   * @get result
   * @post post
   * @var int
   */
  public $i_limit = 0;

  /**
   * Calendar periods for discount code duration from {@link ADurationSid}. Zero if discount code is never expires.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_duration = 0;

  /**
   * Type of the discount code duration from {@link WlDurationTypeSid}.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_duration_type = 0;

  /**
   * <tt>true</tt> means discount code is active.
   * <tt>false</tt> means discount code is inactive.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_active = false;

  /**
   * <tt>true</tt> means membership will auto-renew at discounted rate.
   * <tt>false</tt> means membership will auto-renew at full rate.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_auto_renew = false;

  /**
   * <tt>true</tt> means discount code can reduce price of the gift cards.
   * <tt>false</tt> means discount code cannot reduce price of the gift cards.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_coupon = false;

  /**
   * <tt>true</tt> means discount code can be applied to first membership payment only.
   * <tt>false</tt> means discount code can be applied to all membership payments.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_first_payment = false;

  /**
   * <tt>true</tt> means that only selected client types or groups can use this discount code.
   * <tt>false</tt> means that all client types and groups can use this discount code.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_login_type = false;

  /**
   * <tt>true</tt> if clients can use this discount code in online store,
   * <tt>false</tt> if discount code can be used only in point of sale.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_online = false;

  /**
   * <tt>true</tt> means discount value is percent from the purchase amount.
   * <tt>false</tt> means discount value is fixed sum from the purchase amount.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_percent = false;

  /**
   * <tt>true</tt> means discount can be applied to all products and purchase options.
   * <tt>false</tt> means discount can be applied only to the selected product and purchase options.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_purchase_all = false;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the discount code. Empty, if this is creation of a new code.
   *
   * @get get
   * @post get,result
   * @put get,result
   * @var string
   */
  public $k_discount_code = '';

  /**
   * List of product and purchase options that are effected with this discount code.
   * Each element has the next format: <var>id_purchase_item</var>:<var>k_id</var>, where <tt>id_purchase_item</tt> -
   * one of {@link WlPurchaseItemSid}, <tt>k_id</tt> is key of certain purchase item.
   *
   * @get result
   * @post post
   * @var string
   */
  public $s_component = '';

  /**
   * Discount code that can be used during purchase.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_code = '';

  /**
   * Description of the discount code.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_description = '';

  /**
   * Name of the discount code.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_title = '';
}

?>