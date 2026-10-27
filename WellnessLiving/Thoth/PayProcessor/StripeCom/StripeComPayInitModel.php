<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom;

use WellnessLiving\Core\Locale\CurrencySid;
use WellnessLiving\Thoth\WlPay\Bank\Card\CardTypeEnum;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\RsPayActorSid;
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
   *     Card type. One of {@link CardTypeEnum} constants as int. Used only if `is_new` is `true`.
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
   * Items of the sale for the Checkout Session. Every element: 
   *
   * The total of the items must equal {@link StripeComPayInitModel::$m_amount}.
   * Empty to send one item for the whole amount. Used only if the payment runs on a Checkout Session.
   *
   * <dl>
   *   <dt>int `i_quantity`</dt>
   *   <dd>Quantity, at least `1`. An integer, or a string of digits: the values of an API request are strings.</dd>
   * 
   *   <dt>string `m_amount`</dt>
   *   <dd>Unit amount. Not negative: a discount is a smaller amount.</dd>
   * 
   *   <dt>string `text_name`</dt>
   *   <dd>Name of the item.</dd>
   * </dl>
   * @post post
   * @var array[]
   */
  public $a_line_item = [];

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
   * One of {@link RsPayActorSid} constants.
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
   * @see PaymentIntentStatusSid
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
   * `true` if the client card form can run on a Checkout Session, `false` otherwise.
   *
   * Only the card form of the web sets it. API clients and the mobile apps do not: the mobile Payment Sheet takes
   * the client secret of a Payment Intent only. A session is created only if this flag is set, the Stripe Payment
   * Element is used ({@link StripeComPayInitModel::$is_stripe_elements}) and the environment allows it. The answer
   * tells which one was created:
   * {@link StripeComPayInitModel::$s_checkout_session}.
   *
   * @post post
   * @var bool
   */
  public $is_checkout_session = false;

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
   * @post post,result
   * @var string|null
   */
  public $m_amount = null;

  /**
   * Surcharge amount.
   *
   * `null` in case when not initialized yet, empty string or null for zero surcharge amount. See
   *
   * @post post,result
   * @var string|null
   */
  public $m_surcharge = null;

  /**
   * ID of the Checkout Session when the client card form runs on a Checkout Session.
   *
   * `null` if the form runs on a Payment Intent. In that case {@link StripeComPayInitModel::$s_client_secret} is the
   * client secret of the session, and {@link StripeComPayInitModel::$s_payment_intent} is empty: Stripe creates the
   * Payment Intent when the client confirms the session.
   *
   * @post result
   * @var string|null
   */
  public $s_checkout_session = null;

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
   * Email of the payer from the profile, for the client card form that runs on a Checkout Session.
   *
   * Stripe needs an email to complete a session. The client passes it to `confirm` of the session, because the
   * Stripe customer of the payer is created without an email.
   *
   * `null` if the card form does not run on a Checkout Session, or the payer has no email in the profile.
   *
   * @post result
   * @var string|null
   */
  public $text_mail_payer = null;

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