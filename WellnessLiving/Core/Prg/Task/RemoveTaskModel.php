<?php

namespace WellnessLiving\Core\Prg\Task;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Delete a task set.
 *
 * @method WlModelRequest post() Remove tasks.
 */
class RemoveTaskModel extends WlModelAbstract
{
  /**
   * @post post
   * @var string[]
   */
  public $a_task = [];
}

?>