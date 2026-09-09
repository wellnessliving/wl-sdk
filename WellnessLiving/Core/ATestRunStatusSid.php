<?php

namespace WellnessLiving\Core;

/**
 * Test run statuses.
 */
abstract class ATestRunStatusSid
{
  /**
   * The run is currently active.
   */
  const ACTIVE = 2;

  /**
   * The run is aborted with internal errors.
   */
  const ERROR = 4;

  /**
   * The run is not started yet.
   */
  const NEVER = 1;

  /**
   * The run is complete with no errors.
   */
  const OK = 3;
}

?>