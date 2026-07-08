<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Updates `Nuvei` transaction with the gateway transaction ID.
 *
 * @method WlModelRequest post() Finalizes the `Nuvei` transaction after successful payer authentication.  Validates the payer authentication session and encrypted card token, then updates the payment  transaction created by {@link \Thoth\PayProcessor\Nuvei\NuveiOpenOrderApi} with the gateway transaction ID and card data.
 */
class NuveiTransactionOnAuthSuccessModel extends WlModelAbstract
{
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
   * Key of a selected payment source.
   *
   * `null` in case when an existed payment source is not used.
   *
   * @post post
   * @var string|null
   */
  public $k_pay_bank = null;

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
   * Key of payment transaction that was previously created with {@link NuveiOpenOrderModel}.
   *
   * `null` in case when not initialized yet.
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
   * Contents of the encrypted token.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $s_encrypt = null;

  /**
   * The order ID provided by Nuvei.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $s_nuvei_order = null;

  /**
   * The session identifier to be used by the request that processes the newly opened order.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $s_nuvei_session = null;

  /**
   * Payment gateway-specific response object.
   *
   * @post post
   * @var string|null
   */
  public $s_response = null;

  /**
   * The Gateway transaction ID.
   *
   * @post post
   * @var string|null
   */
  public $s_transaction = null;

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