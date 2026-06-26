<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei\Terminal\OMNIChannelApi;

use WellnessLiving\Core\Locale\CurrencySid;
use WellnessLiving\Thoth\PayProcessor\Nuvei\Code\CSResponseSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Performs request to Terminal to start payment transaction.
 * In case Terminal is available - transaction is started and we schedule task to poll swipe result periodically.
 * Otherwise - error is thrown.
 *
 * @method WlModelRequest post()
 */
class NuveiTerminalTransactionStartModel extends WlModelAbstract
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
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var int|null
   */
  public $id_pay_actor = null;

  /**
   * The response id. One of {@link CSResponseSid} constants.
   *
   * `null` in case when not initialized yet.
   *
   * @post result
   * @var int|null
   */
  public $id_response = null;

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
   * Amount of tips entered in shopping cart.
   *
   * @post post
   * @var string
   */
  public $m_tip = '0.00';

  /**
   * The request exchange identification.
   *
   * `null` in case when not initialized yet.
   *
   * @post result
   * @var string
   */
  public $s_exchange_identification = '';

  /**
   * Unique terminal identifier.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $s_terminal_id = null;

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