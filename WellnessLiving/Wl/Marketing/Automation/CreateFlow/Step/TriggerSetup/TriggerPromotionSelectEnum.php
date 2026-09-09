<?php

namespace WellnessLiving\Wl\Marketing\Automation\CreateFlow\Step\TriggerSetup;

/**
 * Purchase option selection mode.
 */
class TriggerPromotionSelectEnum
{
  /**
   * Trigger fires when booking is paid with any purchase option.
   */
  const PROMOTION_ANY = 1;

  /**
   * Trigger fires on any booking regardless of payment status.
   */
  const PROMOTION_ANY_ALL = 5;

  /**
   * Trigger fires when booking is paid with one of selected purchase options.
   */
  const PROMOTION_SPECIFIC = 2;

  /**
   * Trigger fires when booking is unpaid (no purchase option was used).
   */
  const PROMOTION_UNPAID = 4;
}

?>