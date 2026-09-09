<?php

namespace WellnessLiving\Wl\ClassPass;

use WellnessLiving\Wl\Visit\WlVisitSid;

/**
 * Works with Class Pass visit statuses.
 *
 * Last used ID: 6.
 */
class ReservationStatusSid
{
  /**
   * Client has attended the session.
   *
   * @see WlVisitSid::ATTEND
   */
  const ATTENDED = 3;

  /**
   * Client has cancelled the reservation in time and without penalty.
   *
   * @see WlVisitSid::CANCEL
   */
  const CANCELLED = 2;

  /**
   * Reservation is cancelled due to that class is cancelled.
   */
  const CLASS_CANCELLED = 6;

  /**
   * Active reservation means that user is going to attend the session.
   *
   * @see WlVisitSid::BOOK
   */
  const ENROLLED = 1;

  /**
   * Client has cancelled his reservation too late.
   *
   * @see WlVisitSid::PENALTY
   */
  const LATE_CANCELLED = 4;

  /**
   * Client has missed the session without cancellation.
   *
   * @see WlVisitSid::TRUANCY
   */
  const MISSED = 5;
}

?>