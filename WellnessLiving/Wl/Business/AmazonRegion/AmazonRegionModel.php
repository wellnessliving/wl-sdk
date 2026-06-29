<?php

namespace WellnessLiving\Wl\Business\AmazonRegion;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlRegionSid;

/**
 * An endpoint for retrieve region ID for businesses.
 *
 * @method WlModelRequest get() Returns the Amazon region ID for each of the requested business keys.  Used to determine which data center stores the data for a given set of businesses. Knowing the region is required before routing API calls across data centers. Returns `0` for businesses whose region is not set. All requested business keys must exist.
 */
class AmazonRegionModel extends WlModelAbstract
{
  /**
   * List of business key.
   *
   * @get get
   * @var string[]
   */
  public $a_business = [];

  /**
   * List of region IDs for {@link AmazonRegionModel::$a_business}.
   *
   * Key - is business key.
   * Value - is region ID. One of {@link WlRegionSid} constants.
   *   `0` if this business is from an unknown region.
   *
   * @get result
   * @var int[]
   */
  public $a_business_region;
}

?>