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
   * Card tokenization.
   */
  const TOKENIZE = 11;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.DirectConnect.Transaction.PureCloudTransactionTypeSid';
}

?>