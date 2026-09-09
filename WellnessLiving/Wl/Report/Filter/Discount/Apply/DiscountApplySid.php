<?php

namespace WellnessLiving\Wl\Report\Filter\Discount\Apply;

/**
 * Status of the discount that was applied on purchase or was not applied.
 */
class DiscountApplySid
{
  /**
   * Purchase was not discounted.
   */
  const NO = 2;

  /**
   * Purchase was discounted.
   */
  const YES = 1;
}

?>