<?php

namespace WellnessLiving\Wl\Marketing\Automation\CreateFlow\Step\AudienceFilter;

/**
 * Defines the comparison operators for the age audience filter.
 */
class AgeOperatorEnum
{
  /**
   * Age is within an inclusive range (both bounds included).
   */
  const BETWEEN = 4;

  /**
   * Age is exactly the specified value.
   */
  const EXACTLY = 3;

  /**
   * Age is strictly greater than the specified value.
   */
  const OVER = 2;

  /**
   * Age is strictly less than the specified value.
   */
  const UNDER = 1;
}

?>