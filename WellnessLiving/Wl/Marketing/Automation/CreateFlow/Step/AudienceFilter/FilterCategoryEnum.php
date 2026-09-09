<?php

namespace WellnessLiving\Wl\Marketing\Automation\CreateFlow\Step\AudienceFilter;

/**
 * Defines categories of audience filters shown in the grouped "Add filter" menu of the trigger step.
 */
class FilterCategoryEnum
{
  /**
   * Activity-based filters: bookings, past purchases.
   */
  const ACTIVITY = 1;

  /**
   * Demographic filters: age, gender.
   */
  const DEMOGRAPHICS = 2;

  /**
   * Profile filters: client type, client group, home location, purchase option status.
   */
  const PROFILE = 3;
}

?>