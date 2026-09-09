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
   * Repeat sale transaction.
   */
  const REPEAT_SALE = 4;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.DirectConnect.TransactionTypeSid';
}

?>