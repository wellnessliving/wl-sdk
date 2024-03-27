<?php

namespace WellnessLiving\Wl\Classes\Tab;

/**
 * List of class tab objects.
 *
 * Last ID: 6.
 */
abstract class TabSid
{
  /**
   * Enrolments.
   */
  const ENROLLMENT = 2;

  /**
   * Bookable Assets.
   */
  const RESOURCE = 4;

  /**
   * Bookable assets.
   * Old wizard.
   * Enable in debug mode only.
   */
  const RESOURCE_OLD = 6;

  /**
   * Appointments.
   */
  const SERVICE = 3;

  /**
   * Appointments.
   * Old wizard.
   * Enable in debug mode only.
   */
  const SERVICE_OLD = 5;

  /**
   * Classes.
   */
  const TRAINING = 1;
}

?>