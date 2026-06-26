<?php

namespace WellnessLiving\Studio\Task\Jira;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Synchronises state of the task on studio with state of the task on jira.
 * This API called by foreign system when jira task update triggered.
 *
 * @method WlModelRequest post()
 */
class SyncModel extends WlModelAbstract
{
  /**
   * @inheritDoc
   * @post get
   * @var string|null
   */
  public $text_jira_key;

  /**
   * Key of the destination jira task.
   * * Specified when link changed.
   * * `null` if task changed.
   *
   * @post get
   * @var string|null
   */
  public $text_jira_key_destination;

  /**
   * Key of the source jira task.
   * Specified when link changed.
   * `null` if task changed.
   *
   * @post get
   * @var string|null
   */
  public $text_jira_key_source;
}

?>