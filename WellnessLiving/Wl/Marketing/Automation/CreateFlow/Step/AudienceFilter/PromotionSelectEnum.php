<?php

namespace WellnessLiving\Wl\Marketing\Automation\CreateFlow\Step\AudienceFilter;

/**
 * Defines how purchase options are selected for the promotion status audience filter.
 */
class PromotionSelectEnum
{
  /**
   * All purchase options must match the selected status.
   */
  const PROMOTION_ALL = 3;

  /**
   * Any purchase option with the selected status.
   */
  const PROMOTION_ANY = 1;

  /**
   * Specific purchase options selected from a list.
   */
  const PROMOTION_SPECIFIC = 2;
}

?>