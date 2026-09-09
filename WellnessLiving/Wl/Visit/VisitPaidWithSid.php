<?php

namespace WellnessLiving\Wl\Visit;

/**
 * Possible payment statuses for the visit.
 *
 * Last ID: 7.
 */
abstract class VisitPaidWithSid
{
  /**
   * Visit was paid by event purchase.
   */
  const EVENT = 1;

  /**
   * Free visit.
   */
  const FREE = 2;

  /**
   * Visit was paid by membership.
   */
  const MEMBERSHIP = 4;

  /**
   * Whether a visit was paid with foreign system.
   */
  const OTHER = 3;

  /**
   * Visit was paid by pass.
   */
  const PASS = 7;

  /**
   * Visit was paid as single sessions.
   */
  const SINGLE_SESSION = 5;

  /**
   * Unpaid visit.
   */
  const UNPAID = 6;
}

?>