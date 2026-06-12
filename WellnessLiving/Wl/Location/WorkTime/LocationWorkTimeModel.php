<?php

namespace WellnessLiving\Wl\Location\WorkTime;

use WellnessLiving\WlModelAbstract;

/**
 * Saves working hours for a specified location.
 *
 * Note that to run this endpoint, an authenticated user with specified permissions is required.
 */
class LocationWorkTimeModel extends WlModelAbstract
{
  /**
   * The list of the location's business hours. Each element has the next structure:
   *
   * Note that the days of the week that aren't represented in this list will be saved as non-working days.
   *
   * @post post
   * @var array[]
   */
  public $a_work_time = [];

  /**
   * The business key.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * The location key.
   *
   * @post post
   * @var string
   */
  public $k_location;
}

?>