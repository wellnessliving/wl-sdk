<?php

namespace WellnessLiving\Thoth\PayProcessor\ProcessorInterface;

/**
 * A list of transaction operations.
 */
class PayProcessorTransactionOperationSid
{
  /**
   * Authorization transaction.
   */
  const AUTHORIZE = 2;

  /**
   * Charge a user credit card or bank account.
   */
  const CHARGE = 1;

  /**
   * Refund a previously created payment or authorization transaction.
   */
  const REFUND = 3;

  /**
   * Void a previously created payment or authorization transaction.
   */
  const VOID = 4;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.ProcessorInterface.PayProcessorTransactionOperationSid';
}

?>