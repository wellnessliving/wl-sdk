<?php

namespace WellnessLiving\Wl\Holiday\Edit;

/**
 * List of steps during a holiday edit.
 */
class StepSid
{
  /**
   * A holiday's name, location or business scale editing.
   */
  const INFO = 1;

  /**
   * Notifying of impacted clients.
   */
  const NOTIFY = 3;

  /**
   * Selection of appointments, classes and events to cancel.
   */
  const SERVICE = 2;
}

?>