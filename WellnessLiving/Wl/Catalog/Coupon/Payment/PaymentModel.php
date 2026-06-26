<?php

namespace WellnessLiving\Wl\Catalog\Coupon\Payment;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about coupon price.
 *
 * @method WlModelRequest post() Allows to pay gift card for the client.
 */
class PaymentModel extends WlModelAbstract
{
  /**
   * The list of coupon data.
   *
   * <tt>null</tt> if not set yet.
   *
   * <dl>
   *   <dt>string `dt_send`</dt>
   *   <dd>Send date.</dd>
   * 
   *   <dt>bool `is_mail`</dt>
   *   <dd>Determines that coupon will be sent by email.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * 
   *   <dt>string `k_coupon`</dt>
   *   <dd>Coupon ID.</dd>
   * 
   *   <dt>string `k_coupon_amount`</dt>
   *   <dd>Coupon amount key.</dd>
   * 
   *   <dt>string `m_custom`</dt>
   *   <dd>Custom amount for gift card..</dd>
   * 
   *   <dt>string `s_image`</dt>
   *   <dd>Image string ID.</dd>
   * 
   *   <dt>string `s_mail`</dt>
   *   <dd>Recipient email.</dd>
   * 
   *   <dt>string `s_message`</dt>
   *   <dd>Coupon message.</dd>
   * 
   *   <dt>string `s_recipient`</dt>
   *   <dd>Recipient name.</dd>
   * 
   *   <dt>string `s_sender`</dt>
   *   <dd>Sender name.</dd>
   * </dl>
   * @post post
   * @var array|null
   */
  public $a_coupon = null;

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
   * Key of source mode.
   *
   * @post post
   * @var int
   */
  public $id_mode = 0;

  /**
   * Business key.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;

  /**
   * Location key.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var string|null
   */
  public $k_location = null;

  /**
   * ID of purchase that was created during payment.
   *
   * @post result
   * @var string|null
   */
  public $k_purchase;

  /**
   * Discount code value.
   *
   * @post post
   * @var string
   */
  public $text_discount_code = '';
}

?>