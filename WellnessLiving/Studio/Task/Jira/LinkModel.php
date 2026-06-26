<?php

namespace WellnessLiving\Studio\Task\Jira;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages linking jira task to studio task.
 *
 * Adds or removes link to jira task on studio task.
 *
 * @method WlModelRequest post()
 */
class LinkModel extends WlModelAbstract
{
  /**
   * List of statuses current jira task can be transferred to.
   *
   * @post result
   * @var array
   */
  public $a_status_list;

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
   * <tt>null</tt> if adding new link.
   *
   * @post post,result
   * @var string|null
   */
  public $k_studio_task_jira;

  /**
   * @inheritDoc
   * @post post,result
   * @var string|null
   */
  public $text_jira_key;

  /**
   * Status of the task on jira.
   *
   * @post result
   * @var string
   */
  public $text_jira_status;

  /**
   * Title of the task on jira.
   *
   * @post result
   * @var string
   */
  public $text_jira_title;

  /**
   * Name of the task type on Jira.
   *
   * @post result
   * @var string
   */
  public $text_type_name;

  /**
   * Url link to the task on jira.
   *
   * @post result
   * @var string
   */
  public $url_jira;

  /**
   * Url to the icon of the task type on jira.
   *
   * @post result
   * @var string
   */
  public $url_type_icon;
}

?>