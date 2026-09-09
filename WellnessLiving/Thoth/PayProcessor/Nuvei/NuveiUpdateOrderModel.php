<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei;

use WellnessLiving\Core\Locale\CurrencySid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\RsPayActorSid;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * Allow modifying the amount of a previously opened order {@link NuveiOpenOrderModel}.
 *
 * @method WlModelRequest post() Updates the amount of a previously opened `Nuvei` order.  Validates the payer authentication session, then requests `Nuvei` to update the amount of the order  opened by {@link \Thoth\PayProcessor\Nuvei\NuveiOpenOrderApi} and adjusts the payment transaction accordingly.
 */
class NuveiUpdateOrderModel extends WlModelAbstract
{
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
   * Key of payment transaction that was created in {@link NuveiOpenOrderModel}.
   *
   * This will be `null` if not loaded yet.
   *
   * @post post
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
   * The order ID that was created in {@link NuveiOpenOrderModel}.
   *
   * This will be `null` if not loaded yet.
   *
   * @post post
   * @var string|null
   */
  public $s_nuvei_order = null;

  /**
   * The session identifier in which order was created.
   *
   * This will be `null` if not loaded yet.
   *
   * @post post
   * @var string|null
   */
  public $s_nuvei_session = null;

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