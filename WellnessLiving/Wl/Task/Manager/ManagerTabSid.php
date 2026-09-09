<?php

namespace WellnessLiving\Wl\Task\Manager;

use WellnessLiving\Wl\Task\TaskStatusSid;

/**
 * A list of tabs in task manager report.
 */
class ManagerTabSid
{
  /**
   * Show all tasks.
   */
  const ALL = 3;

  /**
   * Show tasks in status complete, see {@link TaskStatusSid::COMPLETE}.
   */
  const COMPLETE = 4;

  /**
   * Show tasks in future.
   */
  const FUTURE = 2;

  /**
   * Show tasks for today.
   */
  const TODAY = 1;
}

?>