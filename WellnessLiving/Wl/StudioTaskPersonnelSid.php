<?php

namespace WellnessLiving\Wl;

/**
 * A list of roles that a personnel can be assigned to a task with.
 */
abstract class StudioTaskPersonnelSid
{
  /**
   * Author of the task.
   */
  const AUTHOR = 1;

  /**
   * Reviewer of the task.
   */
  const REVIEW = 2;

  /**
   * Viewer of the task.
   */
  const VIEW = 3;
}

?>