<?php

namespace WellnessLiving\Wl;

/**
 * Manages types of users action.
 */
abstract class RsVisitActionSid
{
  /**
   * User action undefined and must be set manually.
   */
  const PENDING = 3;

  /**
   * User no show on visit.
   */
  const TRUANCY = 2;

  /**
   * User made visit.
   */
  const VISIT = 1;
}

?>