<?php

namespace WellnessLiving\Core\Geo;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Get timezone by time offset.
 *
 * @method WlModelRequest get() Gets timezone by time offset.
 */
class GeoTimezoneModel extends WlModelAbstract
{
  /**
   * Time offset in minutes.
   *
   * @get get
   * @var int
   */
  public $i_timezone_offset_minutes;

  /**
   * Timezone key. <tt>null</tt> if can't determine.
   *
   * @get result
   * @var string|null
   */
  public $k_timezone;
}

?>