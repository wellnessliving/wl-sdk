<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect;

/**
 * A list of payment types.
 */
class PaymentTypeSid
{
  /**
   * Credit card.
   */
  const CARD = 1;

  /**
   * Check (ACH).
   */
  const CHECK = 2;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.DirectConnect.PaymentTypeSid';
}

?>