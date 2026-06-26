<?php

namespace WellnessLiving\Wl\Business\Phone;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages message settings.
 *
 * @method WlModelRequest post() Updates SMS settings to define whether individual sms status is enabled or disabled for this business.
 */
class SettingsModel extends WlModelAbstract
{
  /**
   * Is individual read.
   *
   * @post get
   * @var bool
   */
  public $is_individual_read = false;

  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '';
}

?>