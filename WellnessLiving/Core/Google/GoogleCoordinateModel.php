<?php

namespace WellnessLiving\Core\Google;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to get geo position from address.
 *
 * @method WlModelRequest get() Gets geo coordinates from address using Google Maps.
 */
class GoogleCoordinateModel extends WlModelAbstract
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
   * Address to get geo position for.
   *
   * @get get
   * @var string
   */
  public $s_address = '';
}

?>