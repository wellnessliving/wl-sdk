<?php

namespace WellnessLiving\Wl\Purchase\Item\Tuition;

/**
 * Defines how the tuition billing model works.
 */
class TuitionBillingModelEnum
{
  /**
   * For the batch of the event purchases one installment plan occurred.
   */
  const INSTALLMENT = 1;

  /**
   * For each event within the tuition a separate membership created with own payment cycle.
   */
  const MEMBERSHIP = 2;
}

?>