<?php

namespace WellnessLiving\Wl;

/**
 * Manages program types on visit report.
 *
 * Last used id: 9.
 *
 * @see WlProgramSid
 */
abstract class RsVisitProgramSid
{
  /**
   * User paid with event purchase.
   */
  const ENROLLMENT = 9;

  /**
   * User paid with membership.
   */
  const MEMBERSHIP = 3;

  /**
   * User booked online.
   */
  const ONLINE = 6;

  /**
   * User paid with pass.
   */
  const PASS = 4;

  /**
   * Late cancel.
   */
  const PENALTY = 7;

  /**
   * WellnessLiving promotion.
   */
  const PROSPECT = 5;

  /**
   * User made single buy.
   */
  const SINGLE_BUY = 2;

  /**
   * User no show.
   */
  const TRUANCY = 1;

  /**
   * User attended class.
   */
  const VISIT = 8;
}

?>