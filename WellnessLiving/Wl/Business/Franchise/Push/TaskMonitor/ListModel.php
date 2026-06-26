<?php

namespace WellnessLiving\Wl\Business\Franchise\Push\TaskMonitor;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * An API to get franchise push task queue data.
 *
 * @method WlModelRequest get()
 */
class ListModel extends WlModelAbstract
{
  /**
   * The list of tasks.
   *
   * @get result
   * @var array[]
   */
  public $a_queue;
}

?>