<?php

namespace WellnessLiving\Core\Async\QueueServer;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns complete list of all workers in the system.
 *
 * @method WlModelRequest get() Returns complete list of all workers in the system.
 */
class StatWorkerModel extends WlModelAbstract
{
  /**
   * A list of workers.
   *
   * <dl>
   *   <dt>string[] `a_function`</dt>
   *   <dd>A list of functions that this worker listens to.</dd>
   * 
   *   <dt>int `id_region`</dt>
   *   <dd>
   *     Datacenter region ID to which the worker belongs.
   *   Example: If the full name is `prod#monolith#2/10.2.164.70/3`, the region is `2`.
   *   `0` if there is no division into regions.
   *   </dd>
   * 
   *   <dt>string `ip_queue`</dt>
   *   <dd>IP address of the queue server that has provided information about this worker.</dd>
   * 
   *   <dt>string `ip_worker`</dt>
   *   <dd>IP address of the worker server.</dd>
   * 
   *   <dt>string `s_id`</dt>
   *   <dd>
   *     ID of the worker. This ID uniquely identifies a running thread within specified queue server.
   *   Example: `prod#monolith#2/10.2.164.70/3`.
   *   </dd>
   * 
   *   <dt>string `s_id_short`</dt>
   *   <dd>
   *     ID of the worker without an scope.
   *   Example: If the full name is `prod#monolith#2/10.2.164.70/3`, the short name is `10.2.164.70/3`.
   *   Empty string if the full name does not contain a scope.
   *   </dd>
   * 
   *   <dt>string `s_microservice`</dt>
   *   <dd>
   *
   *   Example: If the full name is `prod#monolith#2/10.2.164.70/3`, the microservice is `monolith`.
   *   Empty string if the full name does not contain a microservice.
   *   </dd>
   * 
   *   <dt>string `s_scope`</dt>
   *   <dd>
   *     Async task scope.
   *   Example: If the full name is `prod#monolith#2/10.2.164.70/3`, the scope is `prod#monolith#2/`.
   *   Empty string if the full name does not contain a scope.
   *   </dd>
   * 
   *   <dt>string `s_world`</dt>
   *   <dd>
   *     World to which worker belongs.
   *   Example: If the full name is `prod#monolith#2/10.2.164.70/3`, the world is `prod`.
   *   Empty string if the full name does not contain a world.
   *   </dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_worker;

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