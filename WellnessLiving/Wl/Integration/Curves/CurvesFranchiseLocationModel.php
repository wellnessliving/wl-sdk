<?php

namespace WellnessLiving\Wl\Integration\Curves;

use WellnessLiving\WlModelAbstract;

/**
 * Gets information for franchisee locations.
 */
class CurvesFranchiseLocationModel extends WlModelAbstract
{
  /**
   * City list.
   *
   * @get result
   * @var array|null
   */
  public $a_city_list = null;

  /**
   * Country list.
   *
   * @get result
   * @var array|null
   */
  public $a_country_list = null;

  /**
   * Location list.
   *
   * @get result
   * @var array|null
   */
  public $a_location_list = null;

  /**
   * Region list.
   *
   * @get result
   * @var array|null
   */
  public $a_region_list = null;

  /**
   * State list.
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
   * Business key.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;
}

?>