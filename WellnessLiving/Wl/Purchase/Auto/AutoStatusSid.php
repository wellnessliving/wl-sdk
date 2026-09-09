<?php

namespace WellnessLiving\Wl\Purchase\Auto;

use WellnessLiving\Wl\Pay\Transaction\WlPayTransactionStatusSid;

/**
 * Different types of payments, which can be available in Projected Revenue report.
 *
 * Last used ID: 12.
 */
class AutoStatusSid
{
  /**
   * Future automatic payment of a bulk billing batch that has not been resolved (billed, failed or canceled) yet.
   */
  const BULK_BILLING = 12;

  /**
   * Future automatic payments based on convert of purchased promotions.
   */
  const CONVERT = 3;

  /**
   * Future automatic payments based on refill of a membership account for memberships, which are on hold.
   */
  const HOLD = 11;

  /**
   * Installment plan.
   */
  const INSTALLMENT = 5;

  /**
   * Future automatic payments based on refill of a membership account for memberships, which are not on hold.
   */
  const MEMBERSHIP = 4;

  /**
   * Automatic payments based on purchases (payments in the past).
   */
  const PURCHASE = 1;

  /**
   * Transaction is completed with errors.
   *
   * @see WlPayTransactionStatusSid::PURCHASE_ERROR
   */
  const PURCHASE_ERROR = 8;

  /**
   * We are waiting when financial institution (e.g. bank) will process our transaction. For example, cheques or bank
   * account transactions can be processed not immediately but after some time (e.g. 3-4 days).
   *
   * @see WlPayTransactionStatusSid::PURCHASE_WAIT
   */
  const PURCHASE_WAIT = 10;

  /**
   * Transaction was refunded fully.
   *
   * @see WlPayTransactionStatusSid::REFUND_FULL
   */
  const REFUND_FULL = 7;

  /**
   * Transaction was refunded partially.
   *
   * @see WlPayTransactionStatusSid::REFUND_PARTIAL
   */
  const REFUND_PARTIAL = 6;

  /**
   * Future automatic payments based on renewal of purchased promotions.
   */
  const RENEW = 2;

  /**
   * Transaction was refunded fully and purchase has been cancelled.
   *
   * @see WlPayTransactionStatusSid::VOID
   */
  const VOID = 9;
}

?>