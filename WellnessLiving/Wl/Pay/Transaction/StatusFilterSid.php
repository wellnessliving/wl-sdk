<?php

namespace WellnessLiving\Wl\Pay\Transaction;

/**
 * Transaction statuses as shown in report filters.
 *
 * @see WlPayTransactionStatusSid
 */
abstract class StatusFilterSid
{
  /**
   * All active transactions.
   *
   * @see WlPayTransactionStatusSid::AUTHORIZE_ACTIVE
   * @see WlPayTransactionStatusSid::PURCHASE_ACTIVE
   * @see WlPayTransactionStatusSid::REFUND_ACTIVE
   * @see WlPayTransactionStatusSid::REFUND_ACTIVE_WAIT
   */
  const ACTIVE = 1;

  /**
   * Authorization or store transaction is completed with errors.
   *
   * @see WlPayTransactionStatusSid::AUTHORIZE_ERROR
   */
  const AUTHORIZE_ERROR = 2;

  /**
   * Authorization or store transaction is completed successfully.
   *
   * @see WlPayTransactionStatusSid::AUTHORIZE_OK
   */
  const AUTHORIZE_OK = 3;

  /**
   * Transaction is completed with errors.
   *
   * @see WlPayTransactionStatusSid::PURCHASE_ERROR
   */
  const PURCHASE_ERROR = 4;

  /**
   * Transaction is completed, but the purchase is failed.
   *
   * @title Purchase error
   */
  const PURCHASE_FAILED = 11;

  /**
   * Transaction is completed successfully.
   *
   * @see WlPayTransactionStatusSid::PURCHASE_OK
   */
  const PURCHASE_OK = 5;

  /**
   * Waiting for transaction settlement.
   *
   * @see WlPayTransactionStatusSid::PURCHASE_WAIT
   */
  const PURCHASE_WAIT = 6;

  /**
   * Error during refund.
   *
   * @see WlPayTransactionStatusSid::REFUND_ERROR
   */
  const REFUND_ERROR = 7;

  /**
   * Transaction was refunded fully.
   *
   * @see WlPayTransactionStatusSid::REFUND_FULL
   */
  const REFUND_FULL = 8;

  /**
   * Transaction was refunded partially.
   *
   * @see WlPayTransactionStatusSid::REFUND_PARTIAL
   */
  const REFUND_PARTIAL = 9;

  /**
   * Transaction is refunded fully and purchase is cancelled.
   *
   * @see WlPayTransactionStatusSid::VOID
   */
  const VOID = 10;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Transaction.StatusFilterSid';
}

?>