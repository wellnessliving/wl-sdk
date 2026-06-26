<?php

namespace WellnessLiving\Wl\Mail\Pattern\Disturb;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Class for manage "Do Not Disturb" option.
 *
 * @method WlModelRequest get()
 * @method WlModelRequest post()
 */
class DisturbModel extends WlModelAbstract
{
  /**
   * The start and end time for all the do not disturb periods for each mail page.
   *
   * Each of the values will be `null` if the do not disturb period is not set for this mail page.
   * It will be an array with the following keys if set.
   *
   * <dl>
   *   <dt>int `i_end`</dt>
   *   <dd>The end time of the do not disturb period, in seconds since midnight.</dd>
   * 
   *   <dt>int `i_start`</dt>
   *   <dd>The start time of the do not disturb period, in seconds since midnight.</dd>
   * </dl>
   * @get result
   * @post post
   * @var array
   */
  public $a_disturb = [];

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business;
}

?>