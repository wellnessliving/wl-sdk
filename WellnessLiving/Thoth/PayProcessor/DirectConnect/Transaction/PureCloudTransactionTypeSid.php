<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect\Transaction;

/**
 * A list of `PureCloud` transaction types.
 *
 * Last used ID 11.
 */
class PureCloudTransactionTypeSid
{
  /**
   * Adjust transaction.
   */
  const ADJUSTMENT = 10;

  /**
   * Card authorization.
   */
  const AUTH = 1;

  /**
   * Force transaction.
   */
  const FORCE = 3;

  /**
   * Return transaction.
   */
  const RETURN_TRANSACTION = 5;

  /**
   * Reversal transaction.
   */
  const REVERSAL = 6;

  /**
   * Sale transaction.
   */
  const SALE = 2;

  /**
   * Card tokenization.
   */
  const TOKENIZE = 11;

  /**
   * Void transaction.
   */
  const VOID = 7;
}

?>