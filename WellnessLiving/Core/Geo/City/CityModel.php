<?php

namespace WellnessLiving\Core\Geo\City;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for city management.
 *
 * @method WlModelRequest delete()
 */
class CityModel extends WlModelAbstract
{
  /**
   * `true` if city was removed,
   * `false` if there is no permission to remove city in this environment.
   *
   * @delete result
   * @var bool`
   */
  public $is_removed = false;

  /**
   * Key of the city.
   *
   * @delete get
   * @var string
   */
  public $k_city = '';

  /**
   * Key of the city to use instead of removed city. Is used only, when you remove some record.
   *
   * @delete get
   * @var string
   */
  public $k_city_replace = '';
}

?>