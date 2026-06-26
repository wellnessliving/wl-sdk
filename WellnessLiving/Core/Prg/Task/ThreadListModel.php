<?php

namespace WellnessLiving\Core\Prg\Task;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 *  Get data about task threads.
 *
 * @method WlModelRequest get() Get data about task threads.
 */
class ThreadListModel extends WlModelAbstract
{
  /**
   * List of servers. One element contains: 
   *
   * <dl>
   *   <dt>string `dtu_update`</dt>
   *   <dd>Time of last data update.</dd>
   * 
   *   <dt>string `ip_private`</dt>
   *   <dd>Private (local) IP.</dd>
   * 
   *   <dt>string `ip_public`</dt>
   *   <dd>Public IP.</dd>
   * 
   *   <dt>string `s_tag`</dt>
   *   <dd>EC2 instance tag name.</dd>
   * 
   *   <dt>string `text_update`</dt>
   *   <dd>Elapsed time since the last data update.</dd>
   * </dl>
   * @get result
   * @var string[][]
   */
  public $a_server;

  /**
   * List of errors on servers.
   * The key is the private IP address and the value is the error message.
   *
   * @get result
   * @var array
   */
  public $a_server_error;

  /**
   * List of threads. One element contains:
   *
   * <dl>
   *   <dt>bool `can_remove`</dt>
   *   <dd>Is it possible to remove a thread. `true` is the thread can be remove, `false` otherwise.</dd>
   * 
   *   <dt>string `dtu_active`</dt>
   *   <dd>When the last action was performed by this thread.</dd>
   * 
   *   <dt>string `dtu_create`</dt>
   *   <dd>When this thread has started.</dd>
   * 
   *   <dt>string `dtu_current`</dt>
   *   <dd>When method that is being executed now has started.</dd>
   * 
   *   <dt>int `i_sort`</dt>
   *   <dd>Sort number.</dd>
   * 
   *   <dt>int `id_task_status`</dt>
   *   <dd>Status of the thread.</dd>
   * 
   *   <dt>bool `is_remove`</dt>
   *   <dd>Whether the thread has been deleted. `true` is the thread is removed, `false` otherwise.</dd>
   * 
   *   <dt>string `ip_server`</dt>
   *   <dd>IP address (local) of the server where the task thread takes place.</dd>
   * 
   *   <dt>string `s_method`</dt>
   *   <dd>Name of a method that is being executed now.</dd>
   * 
   *   <dt>string `s_task_status`</dt>
   *   <dd>Title of the thread status.</dd>
   * 
   *   <dt>string `s_thread`</dt>
   *   <dd>Key of this thread.</dd>
   * 
   *   <dt>string `s_thread_short`</dt>
   *   <dd>Short key of this thread.</dd>
   * 
   *   <dt>string `text_active`</dt>
   *   <dd>When the last action was performed by this thread.</dd>
   * 
   *   <dt>string `text_create`</dt>
   *
   * 
   *   <dt>string `text_current`</dt>
   *   <dd>When method that is being executed now has started.</dd>
   * 
   *   <dt>string `text_info`</dt>
   *   <dd>
   *
   *   </dd>
   * 
   *   <dt>string `text_remove`</dt>
   *   <dd>The comment that was set when this task thread is removed.</dd>
   * </dl>
   * @get result
   * @var string[][]
   */
  public $a_thread;

  /**
   * Determines where to get information from.
   * `true` - from a cache (default), `no` - receiving current data from servers.
   *
   * @get get
   * @var bool
   */
  public $is_cache = true;
}

?>