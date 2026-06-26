<?php

namespace WellnessLiving\Wl\Marketing\Automation;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for detecting clients who already meet the trigger condition at the time of automation activation.
 *
 * Returns a number of users who would be retroactively eligible for the automation
 * based on the provided trigger settings, so the UI can warn about them before activation.
 *
 * @method WlModelRequest post()
 */
class AutomationRetroactiveModel extends WlModelAbstract
{
  /**
   * Trigger settings.
   *
   * @post post
   * @var array
   */
  public $a_step_trigger = [];

  /**
   * Number of users who already meet the trigger condition at activation time.
   *
   * @post result
   * @var int
   */
  public $i_user = 0;

  /**
   * ID of the trigger of the automation.
   *
   * @post post
   * @var int
   */
  public $id_trigger = 0;

  /**
   * Automation key.
   * `null` if the automation does not exist yet.
   *
   * @post post
   * @var string|null
   */
  public $k_automation = null;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * URL to the report with users who meet the trigger condition at activation time.
   *
   * @post result
   * @var string
   */
  public $url_report = '';
}

?>