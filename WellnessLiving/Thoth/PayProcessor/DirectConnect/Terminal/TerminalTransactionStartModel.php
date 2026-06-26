<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect\Terminal;

use WellnessLiving\Core\Locale\CurrencySid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPayProcessorSid;

/**
 * Creates a gateway ticket with basic transaction information. Once the POS system sees this newly created ticket,
 * it loads the ticket and begins the transaction at the terminal.
 *
 * @method WlModelRequest post()
 */
class TerminalTransactionStartModel extends WlModelAbstract
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
   * The type of transaction you wish to create.
   *
   * @post post
   * @var int
   */
  public $id_transaction_type = 1;

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
   * Should terminal prompt for tip entry.
   *
   * For {@link WlPayProcessorSid::DIRECT_CONNECT} can be used only when transaction type is {@link PureCloudTransactionTypeSid::SALE}.
   *
   * @post post
   * @var bool
   */
  public $is_prompt_for_tip = false;

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
   * Unique terminal identifier.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $s_terminal_id = null;

  /**
   * Gateway Ticket ID.
   *
   * `null` in case response has not received yet or request is failed.
   *
   * @post result
   * @var string|null
   */
  public $s_ticket_id = null;

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