<?php

namespace WellnessLiving\Wl\Skin\ScheduleStandard;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API point to get data about standard schedule customization.
 *
 * @method WlModelRequest get()
 */
class ScheduleStandardModel extends WlModelAbstract
{
  /**
   * Skin data.
   *
   * @get result
   * @var array
   */
  public $a_skin;
}

?>