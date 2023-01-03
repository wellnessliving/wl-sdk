<?php

namespace WellnessLiving\Wl\Pay\Address;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a client’s physical address from their profile.
 */
class ProfileModel extends WlModelAbstract
{
  /**
   * The business ID number used internally by WellnessLiving.
   *
   * <tt>null</tt> if we are in the system business.
   *
   * @get get
   * @var string|null
   */
  public $k_business = '';

  /**
   * The country ID, this is different than the values used in LocaleSid.
   *
   * <tt>null</tt> if not yet loaded.
   *
   * @get result
   * @var string|null
   */
  public $k_geo_country = null;

  /**
   * The region ID.
   *
   * <tt>null</tt> if not yet loaded.
   *
   * @get result
   * @var string|null
   */
  public $k_geo_region = null;

  /**
   * The name of the city in the address.
   *
   * <tt>null</tt> if city is yet loaded.
   *
   * @get result
   * @var string|null
   */
  public $s_city = null;

  /**
   * The client’s name, as listed in their address.
   *
   * <tt>null</tt> if not yet loaded.
   *
   * @get result
   * @var string|null
   */
  public $s_name = null;

  /**
   * The client’s phone number.
   *
   * <tt>null</tt> if not yet loaded.
   *
   * @get result
   * @var string|null
   */
  public $s_phone = null;

  /**
   * The client’s postal code.
   *
   * <tt>null</tt> if not yet loaded.
   *
   * @get result
   * @var string|null
   */
  public $s_postal = null;

  /**
   * The first line of the client’s address.
   *
   * <tt>null</tt> if not yet loaded.
   *
   * @get result
   * @var string|null
   */
  public $s_street1 = null;

  /**
   * The second line of the client’s address.
   *
   * <tt>null</tt> if not yet loaded.
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