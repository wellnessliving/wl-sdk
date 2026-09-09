<?php

namespace WellnessLiving\Wl\Marketing\Automation\CreateFlow\Step\ExitCriteria;

/**
 * Defines categories of exit criteria shown in the grouped "Add criteria" menu of the trigger step.
 */
class ExitCriteriaCategoryEnum
{
  /**
   * Client activity criteria: booking, attending, cancelling a service, SMS response.
   */
  const CLIENT_ACTIVITY = 1;

  /**
   * Purchase-related criteria: making a purchase, purchase option status changes.
   */
  const PURCHASE_OPTIONS = 2;
}

?>