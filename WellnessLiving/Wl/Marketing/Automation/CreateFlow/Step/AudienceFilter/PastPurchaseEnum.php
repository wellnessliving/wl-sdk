<?php

namespace WellnessLiving\Wl\Marketing\Automation\CreateFlow\Step\AudienceFilter;

/**
 * Defines list of past purchase options.
 */
class PastPurchaseEnum
{
  /**
   * Any event.
   */
  const EVENT = 2;

  /**
   * Any gift card.
   */
  const GIFT_CARD = 3;

  /**
   * Any product.
   */
  const PRODUCT = 5;

  /**
   * Any purchase option.
   */
  const PROMOTION = 4;

  /**
   * Any purchase.
   */
  const PURCHASE_ANY = 1;

  /**
   * No purchase history.
   */
  const PURCHASE_NO = 7;

  /**
   * Specific purchase.
   */
  const PURCHASE_SPECIFIC = 6;
}

?>