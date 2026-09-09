<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect;

/**
 * A list of operations for <tt>ProcessCheck</tt> method.
 *
 * Corresponds to <tt>CheckTransType</tt> enumeration in API documentation.
 *
 * Values of constants are similar to values of {@link TransactionTypeSid} unintentionally. Just a copy-paste.
 * But be careful to not to mess things up - these lists are different.
 */
class ProcessCheckOperationSid
{
  /**
   * Verify the amount of a check.
   */
  const AUTH = 1;

  /**
   * Settle a single check transaction in the current batch.
   */
  const CAPTURE = 8;

  /**
   * Settle all check transactions in the current batch.
   */
  const CAPTURE_ALL = 9;

  /**
   * Force a previous Sale transaction into the current batch.
   */
  const FORCE = 3;

  /**
   * Return funds from a settled check transaction to the account holder.
   */
  const RETURN_TRANSACTION = 5;

  /**
   * Process a sale by check.
   */
  const SALE = 2;

  /**
   * Voids a previously processed check sale, force or return.
   */
  const VOID = 7;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.DirectConnect.ProcessCheckOperationSid';
}

?>