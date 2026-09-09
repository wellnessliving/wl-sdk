<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect;

/**
 * Transaction settlement types.
 *
 * This enumeration is not documented. This list is received from DC support team.
 */
class TransactionSettleSid
{
  /**
   * Exception.
   */
  const EXCEPTION = 4;

  /**
   * Rolled back / indeterminate.
   *
   * This status means that Direct Connect will perform actions to move status to settled or unsettled - we should wait.
   */
  const INDETERMINATE = 2;

  /**
   * Not settled.
   */
  const NOT_SETTLED = 0;

  /**
   * Transaction is being processed.
   */
  const PROGRESS = 5;

  /**
   * Settled.
   */
  const SETTLED = 1;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.DirectConnect.TransactionSettleSid';
}

?>