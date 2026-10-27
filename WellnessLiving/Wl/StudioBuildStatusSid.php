<?php

namespace WellnessLiving\Wl;

/**
 * List of all possible statuses of the build.
 *
 * Last used id: 8.
 */
class StudioBuildStatusSid
{
  /**
   * The build is currently running.
   */
  const ACTIVE = 1;

  /**
   * The build is dead. Perhaps problems on the server.
   */
  const DEAD = 4;

  /**
   * The build is finished with errors.
   */
  const ERROR = 3;

  /**
   * The build was killed.
   */
  const KILL = 8;

  /**
   * The build finished successfully.
   */
  const OK = 2;

  /**
   * The build is in the queue (not currently running).
   */
  const QUEUE = 6;

  /**
   * The build is skipped.
   */
  const SKIP = 7;

  /**
   * The build finished successfully but with warnings.
   */
  const WARNING = 5;
}

?>