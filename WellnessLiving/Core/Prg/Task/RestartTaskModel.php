<?php

namespace WellnessLiving\Core\Prg\Task;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Restart a task set.
 *
 * @method WlModelRequest post() Restart tasks.
 */
class RestartTaskModel extends WlModelAbstract
{
  /**
   * @post post
   * @var string[]
   */
  public $a_task = [];

  /**
   * @post result
   * @var array
   */
  public $a_task_fail = [];

  /**
   * @post result
   * @var array
   */
  public $a_task_restarted = [];
}

?>