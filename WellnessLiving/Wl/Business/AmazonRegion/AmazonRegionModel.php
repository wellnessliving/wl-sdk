<?php

namespace WellnessLiving\Wl\Business\AmazonRegion;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlRegionSid;

/**
 * An endpoint for retrieve region ID for businesses.
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
   *   `0` if this business is form an unknown region.
   *
   * @get result
   * @var int[]
   */
  public $a_business_region;
}

?>