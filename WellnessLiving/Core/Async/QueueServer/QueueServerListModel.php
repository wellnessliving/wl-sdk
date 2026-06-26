<?php

namespace WellnessLiving\Core\Async\QueueServer;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns a list of queue servers.
 *
 * @method WlModelRequest get() Returns a list of queue servers.
 */
class QueueServerListModel extends WlModelAbstract
{
  /**
   * A list of queue servers.
   *
   * <dl>
   *   <dt>int `i_count`</dt>
   *   <dd>Number of times this status was approved.</dd>
   * 
   *   <dt>int `id_status`</dt>
   *   <dd>Status of the queue server.
   *</dd>
   * 
   *   <dt>string `ip`</dt>
   *   <dd>IP address of the server.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_queue;

  /**
   * Name of a provider which information should be shown.
   *
   * @get get
   * @var string
   */
  public $s_provider;
}

?>