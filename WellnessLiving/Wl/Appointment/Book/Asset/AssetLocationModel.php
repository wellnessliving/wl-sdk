<?php

namespace WellnessLiving\Wl\Appointment\Book\Asset;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about assets location.
 *
 * @method WlModelRequest get() Gets location of asset.
 */
class AssetLocationModel extends WlModelAbstract
{
  /**
   * Location key.
   *
   * @get result
   * @var string
   */
  public $k_location;

  /**
   * Resource key.
   *
   * @get get
   * @var string
   */
  public $k_resource;
}

?>