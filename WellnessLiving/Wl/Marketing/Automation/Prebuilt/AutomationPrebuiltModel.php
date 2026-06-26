<?php

namespace WellnessLiving\Wl\Marketing\Automation\Prebuilt;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for getting prebuilt automation data for the business.
 * Prebuilt automation is the one that is not created by the business, but provided by Wl as a template.
 *
 * @method WlModelRequest get() Gets automation data.
 */
class AutomationPrebuiltModel extends WlModelAbstract
{
  /**
   * Automation data.
   *
   * @get result
   * @var array
   */
  public $a_automation = [];

  /**
   * Whether there is an error.
   *
   * @get result
   * @var bool
   */
  public $has_error = false;

  /**
   * Whether to get original automation data without Isaac template generation.
   * If `true`, the API will return original automation data without Isaac template generation.
   * If `false`, the API will return automation data with Isaac template generation, if the pre-built automation is
   * marked as using Isaac.
   *
   * @get get
   * @var bool
   */
  public $is_original = true;

  /**
   * Call to action data in JSON format.
   *
   * @get get
   * @var string|null
   */
  public $json_action = null;

  /**
   * Automation key.
   *
   * @get get
   * @var string
   */
  public $k_automation = '';

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>