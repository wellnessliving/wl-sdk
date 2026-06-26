<?php

namespace WellnessLiving\Wl\Schedule\Config;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manage actions of sms history report.
 *
 * @method WlModelRequest post() This method is called to process POST query.
 */
class ConfigDefaultModel extends WlModelAbstract
{
  /**
   * ID of the predefined set of filters on the schedule.
   *
   * @post post
   * @var bool
   */
  public $is_default;

  /**
   * ID of the predefined set of filters on the schedule.
   *
   * @post get
   * @var string
   */
  public $k_schedule_config;
}

?>