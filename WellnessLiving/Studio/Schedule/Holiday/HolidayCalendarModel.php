<?php

namespace WellnessLiving\Studio\Schedule\Holiday;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for get information about used holidays.
 *
 * @method WlModelRequest get()
 */
class HolidayCalendarModel extends WlModelAbstract
{
  /**
   * A JSON array information about used holidays.
   *
   * @get result
   * @var string
   */
  public $s_event;
}

?>