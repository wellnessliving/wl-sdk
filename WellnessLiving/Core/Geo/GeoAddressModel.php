<?php

namespace WellnessLiving\Core\Geo;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Get key of country, key of region and name of city from geo city key.
 *
 * @method WlModelRequest get() Gets name of city and keys of GEO country and region.
 */
class GeoAddressModel extends WlModelAbstract
{
  /**
   * Geo city key.
   *
   * @get get
   * @var string|null
   */
  public $k_geo_city;

  /**
   * Geo country key.
   *
   * @get result
   * @var string|null
   */
  public $k_geo_country;

  /**
   * Geo region key.
   *
   * @get result
   * @var string|null
   */
  public $k_geo_region;

  /**
   * Name of the city.
   *
   * @get result
   * @var string|null
   */
  public $text_city;
}

?>