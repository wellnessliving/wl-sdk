<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom;

use WellnessLiving\Core\Locale\CurrencySid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * Creates not captured Payment Intent, returns its status and secret key to use on frontend.
 *
 * @method WlModelRequest post() Initializes a `Stripe` payment.  Starts a payment transaction and creates a not-captured Payment Intent at `stripe.com`, returning  its status and client secret to continue the payment flow on the frontend.
 */
class StripeComPayInitModel extends WlModelAbstract
{
  /**
   * Credit card data.
   *
   * Contents of the payment source as it presents on the payment form.
   *
   * Supplied in case payment source is card.
   * `null` if payment source is other than card or payment is initialized before card data is known.
   *
   * <dl>
   *   <dt>array `a_pay_address`</dt>
   *   <dd>
   *     Payment address for address edit widget. Used only if `is_new` is `true`:
   *     <dl>
   *       <dt>bool `is_new`</dt>
   *       <dd>`true` if user has chosen to add new address, `false` otherwise.</dd>
   * 
   *       <dt>string `k_geo_country`</dt>
   *       <dd>Key of the country.  Used only if `is_new` is `true`.</dd>
   * 
   *       <dt>string `k_geo_region`</dt>
   *       <dd>Key of the region.  Used only if `is_new` is `true`.</dd>
   * 
   *       <dt>string|null `k_pay_address`</dt>
   *       <dd>
   *         Chosen payment address key. 
   * Set even if user decided to add new address.
   *       </dd>
   * 
   *       <dt>string `s_city`</dt>
   *       <dd>City name. Used only if `is_new` is `true`.</dd>
   * 
   *       <dt>string `s_name`</dt>
   *       <dd>User's full name.</dd>
   * 
   *       <dt>string `s_phone`</dt>
   *       <dd>Phone number. Used only if `is_new` is `true`.</dd>
   * 
   *       <dt>string `s_postal`</dt>
   *       <dd>Postal code. Used only if `is_new` is `true`.</dd>
   * 
   *       <dt>string `s_street1`</dt>
   *       <dd>First address line. Used only if `is_new` is `true`.</dd>
   * 
   *       <dt>string `s_street2`</dt>
   *       <dd>Second address line. Used only if `is_new` is `true`.</dd>
   * 
   *       <dt>string|null `text_mail`</dt>
   *       <dd>User's email. `null` if not specified. Used only if `is_new` is `true`.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `i_csc`</dt>
   *   <dd>Card CSC code. Used only if `is_new` is `true`.</dd>
   * 
   *   <dt>int `i_month`</dt>
   *   <dd>Card expiration month. Used only if `is_new` is `true`.</dd>
   * 
   *   <dt>int `i_year`</dt>
   *   <dd>Card expiration year. Used only if `is_new` is `true`.</dd>
   * 
   *   <dt>int `id_card_type`</dt>
   *   <dd>
   *     Card type. Used only if `is_new` is `true`.
   *   </dd>
   * 
   *   <dt>bool `is_default`</dt>
   *   <dd>If the card should be made the default payment method. Used only if `is_new` is `true`.</dd>
   * 
   *   <dt>bool `is_new`</dt>
   *   <dd>Whether a new card is being added instead of an existing one being selected.</dd>
   * 
   *   <dt>bool `is_save`</dt>
   *   <dd>If the card information should be saved for future transactions. Used only if `is_new` is `true`.</dd>
   * 
   *   <dt>string `k_pay_bank`</dt>
   *   <dd>Selected payment card key. Used only if `is_new` is `false`. `0` if no existing card is selected.</dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>Card nickname. Used only if `is_new` is `true`.</dd>
   * 
   *   <dt>string `s_number`</dt>
   *   <dd>Card number. Used only if `is_new` is `true`.</dd>
   * </dl>
   * @post post
   * @var array|null
   */
  public $a_card;

  /**
   * ID of the currency.
   *
   * One of {@link CurrencySid} constants.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var int|null
   */
  public $id_currency = null;

  /**
   * ID of the actor.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var int|null
   */
  public $id_pay_actor = null;

  /**
   * ID of pay method.
   *
   * One of {@link WlPayMethodSid} constants.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var int|null
   */
  public $id_pay_method = null;

  /**
   * Status of this Payment Intent.
   *
   * @post result
   * @var int
   */
  public $id_status;

  /**
   * Whether authorization or capture should be performed.
   *
   * `true` (or anything that is not empty) to perform authorization.
   *
   * `false` (or anything that is empty, or do not pass this value) to charge the payment amount.
   *
   * @post post
   * @var bool
   */
  public $is_authorize = false;

  /**
   * `true` if card swiper is used, `false` otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_pos = false;

  /**
   * `true` if Stripe Payment Element form (@link https://stripe.com/docs/payments/elements) is used, `false` otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_stripe_elements = false;

  /**
   * Key of the business which receives the payment.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;

  /**
   * Key of the business merchant that should be used to perform the request.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $k_business_merchant = null;

  /**
   * Key of a custom payment method.
   *
   * `null` in case when not initialized yet or empty if payment is performed with a standard payment method.
   *
   * @post post
   * @var string|null
   */
  public $k_pay_method = null;

  /**
   * Key of payment transaction that was created.
   *
   * `null` in case when not initialized yet.
   *
   * @post result
   * @var string|null
   */
  public $k_pay_transaction = null;

  /**
   * Payment amount.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $m_amount = null;

  /**
   * Surcharge amount.
   *
   * `null` in case when not initialized yet, empty string or null for zero surcharge amount.
   *
   * @post post
   * @var string|null
   */
  public $m_surcharge = null;

  /**
   * Payment Intent client secret key.
   *
   * @post result
   * @var string
   */
  public $s_client_secret;

  /**
   * Payment intent ID.
   *
   * @post result
   * @var string
   */
  public $s_payment_intent;

  /**
   * Payment method ID.
   *
   * `null` if Payment intent must be created without existing Payment method.
   *
   * @post post
   * @var string|null
   */
  public $s_payment_method;

  /**
   * Error message.
   *
   * `null` in case response has not received yet or request is not failed.
   *
   * @post result
   * @var string|null
   */
  public $text_message = null;

  /**
   * Payment owner user key.
   *
   * `null` in case when not initialized yet or if pay owner is anonymous.
   *
   * @post post
   * @var string|null
   */
  public $uid_purchase = null;
}

?>