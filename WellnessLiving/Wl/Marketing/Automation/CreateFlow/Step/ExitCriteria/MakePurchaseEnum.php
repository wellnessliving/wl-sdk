<?php

namespace WellnessLiving\Wl\Marketing\Automation\CreateFlow\Step\ExitCriteria;

/**
 * Defines list of make purchase options.
 */
class MakePurchaseEnum
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
   * Specific purchase.
   */
  const PURCHASE_SPECIFIC = 6;
}

?>