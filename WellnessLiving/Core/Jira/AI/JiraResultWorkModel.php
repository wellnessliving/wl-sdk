<?php

namespace WellnessLiving\Core\Jira\AI;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Handles API requests related to Jira result work interactions.
 *
 * @method WlModelRequest post()
 */
class JiraResultWorkModel extends WlModelAbstract
{
  /**
   * The starting data for the Jira result work.
   *
   * @field date_resolved
   * @post post
   * @var string
   */
  public $s_date_resolved = '2020-01-01';

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