<?php

namespace WellnessLiving\Wl\Pay\Address;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves default payment address data that is retrieved from user profile.
 */
class ProfileModel extends WlModelAbstract
{
  /**
   * The business identifier in which editing is performed.
   *
   * <tt>null</tt> if we are in the system business.
   *
   * @get get
   * @var string|null
   */
  public $k_business = '';

  /**
   * ID of GEO country.
   *
   * <tt>null</tt> if not selected.
   *
   * @get result
   * @var string|null
   */
  public $k_geo_country = null;

  /**
   * ID of GEO region.
   *
   * <tt>null</tt> if not selected.
   *
   * @get result
   * @var string|null
   */
  public $k_geo_region = null;

  /**
   * Name of the city.
   *
   * <tt>null</tt> if city is not selected.
   *
   * @get result
   * @var string|null
   */
  public $s_city = null;

  /**
   * User name.
   *
   * <tt>null</tt> if not entered.
   *
   * @get result
   * @var string|null
   */
  public $s_name = null;

  /**
   * Phone number.
   *
   * <tt>null</tt> if not entered.
   *
   * @get result
   * @var string|null
   */
  public $s_phone = null;

  /**
   * Postal or ZIP code.
   *
   * <tt>null</tt> if not entered.
   *
   * @get result
   * @var string|null
   */
  public $s_postal = null;

  /**
   * Street address line 1.
   *
   * <tt>null</tt> if not entered.
   *
   * @get result
   * @var string|null
   */
  public $s_street1 = null;

  /**
   * Street address line 2.
   *
   * <tt>null</tt> if not entered.
   *
   * @get result
   * @var string|null
   */
  public $s_street2 = null;

  /**
   * ID of a user whose data should be retrieved.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>