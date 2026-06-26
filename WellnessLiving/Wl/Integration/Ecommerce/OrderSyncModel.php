<?php

namespace WellnessLiving\Wl\Integration\Ecommerce;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Catalog\Payment\PaymentModel;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * Endpoint that allows external ecommerce or POS systems to sync orders into WellnessLiving.
 *
 * This API is not public. If you need to use it, please contact WellnessLiving support.
 *
 * If you need a public payment API, please use {@link PaymentModel}.
 *
 * @method WlModelRequest post() Creates a new order in WellnessLiving based on the provided data. Sets {@link \Wl\Integration\Ecommerce\OrderSyncApi::$k_purchase} on success.
 */
class OrderSyncModel extends WlModelAbstract
{
  /**
   * A list of payment sources to pay with.
   *
   * Each element has next keys:
   *
   * <dl>
   *   <dt>array `a_pay_card`</dt>
   *   <dd>
   *     The payment card information:
   *     <dl>
   *       <dt>array `a_pay_address`</dt>
   *       <dd>
   *         The payment address:
   *         <dl>
   *           <dt>bool `is_new`</dt>
   *           <dd>Set this value to `1` to add a new payment address or to `0` to use a saved payment address.</dd>
   * 
   *           <dt>string `k_geo_country`</dt>
   *           <dd>The key of the country used for the payment address. Specify this to add a new address.</dd>
   * 
   *           <dt>string `k_geo_region`</dt>
   *           <dd>The key of the region for the payment address. Specify this to add a new address.</dd>
   * 
   *           <dt>string `k_pay_address`</dt>
   *           <dd>The key of the saved payment address. Specify this to use a saved address.</dd>
   * 
   *           <dt>string `s_city`</dt>
   *           <dd>The city used for the payment address. Specify this to add a new address.</dd>
   * 
   *           <dt>string `s_name`</dt>
   *           <dd>The card name. Specify this to add a new address.</dd>
   * 
   *           <dt>string `s_phone`</dt>
   *           <dd>The payment phone. Specify this to add a new address.</dd>
   * 
   *           <dt>string `s_postal`</dt>
   *           <dd>The postal code for the payment address. Specify this to add a new address.</dd>
   * 
   *           <dt>string `s_street1`</dt>
   *           <dd>The payment address. Specify this to add a new address.</dd>
   * 
   *           <dt>string `s_street2`</dt>
   *           <dd>The optional payment address. Specify this to add a new address.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>int `i_csc`</dt>
   *       <dd>The credit card CSC. Specify this to add a new card.</dd>
   * 
   *       <dt>int `i_month`</dt>
   *       <dd>The credit card expiration month. Specify this to add a new card.</dd>
   * 
   *       <dt>int `i_year`</dt>
   *       <dd>The credit card expiration year. Specify this to add a new card.</dd>
   * 
   *       <dt>bool `is_new`</dt>
   *       <dd>Specify `1` to add a new card, or `0` to use a saved card.</dd>
   * 
   *       <dt>string `k_pay_bank`</dt>
   *       <dd>The key of the credit card. Specify this to use saved card.</dd>
   * 
   *       <dt>string `s_comment`</dt>
   *       <dd>Optional comment(s). Specify this to add a new card.</dd>
   * 
   *       <dt>string `s_number`</dt>
   *       <dd>The card number. Specify this to add a new card.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `f_amount`</dt>
   *   <dd>The amount of money to withdraw with this payment source.</dd>
   * 
   *   <dt>bool `is_hide`</dt>
   *   <dd>Determines whether this payment method is hidden.</dd>
   * 
   *   <dt>bool `is_save`</dt>
   *   <dd>Whether payment method should be saved to user's account.</dd>
   * 
   *   <dt>bool `is_success`</dt>
   *   <dd>Identifies whether this source was successfully charged.</dd>
   * 
   *   <dt>string `m_surcharge`</dt>
   *   <dd>The client-side calculated surcharge.</dd>
   * 
   *   <dt>string `s_index`</dt>
   *   <dd>The index of this form (optional).</dd>
   * 
   *   <dt>string `sid_pay_method`</dt>
   *   <dd>The payment method ID.</dd>
   * </dl>
   * @post post
   * @var array[]
   */
  public $a_pay_form = [];

  /**
   * List of items to add to the order.
   *
   * Each element has keys:
   *
   * <dl>
   *   <dt>array `a_config`</dt>
   *   <dd>
   *     Item specific configuration.
   *     <dl>
   *       <dt>array[] `a_quick_gift`</dt>
   *       <dd>
   *         Quick gift card component list. Each element has keys:
   *         
   *         Required for {@link WlPurchaseItemSid::COUPON}.
   *         <dl>
   *           <dt>int `id_purchase_item`</dt>
   *           <dd>Purchase item ID from {@link WlPurchaseItemSid} constants.</dd>
   * 
   *           <dt>string `k_id`</dt>
   *           <dd>Purchase item key in the database.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dt_send_local`</dt>
   *       <dd>Date of a gift card sending.
   *         Required for {@link WlPurchaseItemSid::COUPON}.</dd>
   * 
   *       <dt>string `s_code`</dt>
   *       <dd>Code of a gift card.
   *         Required for {@link WlPurchaseItemSid::COUPON}.</dd>
   * 
   *       <dt>string `k_staff`</dt>
   *       <dd>
   *
   *         Required for {@link WlPurchaseItemSid::APPOINTMENT_TIP}.
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_tax`</dt>
   *   <dd>
   *     Custom taxes list. Each element has keys:
   *     <dl>
   *       <dt>string `k_tax`</dt>
   *
   * 
   *       <dt>string `m_tax`</dt>
   *       <dd>Tax amount.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `i_quantity`</dt>
   *   <dd>Item quantity.</dd>
   * 
   *   <dt>int `id_purchase_item`</dt>
   *   <dd>Purchase item ID from {@link WlPurchaseItemSid} constants.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>Purchase item key in the database.</dd>
   * </dl>
   * @post post
   * @var array[]
   */
  public $a_purchase_item = [];

  /**
   * The WellnessLiving mode type.
   *
   * @post post
   * @var int
   */
  public $id_mode = 0;

  /**
   * Business to add order for.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';

  /**
   * Location to add order for.
   *
   * @post post
   * @var string
   */
  public $k_location = '0';

  /**
   * Created purchase.
   *
   * @post result
   * @var string
   */
  public $k_purchase;

  /**
   * The tip amount (optional).
   *
   * @post post
   * @var string
   */
  public $m_tip = '0';

  /**
   * Order key.
   *
   * @post post
   * @var string
   */
  public $text_order = '';

  /**
   * The custom receipt note.
   *
   * @post post
   * @var string
   */
  public $text_receipt_note = '';

  /**
   * User to add order for.
   *
   * @post post
   * @var string
   */
  public $uid = '0';
}

?>