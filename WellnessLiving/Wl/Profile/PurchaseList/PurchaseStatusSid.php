<?php

namespace WellnessLiving\Wl\Profile\PurchaseList;

/**
 * Possible purchase statuses to filter on in purchase list page.
 * Currently only used in JavaScript.
 */
class PurchaseStatusSid
{
  /**
   * Purchases containing purchase options that are active or on-hold.
   */
  const ACTIVE = 1;

  /**
   * Purchases containing purchase options that are expired or canceled.
   */
  const INACTIVE = 2;
}

?>