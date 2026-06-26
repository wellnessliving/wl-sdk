<?php

namespace WellnessLiving\Studio\Task\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about jira task.
 *
 * @method WlModelRequest get() Retrieves information about issue from jira.
 */
class RetrieveJiraModel extends WlModelAbstract
{
  /**
   * Key of the personnel in studio to assign task to.
   *
   * @get result
   * @var string
   */
  public $k_personnel_assignee;

  /**
   * Sprint key.
   *
   * @get result
   * @var string
   */
  public $k_sprint;

  /**
   * Description of the task on jira.
   *
   * @get result
   * @var string
   */
  public $text_jira_description;

  /**
   * Key of the jira task.
   *
   * @get get,result
   * @var string
   */
  public $text_jira_key;

  /**
   * Title of the task on jira.
   *
   * @get result
   * @var string
   */
  public $text_jira_title;

  /**
   * Url link to the task on jira.
   *
   * @get result
   * @var string
   */
  public $url_jira;
}

?>