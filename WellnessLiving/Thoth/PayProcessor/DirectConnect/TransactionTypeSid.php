<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect;

/**
 * A list of transaction types.
 *
 * Last used ID 11.
 */
class TransactionTypeSid
{
  /**
   * Card authorization.
   */
  const AUTH = 1;

  /**
   * Capture transaction.
   */
  const CAPTURE = 8;

  /**
   * Capture All transaction.
   *
   * Merchant must successfully make a sale or force an authorization before invoking a
   * <tt>ProcessCreditCard - CaptureAll</tt> operation.
   */
  const CAPTURE_ALL = 9;

  /**
   * Force transaction.
   */
  const FORCE = 3;

  /**
   * Repeat sale transaction.
   */
  const REPEAT_SALE = 4;

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
   * Void transaction.
   */
  const VOID = 7;
}

?>