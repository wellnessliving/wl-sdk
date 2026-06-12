<?php

namespace WellnessLiving\Wl\Integration\Curves;

use WellnessLiving\WlModelAbstract;

/**
 * Gets information for enterprise locations.
 */
class CurvesFranchiseLocationModel extends WlModelAbstract
{
  /**
   * The city list. Each element has next structure:
   *
   * @get result
   * @var array[]
   */
  public $a_city_list = null;

  /**
   * The country list. Each element has next structure:
   *
   * @get result
   * @var array[]
   */
  public $a_country_list = null;

  /**
   * The location list. Each element has the next structure:
   *
   * @get result
   * @var array[]
   */
  public $a_location_list = null;

  /**
   * The region list. Each element has the next structure:
   *
   * @get result
   * @var array[]
   */
  public $a_region_list = null;

  /**
   * The state list. Each element has the next structure:
   *
   * @get result
   * @var array[]
   */
  public $a_state_list = null;

  /**
   * Determines which locations should be returned.
   *
   * @get get
   * @var int
   */
  public $id_business_franchise_location = null;

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
  public $k_business = null;
}

?>