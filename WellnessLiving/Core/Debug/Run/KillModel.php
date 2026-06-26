<?php

namespace WellnessLiving\Core\Debug\Run;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Sends signal to exit to specified processes.
 *
 * @method WlModelRequest delete() Sends signal to exit to specified processes.
 */
class KillModel extends WlModelAbstract
{
  /**
   * A list of process IDs to kill.
   *
   * @delete get
   * @var string[]
   */
  public $a_id = [];
}

?>