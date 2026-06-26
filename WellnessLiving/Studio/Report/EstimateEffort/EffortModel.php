<?php

namespace WellnessLiving\Studio\Report\EstimateEffort;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for loading effort estimation data from Jira tasks.
 *
 * @method WlModelRequest post()
 */
class EffortModel extends WlModelAbstract
{
  /**
   * Result of the effort estimation.
   *
   * @post result
   * @var array
   */
  public $a_result = [];

  /**
   * List of Jira keys to load.
   *
   * @post post
   * @var string
   */
  public $text_jira_key = '';
}

?>