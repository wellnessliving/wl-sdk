<?php

namespace WellnessLiving\Wl\Location;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint to check if the user has the privilege to add locations.
 *
 * @method WlModelRequest get() Checks if the user has the privilege to add locations.
 */
class LocationAddPermissionModel extends WlModelAbstract
{
  /**
   * `true` if the user has the privilege to add locations, `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $has_add_permission = false;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>