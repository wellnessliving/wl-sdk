<?php

namespace WellnessLiving\Wl\Location\WorkTime;

use WellnessLiving\WlModelAbstract;

/**
 * This API saves working hours of specified location.
 * Access for this action has logged user with specified permissions or guest during process of registration a new
 * business (see  {@link \WellnessLiving\Wl\Business\BusinessModel}).
 */
class LocationWorkTimeModel extends WlModelAbstract
{
  /**
   * List of working hours of the location. Each element has next structure:<dl>
   *   <dt>int <var>i_day</var></dt>
   *   <dd>Day of the week from 1(Monday) to 7(Sunday). One of the constants from {@link \WellnessLiving\Core\a\ADateWeekSid}.</dd>
   *   <dt>string <var>t_end</var></dt>
   *   <dd>End time of work in format HH:MM.</dd>
   *   <dt>string <var>t_start</var></dt>
   *   <dd>Start time of work in format HH:MM.</dd>
   * </dl>
   *
   * <b>Important.</b> Days of the week that are not represented in this list will be saved as non-working days.
   *
   * @post post
   * @var array[]
   */
  public $a_work_time = [];

  /**
   * Key of the business.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * Key of the location.
   *
   * @post post
   * @var string|null
   */
  public $k_location;
}

?>