<?php

namespace WellnessLiving\Wl\Service;

/**
 * Age restriction statuses.
 */
class AgeRestrictionStatusSid
{
  /**
   * Client age must be between limits.
   */
  const AGE_BETWEEN = 2;

  /**
   * Client is available to book service.
   */
  const AVAILABLE = 1;

  /**
   * Client age must be less then max age.
   */
  const MAX_AGE = 3;

  /**
   * Client age must be great then min age.
   */
  const MIN_AGE = 4;
}

?>