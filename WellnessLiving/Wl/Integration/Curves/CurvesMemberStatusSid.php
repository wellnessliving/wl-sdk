<?php

namespace WellnessLiving\Wl\Integration\Curves;

/**
 * Types of client's statues in Curves.
 */
class CurvesMemberStatusSid
{
  /**
   * Client is active.
   */
  const ACTIVE = 1;

  /**
   * Client is inactive.
   */
  const CANCEL = 5;

  /**
   * Business is closed.
   */
  const CLOSED_CLUB = 7;

  /**
   * Client is on hold.
   */
  const MEDICAL_HOLD = 3;

  /**
   * Client is on hold.
   */
  const PAID_HOLD = 6;

  /**
   * Unknown status. Probably something like active.
   */
  const PENDING = 2;

  /**
   * Client is temporary transferred.
   */
  const TEMPORARY_TRANSFER = 4;
}

?>