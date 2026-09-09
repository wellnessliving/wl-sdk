<?php

namespace WellnessLiving\Thoth\Report\SalesReport\Transaction;

/**
 * List of report generator partition types, defining which generator method is run for handling the partition.
 *
 * Last used ID: 8
 */
class TransactionAllReportPartitionSid
{
  /**
   * Free purchases without any payments and related transactions.
   */
  const FREE = 6;

  /**
   * Purchases generated from redemption of a products/services gift card.
   */
  const GIFT_COMPONENT = 5;

  /**
   * Groupon daily deals partition.
   */
  const GROUPON = 3;

  /**
   * Ledger transactions with purchase.
   *
   * Includes purchase items and transactions (with purchases) with `PurchaseTransactionLedgerSearchWord` search word.
   *
   * For example, a client buy a PO by account balance, which become negative after the purchase.
   *     Then the client refill the account balance by purchase (for example, using "Make a payment" button).
   *     This refill transaction is linked to the source PO.
   */
  const LEDGER = 7;

  /**
   * Ledger transactions without purchase.
   *
   * Includes transactions (without purchases) with `PurchaseTransactionLedgerSearchWord` search word.
   *
   * For example, a client buy a PO by account balance, which become negative after the purchase.
   *     Then the client refill the account balance by transaction (for example, using "Credit" button or "Gift Card" redemption).
   *     This refill transaction is linked to the source PO.
   */
  const LEDGER_MANUAL = 8;

  /**
   * Manual transactions.
   */
  const MANUAL = 4;

  /**
   * Refunds partition.
   */
  const REFUND = 2;

  /**
   * Primary initial sales partition.
   */
  const SALE = 1;
}

?>