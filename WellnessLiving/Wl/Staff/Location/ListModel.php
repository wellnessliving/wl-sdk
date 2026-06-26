<?php

namespace WellnessLiving\Wl\Staff\Location;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * List of business staffs with the locations available to them.
 *
 * @method WlModelRequest get() Gathers a list of business staffs and locations that are available to them.
 */
class ListModel extends WlModelAbstract
{
  /**
   * List of business staffs with the locations available to them.
   *
   * @get result
   * @var array[]
   */
  public $a_location;

  /**
   * Business key for which data will be collected.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>