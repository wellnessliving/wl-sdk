<?php

namespace WellnessLiving\Wl\Tuition;

/**
 * List of methods the first membership payment within tuition can be prorated by.
 */
class TuitionProrationEnum
{
  /**
   * Prorated by the number of days left in the billing cycle.
   */
  const DAYS = 1;

  /**
   * Prorated by the number of event sessions left in the billing cycle.
   */
  const SESSIONS = 2;
}

?>