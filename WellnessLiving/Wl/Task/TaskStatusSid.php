<?php

namespace WellnessLiving\Wl\Task;

/**
 * A list of task statuses.
 */
class TaskStatusSid
{
  /**
   * Task is not started.
   */
  const BACKLOG = 1;

  /**
   * Task completed.
   */
  const COMPLETE = 3;

  /**
   * Task in progress.
   */
  const PROGRESS = 2;
}

?>