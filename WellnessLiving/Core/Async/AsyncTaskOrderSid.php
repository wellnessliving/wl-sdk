<?php

namespace WellnessLiving\Core\Async;

/**
 * Allows to set order in which tasks are registered in the queue.
 *
 * Order of tasks with the same value of {@link \Core\Async\CoreAsyncAbstract::ORDER} is random
 *   (may be different in different workers).
 *
 * Order of tasks influence order in which tasks are registered in Gearman.
 * Tasks with less value of the order are registered first.
 * Tasks registered first are selected before tasks registered after that.
 *
 * Order of tasks are not Gearman's priorities. See link to the Gearman issue for explanation why Gearman's priorities
 * can not be used for our purposes (we need that service tasks be prioritized over all other tasks).
 *
 * @link https://github.com/gearman/gearmand/issues/173
 * @see AsyncTaskPrioritySid
 */
abstract class AsyncTaskOrderSid
{
  /**
   * Order for background (detached) tasks.
   */
  const DETACHED = 4;

  /**
   * Order for foreground tasks.
   *
   * Try to avoid setting this order to detached tasks.
   * Because users wait for foreground tasks, if you set foreground order to detached tasks and there will be large
   * number of detached tasks in the queue, this may lead to that users will wait for completion of detached tasks.
   */
  const FOREGROUND = 3;

  /**
   * Order for generic service tasks.
   *
   * Service tasks are tasks that allow to maintain workers.
   *
   * You should avoid setting this order for any user-level task.
   * Consider there is a service task that allows to clean up task queue by quick skipping of all tasks of specified
   * class. If priority of the task that you want to cleanup is high, such service task will not be executed before the
   * task that you intend to skip which leads to that it becomes impossible to cleanup task queue from tasks of high
   * priority.
   */
  const SERVICE_GENERIC = 2;

  /**
   * Order for service tasks that should be executed before any other service task.
   *
   * Example tasks are ping and a task to skip other tasks (since it should allow to also skip other service tasks).
   */
  const SERVICE_HIGH = 1;

  /**
   * A service task that should be executed when there are no other tasks in the queue.
   *
   * This should be the least possible order.
   *
   * Example task is a task to stop skipping of other tasks.
   * This should be executed only when all normal tasks are skipped.
   */
  const SERVICE_LAST = 5;
}

?>