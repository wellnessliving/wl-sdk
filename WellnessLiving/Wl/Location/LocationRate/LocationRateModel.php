<?php

namespace WellnessLiving\Wl\Location\LocationRate;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about location rate.
 *
 * @method WlModelRequest get() Retrieves information about location rate.  Returns the average rating and review count for the location, along with whether rating is  enabled for the business type the location belongs to.
 */
class LocationRateModel extends WlModelAbstract
{
  /**
   * Location rate.
   *
   * @get result
   * @var float
   */
  public $f_rate;

  /**
   * Review count.
   *
   * @get result
   * @var int
   */
  public $i_review;

  /**
   * Determines that the rate type exists in the current business type.
   *
   * @get result
   * @var bool
   */
  public $is_rate;

  /**
   * ID of a location to show rate for.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';
}

?>