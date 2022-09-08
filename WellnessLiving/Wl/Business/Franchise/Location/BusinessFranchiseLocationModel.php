<?php

namespace WellnessLiving\Wl\Business\Franchise\Location;

use WellnessLiving\WlModelAbstract;

/**
 * Manages franchisor locations.
 */
class BusinessFranchiseLocationModel extends WlModelAbstract
{
  /**
   * The city list.
   *
   * @get result
   * @var array|null
   */
  public $a_city_list = null;

  /**
   * The country list.
   *
   * @get result
   * @var array|null
   */
  public $a_country_list = null;

  /**
   * The location list.
   *
   * @get result
   * @var array|null
   */
  public $a_location_list = null;

  /**
   * The region list.
   *
   * @get result
   * @var array|null
   */
  public $a_region_list = null;

  /**
   * The state list.
   *
   * @get result
   * @var array|null
   */
  public $a_state_list = null;

  /**
   * Determines which locations should be returned.
   *
   * One of the {@link \WellnessLiving\Wl\Business\Franchise\Location\BusinessFranchiseLocationFormSid} constants.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $id_business_franchise_location = null;

  /**
   * The business key.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;
}

?>