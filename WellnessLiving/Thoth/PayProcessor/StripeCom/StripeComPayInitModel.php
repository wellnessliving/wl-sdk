<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom;

use WellnessLiving\Core\Locale\CurrencySid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * Creates not captured Payment Intent, returns its status and secret key to use on frontend.
 *
 * @method WlModelRequest post()
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
   * This is the case for card swiper or Stripe Payment Element ({@link https://stripe.com/docs/payments/elements}) -
   * create payment intent first, then create payment method. And vice versa in case of virtual terminal.
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