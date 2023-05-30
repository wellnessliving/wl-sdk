<?php

namespace WellnessLiving\Wl\Pay\Address;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves a client’s physical address from their profile.
 */
class ProfileModel extends WlModelAbstract
{
  /**
   * The business ID number used internally by WellnessLiving.
   *
   * This will be `null` if you're in the system business.
   *
   * @get get
   * @var string|null
   */
  public $k_business = '';

  /**
   * The country ID. This is different from the values used in LocaleSid.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $k_geo_country = null;

  /**
   * The region ID.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $k_geo_region = null;

  /**
   * The name of the city in the address.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_city = null;

  /**
   * The client’s name as listed in their address.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_name = null;

  /**
   * The client’s phone number.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_phone = null;

  /**
   * The client’s postal or zip code.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_postal = null;

  /**
   * The first line of the client’s address.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_street1 = null;

  /**
   * The second line of the client’s address.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_street2 = null;

  /**
   * The key of the user whose data should be retrieved.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>