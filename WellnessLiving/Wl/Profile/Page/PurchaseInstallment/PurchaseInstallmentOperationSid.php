<?php

namespace WellnessLiving\Wl\Profile\Page\PurchaseInstallment;

/**
 * Statuses of items at installment schedule page.
 */
class PurchaseInstallmentOperationSid
{
  /**
   * A row for "installment plan is cancelled" item.
   */
  const CANCEL = 1;

  /**
   * A row for "collected payment" item".
   */
  const COLLECTED = 7;

  /**
   * A row for "installment plan is created" item".
   */
  const CREATE = 2;

  /**
   * A row for "erroneous payment" item".
   */
  const ERROR = 4;

  /**
   * Transaction was successful, but refunded after that.
   */
  const REFUND = 6;

  /**
   * A row for "scheduled payment" item".
   */
  const SCHEDULE = 5;

  /**
   * A row for "successful payment" item".
   */
  const SUCCESS = 3;
}

?>