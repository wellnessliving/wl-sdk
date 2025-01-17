<?php

namespace WellnessLiving\Wl\Pay\Transaction;

/**
 * Transaction statuses.
 *
 * Last used ID: 15.
 *
 * @
 */
abstract class WlPayTransactionStatusSid
{
  /**
     * The authorization or store transaction is being performed now.
     */
  const AUTHORIZE_ACTIVE = 8;

  /**
     * Authorization or store transaction is completed with errors.
     */
  const AUTHORIZE_ERROR = 10;

  /**
     * Authorization or store transaction is completed successfully.
     */
  const AUTHORIZE_OK = 9;

  /**
     * The transaction is being performed now.
     */
  const PURCHASE_ACTIVE = 1;

  /**
     * Transaction is completed with errors.
     */
  const PURCHASE_ERROR = 3;

  /**
     * Transaction is completed successfully, but the purchase wasn't finished (failed by a temporary error).
     *
     *
     * **Important note** Used only for indexation data for the reports.
     */
  const PURCHASE_FAILED = 15;

  /**
     * Transaction is completed successfully.
     */
  const PURCHASE_OK = 2;

  /**
     * Transaction is completed successfully, but should be hidden from reports.
     *
     * This status is set only in specific cases during import.
     */
  const PURCHASE_OK_HIDDEN = 14;

  /**
     * We are waiting when financial institution (e.g. bank) will process our transaction. For example, cheques or bank
     * account transactions can be processed not immediately but after some time (e.g. 3-4 days).
     */
  const PURCHASE_WAIT = 11;

  /**
     * Transaction is being refunded now, and previous status was successful payment.
     */
  const REFUND_ACTIVE = 5;

  /**
     * Transaction is being refunded now.
     *
     * Exactly the same as {@link WlPayTransactionStatusSid::REFUND_ACTIVE}, but set if previous status was
     * {@link WlPayTransactionStatusSid::PURCHASE_WAIT}. In a case of error during refund, this status is changed to
     * {@link WlPayTransactionStatusSid::PURCHASE_WAIT}.
     */
  const REFUND_ACTIVE_WAIT = 13;

  /**
     * Refund operation has failed.
     *
     * This status should be treated exactly like {@link WlPayTransactionStatusSid::PURCHASE_OK}: we've received money
     * successfully, and did not refund or void transaction.
     *
     * The difference is that we've tried to refund a successful transaction.
     *
     * **Important note** If a transaction is refunded partially, it will stay in
     * {@link WlPayTransactionStatusSid::REFUND_PARTIAL} even after an unsuccessful attempt to refund more.
     */
  const REFUND_ERROR = 6;

  /**
     * Transaction was refunded fully.
     *
     * Note that in contrast to REFUND_PARTIAL, there are no items stored in <tt>rs_pay_transaction_refund</tt> table for
     * transactions in REFUND_FULL status.
     *
     * @see WlPayTransactionStatusSid::REFUND_PARTIAL
     */
  const REFUND_FULL = 4;

  /**
     * Transaction was refunded partially.
     *
     * This status is set when there is an amount in a transaction that is not refunded.
     *
     * 
     *
     *
     * @see WlPayTransactionStatusSid::REFUND_FULL
     */
  const REFUND_PARTIAL = 7;

  /**
     * Transaction was refunded fully and purchase has been cancelled.
     *
     * Void is a type of refund with set of limits. The main difference between refund and void is, that during refund we
     * can cancel transaction before it was settled or we can return money that we have already got. During void of the
     * transaction we cannot return money, we can only cancel transaction if it has not been settled yet.
     *
     * This is important because returning of the money is connected to the bank commissions and cancelling the
     * transaction is a free option. That's why this is two different ways to cancel purchase.
     *
     * The voided transaction is a transaction that never exists. This also means that purchase that is connected to the
     * voided transaction should be always erased.
     *
     * Voiding transaction has sets of limits:<ul>
     *   <li>transaction should not be settled;</li>
     *   <li>transaction should not be from internal account balance;</li>
     *   <li>transaction should be single in the purchase.</li>
     * </ul>
     *
     * @link https://wellnessliving.atlassian.net/browse/WL-2122
     * @see WlPayTransactionStatusSid::REFUND_FULL
     * @see WlPayTransactionStatusSid::REFUND_PARTIAL
     */
  const VOID = 12;
}

?>