<?php

namespace WellnessLiving\Core\Async;

/**
 * Priorities of the individual tasks within the same class of tasks.
 *
 * In Gearman, priorities only influence order of tasks within individual task classes.
 * Priority does not influence order in which tasks of different classes are executed.
 *
 * @link https://github.com/gearman/gearmand/issues/173
 * @see AsyncTaskOrderSid
 */
abstract class AsyncTaskPrioritySid
{
  /**
   * High priority.
   *
   * If there are several tasks with the same name in the queue, tasks with higher priority will be executed first.
   */
  const HIGH = 3;

  /**
   * Low priority.
   *
   * If there are several tasks with the same name in the queue, tasks with higher priority will be executed first.
   */
  const LOW = 1;

  /**
   * Normal priority.
   *
   * This is the default value.
   */
  const MEDIUM = 2;
}

?>