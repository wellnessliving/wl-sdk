<?php

namespace WellnessLiving\Wl\Visit;

/**
 * Possible states of the visit: book, attended, cancelled, etc.
 *
 * Last used ID: 8.
 */
class WlVisitSid
{
  /**
   * Client has attended the session.
   */
  const ATTEND = 3;

  /**
   * Active reservation means that user is going to attend the session.
   */
  const BOOK = 1;

  /**
   * Client has cancelled the reservation in time and without penalty.
   */
  const CANCEL = 6;

  /**
   * Client has cancelled his reservation too late.
   */
  const PENALTY = 4;

  /**
   * This state means that visit is registered, but it is unknown is it {@link WlVisitSid::ATTEND}
   * or {@link WlVisitSid::TRUANCY} or {@link WlVisitSid::PENALTY} but definitely one of these states.
   *
   * The real type of this visit must be set manually by staff.
   */
  const PENDING = 7;

  /**
   * Visit was removed.
   * Visits with this status are not shown anywhere in system, but still are saved in database.
   */
  const REMOVE = 8;

  /**
   * Client has missed the session without cancellation.
   */
  const TRUANCY = 5;

  /**
   * Reservation in a wait list means that user is going to attend the session if someone will cancel his reservation.
   */
  const WAIT = 2;
}

?>