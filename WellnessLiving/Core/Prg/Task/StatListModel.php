<?php

namespace WellnessLiving\Core\Prg\Task;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 *  Get data about task queue.
 *
 * @method WlModelRequest get() Get statistic data about task queue.
 */
class StatListModel extends WlModelAbstract
{
  /**
   * List of queue. One element contains:
   *
   * <dl>
   *   <dt>int `cid_task`</dt>
   *   <dd>CID of the task class.</dd>
   * 
   *   <dt>string|null `dtu_queue`</dt>
   *   <dd>Task start time. `null` for erroneous tasks.</dd>
   * 
   *   <dt>bool `is_active`</dt>
   *   <dd>Whether the task is currently running.
   * `true` if the task is currently running, `false` otherwise.</dd>
   * 
   *   <dt>bool `is_safe`</dt>
   *   <dd>
   *
   * `true` if tasks of this class require special attention when removing,
   * `false` if they can be removed safely.
   *   </dd>
   * 
   *   <dt>string `s_class`</dt>
   *   <dd>Class name.</dd>
   * 
   *   <dt>string `s_id`</dt>
   *   <dd>ID of the task.</dd>
   * 
   *   <dt>string `s_prefix`</dt>
   *   <dd>Task ID prefix. This can be a class name or an CID.</dd>
   * 
   *   <dt>string|null `s_queue`</dt>
   *   <dd>
   *     Time elapsed since the start of the task. Difference between <var>dtu_queue</var> field and current time
   *
   * `null` for erroneous tasks.
   *   </dd>
   * </dl>
   * @get result
   * @var string[][]
   */
  public $a_queue;

  /**
   * List of task queue statistic per class.
   *
   * This statistic includes all tasks that are due or erroneous tasks, while {@link QueueTrait::$a_queue} contains only
   * the {@link \Core\Prg\Task\QueueListApi::DISPLAYED_QUEUE} of the oldest tasks for the queue or
   *
   * One element contains:
   *
   * <dl>
   *   <dt>int `cid_task`</dt>
   *   <dd>CID of the task class.</dd>
   * 
   *   <dt>string|null `dtu_queue`</dt>
   *   <dd>The oldest tasks start time. `null` for erroneous tasks.</dd>
   * 
   *   <dt>int `i_active`</dt>
   *   <dd>The number of tasks that running at the moment.</dd>
   * 
   *   <dt>int `i_all`</dt>
   *   <dd>The number of tasks.</dd>
   * 
   *   <dt>string `s_class`</dt>
   *   <dd>Class name.</dd>
   * 
   *   <dt>string `s_prefix`</dt>
   *   <dd>Task ID prefix. This can be a class name or an CID.</dd>
   * 
   *   <dt>string `s_queue`</dt>
   *   <dd>
   *     Time elapsed since the oldest task started. Difference between `dtu_queue` field and current time
   *
   * `null` for erroneous tasks.
   *   </dd>
   * 
   *   <dt>string `text_active`</dt>
   *   <dd>
   *     The numbers of active tasks to check, the first number is the count of active processes,
   * the second number is the direct count of active tasks for a given class.
   *   </dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_queue_stat;

  /**
   * Whether queued or erroneous tasks must be returned.
   * 'false' - load of tasks in the queue, `true` - load of erroneous tasks.
   *
   * @get get
   * @var bool
   */
  public $is_erroneous = false;
}

?>