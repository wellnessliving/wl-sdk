<?php

namespace WellnessLiving\Thoth\PayProcessor\TransactionInfo;

/**
 * Transaction status as reported by merchant.
 */
abstract class TransactionInfoStatusSid
{
  /**
   * Transaction is authorized and currently waits for capture or voiding.
   */
  const AUTHORIZED = 5;

  /**
   * Transaction has settled.
   */
  const COMPLETE = 1;

  /**
   * Transaction has failed.
   */
  const ERROR = 2;

  /**
   * Transaction is waiting for settlement or completion.
   */
  const PENDING = 3;

  /**
   * Transaction is refunded entirely.
   */
  const REFUND_FULL = 6;

  /**
   * Transaction is refunded partially.
   */
  const REFUND_PARTIAL = 7;

  /**
   * Transaction has been voided.
   */
  const VOID = 4;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.TransactionInfo.TransactionInfoStatusSid';
}

?>