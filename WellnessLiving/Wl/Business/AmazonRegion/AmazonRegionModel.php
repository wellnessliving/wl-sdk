<?php

namespace WellnessLiving\Wl\Business\AmazonRegion;

use WellnessLiving\Wl\WlRegionSid;
use WellnessLiving\WlModelAbstract;

/**
 * Retrieves the region ID for businesses.
 */
class AmazonRegionModel extends WlModelAbstract
{
  /**
   * A list of business keys.
   *
   * @get get
   * @var string[]
   */
  public $a_business = [];

  /**
   * A list of region IDs for {@link AmazonRegionModel::$a_business}.
   *
   * Keys refer to business keys, and values refer to region IDs (one of the {@link WlRegionSid} constants).
   *
   * If `0`, this business is from an unknown region.
   *
   * @get result
   * @var int[]
   */
  public $a_business_region;
}

?>