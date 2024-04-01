<?php

namespace WellnessLiving\Wl\Pay\Address;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a client’s physical address from their profile.
 */
class ProfileModel extends WlModelAbstract
{
  /**
   * The business key number used internally by WellnessLiving.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The country key.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $k_geo_country;

  /**
   * The region ID.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $k_geo_region;

  /**
   * The name of the city in the address.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_city;

  /**
   * The client name as listed in their address.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_name;

  /**
   * The client phone number.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_phone;

  /**
   * The client postal or zip code.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_postal;

  /**
   * The first line of the client address.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_street1;

  /**
   * The second line of the client address.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_street2;

  /**
   * The key of the user whose data should be retrieved.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>