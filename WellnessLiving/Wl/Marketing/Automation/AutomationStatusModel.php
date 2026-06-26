<?php

namespace WellnessLiving\Wl\Marketing\Automation;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages automation status data.
 *
 * @method WlModelRequest post() Activate or deactivate an automation.
 */
class AutomationStatusModel extends WlModelAbstract
{
  /**
   * `true` if automation is active, `false` otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_active = false;

  /**
   * Automation key.
   *
   * @post post
   * @var string
   */
  public $k_automation = '';

  /**
   * Business key.
   * `null` to use the system business (prebuilt automation has `null` business key).
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;
}

?>