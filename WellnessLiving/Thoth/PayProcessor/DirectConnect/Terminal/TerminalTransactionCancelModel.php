<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect\Terminal;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Cancels existing Payment Ticket.
 *
 * @method WlModelRequest post()
 */
class TerminalTransactionCancelModel extends WlModelAbstract
{
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
   * Pay transaction key, which was used to create payment intent.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $k_pay_transaction = null;

  /**
   * Arbitrary information about Payment Ticket, like error message.
   *
   * `null` in case response has not received yet or request is not failed.
   *
   * @post result
   * @var string|null
   */
  public $text_message = null;
}

?>