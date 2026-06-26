<?php

namespace WellnessLiving\Core\Geo;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to get current geo position.
 *
 * @method WlModelRequest get() Gets current geo position.
 */
class GeoPositionModel extends WlModelAbstract
{
  /**
   * Latitude coordinate.
   *
   * @get result
   * @var float
   */
  public $f_latitude;

  /**
   * Longitude coordinate.
   *
   * @get result
   * @var float
   */
  public $f_longitude;

  /**
   * @get result
   * @var string
   */
  public $k_city;
}

?>