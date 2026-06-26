<?php

namespace WellnessLiving\Wl\Coupon\Edit\Region;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for get list franchise region for coupon.
 *
 * @method WlModelRequest get()
 */
class RegionListModel extends WlModelAbstract
{
  /**
   * List of franchise regions.
   * Has next structure: 
   *
   * <dl>
   *   <dt>bool `is_select`</dt>
   *   <dd><tt>true</tt> if region is selected, <tt>false</tt> otherwise.</dd>
   * 
   *   <dt>string `k_franchise_region`</dt>
   *   <dd>Franchise region key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Name of the franchise region.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_franchise_region = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Coupon key.
   *
   * <tt>null</tt> if coupon is not created yet.
   *
   * @get get
   * @var string|null
   */
  public $k_coupon = null;
}

?>