<?php

namespace WellnessLiving\Studio\Task\Jira;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Performs transition of the task from current status to given.
 *
 * @method WlModelRequest post()
 */
class TransitionModel extends WlModelAbstract
{
  /**
   * Key of the studio task.
   *
   * @post get
   * @var string
   */
  public $k_studio_task;

  /**
   * Key of the jira task connection.
   *
   * @post post
   * @var string
   */
  public $k_studio_task_jira;

  /**
   * Key of the jira task.
   *
   * @post post
   * @var string|null
   */
  public $text_jira_key = null;

  /**
   * ID of the status to transit jira task to.
   *
   * @post post
   * @var string|null
   */
  public $text_jira_status_id;
}

?>