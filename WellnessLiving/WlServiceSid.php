<?php

/**
 * Identifiers for services types.
 *
 * Last used ID: 5.
 */
class WlServiceSid
{
  /**
   * Appointments.
   */
  const APPOINTMENT = 1;

  /**
   * Classes.
   */
  const CLASSES = 2; // Can not use single form class because this is an internal php word

  /**
   * Enrolments.
   */
  const ENROLLMENT = 3;

  /**
   * Resources.
   */
  const RESOURCE = 5;

  /**
   * Visits.
   */
  const VISIT = 4;
}

?>