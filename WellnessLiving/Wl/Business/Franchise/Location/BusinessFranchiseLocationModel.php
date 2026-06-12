<?php

namespace WellnessLiving\Wl\Business\Franchise\Location;

use WellnessLiving\WlModelAbstract;

/**
 * Manages franchisor locations.
 */
class BusinessFranchiseLocationModel extends WlModelAbstract
{
  /**
   * The city list. Each element has next structure:
   *
   * @get result
   * @var array[]
   */
  public $a_city_list;

  /**
   * The country list. Each element has next structure:
   *
   * @get result
   * @var array[]
   */
  public $a_country_list;

  /**
   * The location list. Each element has the next structure:
   *
   * @get result
   * @var array[]
   */
  public $a_location_list;

  /**
   * The region list. Each element has the next structure:
   *
   * @get result
   * @var array[]
   */
  public $a_region_list;

  /**
   * The state list. Each element has the next structure:
   *
   * @get result
   * @var array[]
   */
  public $a_state_list;

  /**
   * Determines which locations should be returned.
   *
   * One of the {@link BusinessFranchiseLocationSid} constants.
   *
   * If `null`, {@link BusinessFranchiseLocationSid::ALL} is used.
   *
   * @get get
   * @var int
   */
  public $id_business_franchise_location;

  /**
   * Determines whether to include churned/removed locations.
   *
   * If `true`, all locations are listed (regardless of their status).
   *
   * @get get
   * @var bool
   */
  public $is_include_churn = false;

  /**
   * Determines whether to include locations marked to not be displayed on franchisor website.
   *
   * If `true`, all locations are listed (regardless of this setting).
   *
   * @get get
   * @var bool
   */
  public $is_include_non_api = false;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>