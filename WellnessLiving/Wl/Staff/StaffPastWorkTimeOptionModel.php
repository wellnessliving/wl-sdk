<?php

namespace WellnessLiving\Wl\Staff;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * An endpoint that can update state of "Show past dates" toggle in staff's profile's working hours tab.
 *
 * @method WlModelRequest post() Updates the state of "Show past dates" toggle in staff's profile's working hours tab.
 */
class StaffPastWorkTimeOptionModel extends WlModelAbstract
{
  /**
   * Business key within which setting is managed.
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;

  /**
   * Option value.
   *
   * @post post
   * @var string|null
   */
  public $show_work_time_past = null;
}

?>