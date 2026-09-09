<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei\Onboarding;

/**
 * List of possible statuses of the `Nuvei` integration process.
 */
class NuveiOnboardingStatusSid
{
  /**
   * Merchant integration is done.
   * Payments are allowed in this status.
   */
  const INTEGRATED = 4;

  /**
   * Merchant is not created. Row is not in the database table.
   * This status cannot appear in the database.
   */
  const NOT_INTEGRATED = 1;

  /**
   * Merchant is created, but onboarding is not started due to processor errors.
   */
  const NOT_INTEGRATED_INIT_REQUEST_FAILED = 5;
}

?>