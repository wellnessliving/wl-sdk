<?php

namespace WellnessLiving\Wl\Appointment\Repeat;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Change recurring appointment booking settings.
 *
 * @method WlModelRequest post() Change recurring appointment booking settings.
 */
class RepeatModel extends WlModelAbstract
{
  /**
   * Whether future appointments should be booked unpaid even if client have applicable purchase option.
   *
   * @post post
   * @var bool
   */
  public $is_repeat_unpaid = false;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';

  /**
   * Visit key.
   *
   * @post post
   * @var string
   */
  public $k_visit = '0';

  /**
   * User key.
   *
   * @post post
   * @var string
   */
  public $uid = '0';
}

?>