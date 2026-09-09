<?php

namespace WellnessLiving\Wl\Marketing\Automation\Step;

/**
 * Due date mode for the Task automation step.
 */
class StepTaskDueDateModeSid
{
  /**
   * Due date is calculated as a delay after the task creation date.
   */
  const DELAY = 1;

  /**
   * Due date is a specific calendar date and time.
   */
  const SPECIFIC = 2;
}

?>