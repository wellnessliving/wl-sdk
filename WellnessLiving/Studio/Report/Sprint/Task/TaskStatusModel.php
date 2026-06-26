<?php

namespace WellnessLiving\Studio\Report\Sprint\Task;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for change status of the task in report "Sprint -> Task by sprints".
 *
 * @method WlModelRequest post()
 */
class TaskStatusModel extends WlModelAbstract
{
  /**
   * Color ID.
   *
   * @post post
   * @var int
   */
  public $id_color = 0;

  /**
   * Task key.
   *
   * @post post
   * @var string
   */
  public $k_task = '';
}

?>