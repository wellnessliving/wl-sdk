<?php

namespace WellnessLiving\Core\Async\QueueServer;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns complete list of all functions in the system.
 *
 * @method WlModelRequest get() Returns complete list of all functions in the system.
 */
class StatFunctionModel extends WlModelAbstract
{
  /**
   * A list of functions.
   *
   * <dl>
   *   <dt>int `i_queue`</dt>
   *   <dd>Number of tasks in the queue.</dd>
   * 
   *   <dt>int `i_run`</dt>
   *   <dd>Number of tasks currently running.</dd>
   * 
   *   <dt>int `i_worker`</dt>
   *   <dd>Number of workers that listen for this function.</dd>
   * 
   *   <dt>string `ip_queue`</dt>
   *   <dd>IP address of the queue server that has provided information about this function.</dd>
   * 
   *   <dt>string `s_class`</dt>
   *   <dd>Class name of the function.</dd>
   * 
   *   <dt>string|null `s_class_type`</dt>
   *   <dd>
   *     Type of the async function.
   *  `null` if type could not be determined.
   *   </dd>
   * 
   *   <dt>string `s_function`</dt>
   *   <dd>
   *     Fully qualified name of the function (as registered in Gearman).
   *  Example: `prod#monolith#2/127.1.1.0/1/643`.
   *   </dd>
   * 
   *   <dt>string `s_function_short`</dt>
   *   <dd>
   *     Name of the function without a scope.
   *  Example: If the full name is `prod#monolith#2/127.1.1.0/1/643`, the short name is `127.1.1.0/1/643`.
   *   </dd>
   * 
   *   <dt>string `s_scope`</dt>
   *   <dd>
   *     Async function scope.
   *  Example: If the full name is `prod#monolith#2/127.1.1.0/1/643`, the scope is `prod#monolith#2/`.
   *   </dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_function;

  /**
   * Whether show all scopes.
   *
   * `true` - all scopes are shown, and scope search is performed by string.
   * `false` - only the current scope is shown.
   *
   * @get get
   * @var bool
   */
  public $is_all_scopes = false;

  /**
   * Name of a provider which information should be shown.
   *
   * @get get
   * @var string
   */
  public $s_provider;

  /**
   * Search substring for scopes.
   * Empty string - without filtration.
   *
   * @get get
   * @var string
   */
  public $s_scope_search = '';
}

?>