<?php

namespace WellnessLiving\Wl\Visit\First;

/**
 * List of first visit search scopes.
 *
 * Last used ID: 2.
 */
class FirstVisitScopeSid
{
  /**
   * Business-wide. I.e. first visit to the business ever.
   */
  const BUSINESS = 1;

  /**
   * Service-specific. I.e. first visit to any of the listed services.
   */
  const SERVICE = 2;
}

?>