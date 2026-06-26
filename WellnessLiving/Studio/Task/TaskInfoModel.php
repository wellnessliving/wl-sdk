<?php

namespace WellnessLiving\Studio\Task;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about studio task.
 *
 * @method WlModelRequest get() Retrieves information about studio task.
 */
class TaskInfoModel extends WlModelAbstract
{
  /**
   * Key of the studio sprint. Primary key in {@link \Studio\Sprint\SprintSql} table,
   * `null` - if not set.
   *
   * @get result
   * @var string|null
   */
  public $k_studio_sprint = null;

  /**
   * Key of the studio task.
   *
   * @get get
   * @var string
   */
  public $k_studio_task;

  /**
   * Key of the parent jira task connected to studio task.
   *
   * @get result
   * @var string
   */
  public $text_jira_key_parent;
}

?>