<?php

namespace WellnessLiving\Wl\Business\RegionTravel;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlRegionSid;

/**
 * API for transferring a business to another Amazon region.
 *
 * @method WlModelRequest get() Checks permission of user, and whether business can be transferred to target region.
 * @method WlModelRequest post() Initiates business region travel.
 */
class BusinessRegionTravelModel extends WlModelAbstract
{
  /**
   * ID of Amazon region that business is travelling to. `null` by default.
   *
   * @get get
   * @post get
   * @var null|int
   * @see WlRegionSid
   */
  public $id_region_destination = null;

  /**
   * `true` if business passed full check and can initiate travel. `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_full_check_pass = false;

  /**
   * Key of business that is travelling. `null` by default.
   *
   * @get get
   * @post get
   * @var null|string
   */
  public $k_business = null;
}

?>