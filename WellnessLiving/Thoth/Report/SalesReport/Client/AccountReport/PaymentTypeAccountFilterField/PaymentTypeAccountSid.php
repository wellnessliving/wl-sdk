<?php

namespace WellnessLiving\Thoth\Report\SalesReport\Client\AccountReport\PaymentTypeAccountFilterField;

/**
 * List of payment type identifiers for account transactions.
 *
 * Last ID: 5.
 */
class PaymentTypeAccountSid
{
  /**
   * Manual credit adjustment.
   */
  const MANUAL_CREDIT_ADJUSTMENT = 4;

  /**
   * Manual debit adjustment.
   */
  const MANUAL_DEBIT_ADJUSTMENT = 3;

  /**
   * Payment towards account.
   */
  const PAYMENT_TOWARDS_ACCOUNT = 2;

  /**
   * Purchase on account.
   */
  const PURCHASE_ON_ACCOUNT = 1;

  /**
   * Refund credited to the account balance.
   *
   * Used when a refund on an item that was originally paid via the Account payment method
   * is credited back to the client's account balance.
   */
  const REFUND = 5;
}

?>