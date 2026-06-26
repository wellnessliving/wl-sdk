<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffApp\Location;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Information about locations which must be represented on schedule to current user.
 *
 * @method WlModelRequest get() Gets a list of locations which must be represented on schedule to current user.
 */
class ScheduleListLocationModel extends WlModelAbstract
{
  /**
   * Location IDs.
   *
   * @get result
   * @var string[]
   */
  public $a_location;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = null;

  /**
   * User key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $uid = null;
}

?>