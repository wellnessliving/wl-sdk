<?php

namespace WellnessLiving\Wl\Import\Wizard\Step;

/**
 * List of possible states of the different import wizard states.
 *
 * Last insert ID: 5.
 */
class StepStatusSid
{
  /**
   * Automatic import of source data in progress.
   */
  const ACTIVE_SOURCE = 5;

  /**
   * Automatic import of urls in progress.
   */
  const ACTIVE_URL = 3;

  /**
   * Automatic import is ready to start.
   */
  const BACKLOG = 1;

  /**
   * Automatic import is completed.
   */
  const COMPLETE = 4;

  /**
   * Import is going to be manual.
   */
  const MANUAL = 2;
}

?>