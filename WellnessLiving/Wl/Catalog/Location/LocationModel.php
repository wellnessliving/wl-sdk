<?php

namespace WellnessLiving\Wl\Catalog\Location;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves a list of information about locations in the catalog.
 *
 * @method WlModelRequest get() Retrieves a list of information about locations in the catalog.
 */
class LocationModel extends WlModelAbstract
{
  /**
   * A list of information about locations.
   *
   * @get result
   * @var array
   */
  public $a_location;

  /**
   * ID of the business.
   *
   * @get get
   * @var int
   */
  public $k_business = 0;

  /**
   * Location key that was selected by the client last time.
   *
   * @get result
   * @var string
   */
  public $k_location_active;

  /**
   * Home location ID.
   *
   * @get result
   * @var string
   */
  public $k_location_home;

  /**
   * Random location ID for the business.
   *
   * @get result
   * @var string
   */
  public $k_location_random;
}

?>