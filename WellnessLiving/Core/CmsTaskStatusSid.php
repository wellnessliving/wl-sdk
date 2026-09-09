<?php

namespace WellnessLiving\Core;

/**
 * A list of task statuses.
 */
class CmsTaskStatusSid
{
  /**
   * The thread is being executed.
   */
  const ACTIVE = 2;

  /**
   * The thread is dead.
   *
   * The dead thread is the one that has disconnected from MySQL and do not perform any activity.
   */
  const DEAD = 4;

  /**
   * The thread is successfully finished.
   */
  const END = 3;

  /**
   * The thread is being initialized.
   */
  const INIT = 1;

  /**
   * The server is down.
   */
  const TERMINATED = 5;
}

?>