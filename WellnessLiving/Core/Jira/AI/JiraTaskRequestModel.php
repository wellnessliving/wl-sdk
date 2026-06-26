<?php

namespace WellnessLiving\Core\Jira\AI;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Jira task request API model.
 *
 * @method WlModelRequest post()
 */
class JiraTaskRequestModel extends WlModelAbstract
{
  /**
   * The endpoint for Jira task requests.
   *
   * @field key
   * @post post
   * @var string
   */
  public $s_key = '';

  /**
   * The response message generated
   *
   * @field message
   * @post result
   * @var string
   */
  public $text_message = '';
}

?>