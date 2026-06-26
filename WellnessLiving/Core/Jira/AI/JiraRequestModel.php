<?php

namespace WellnessLiving\Core\Jira\AI;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Handles API requests related to Jira agent interactions.
 *
 * @method WlModelRequest post()
 */
class JiraRequestModel extends WlModelAbstract
{
  /**
   * The email address associated with the request
   *
   * @field email
   * @post post
   * @var string
   */
  public $s_email = '';

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