<?php

namespace WellnessLiving\Wl\GymPass;

/**
 * Possible statuses of <tt>GymPass</tt> visits.
 */
class VisitStatusSid
{
  /**
   * Visit cancelled.
   */
  const CANCEL = 4;

  /**
   * Visit cancelled by Gym.
   */
  const CANCELLED_BY_GYM = 5;

  /**
   * Visit completed.
   */
  const COMPLETED = 6;

  /**
   * Unknown status.
   */
  const ISSUE_REPORTED = 10;

  /**
   * Visit cancelled late.
   */
  const LATE_CANCELED = 7;

  /**
   * Unknown status.
   */
  const NOT_VALIDATED = 8;

  /**
   * Pending. Default status.
   */
  const PENDING = 1;

  /**
   * Visit rejected.
   */
  const REJECT = 3;

  /**
   * Visit approved.
   */
  const RESERVED = 2;
}

?>