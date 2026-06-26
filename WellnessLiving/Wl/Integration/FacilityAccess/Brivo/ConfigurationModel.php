<?php

namespace WellnessLiving\Wl\Integration\FacilityAccess\Brivo;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API point provides business Brivo integration state information.
 *
 * @method WlModelRequest get() Returns Facility Access configuration set up by business.
 */
class ConfigurationModel extends WlModelAbstract
{
  /**
   * Represents if Brivo integration is enabled, and business has configured Facility Access.
   *
   * @get result
   * @var bool
   */
  public $is_brivo_enabled = false;

  /**
   * Represents if Brivo feature of users invitation is enabled. Depends on {@link ConfigurationModel::$is_brivo_enabled} too.
   *
   * @get result
   * @var bool
   */
  public $is_brivo_invitation_enabled = false;

  /**
   * Business to get information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>