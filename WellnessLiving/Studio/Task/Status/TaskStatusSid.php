<?php

namespace WellnessLiving\Studio\Task\Status;

/**
 * Special states of the task, which can be set for task status in a param string.
 */
class TaskStatusSid
{
  /**
   * Task is in progress in this status.
   */
  const PROGRESS = 1;

  /**
   * Task is in the review in this status.
   */
  const REVIEW = 2;
}

?>