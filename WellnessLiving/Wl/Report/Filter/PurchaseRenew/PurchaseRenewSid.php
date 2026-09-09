<?php

namespace WellnessLiving\Wl\Report\Filter\PurchaseRenew;

/**
 * Renewal state of purchase.
 */
class PurchaseRenewSid
{
  /**
   * Show transactions that were not due to a renewal.
   */
  const NO = 2;

  /**
   * Show only transactions that were because of a renewal.
   */
  const YES = 1;
}

?>