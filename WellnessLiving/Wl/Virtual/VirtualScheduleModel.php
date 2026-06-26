<?php

namespace WellnessLiving\Wl\Virtual;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Schedules new virtual meeting.
 *
 * @method WlModelRequest post()
 */
class VirtualScheduleModel extends WlModelAbstract
{
  /**
   * Class schedule session date.
   *
   * @post post
   * @var string
   */
  public $dtu_class_period;

  /**
   * Number of seconds after which need to repeat request.
   *
   * <tt>null</tt> if request should not be repeated.
   *
   * @post result
   * @var int|null
   */
  public $i_delay;

  /**
   * Appointment key.
   *
   * @post post
   * @var string
   */
  public $k_appointment;

  /**
   * Business key.
   *
   * @post result
   * @var string
   */
  public $k_business;

  /**
   * Class schedule key.
   *
   * @post post
   * @var string
   */
  public $k_class_period;

  /**
   * Link to created meeting.
   *
   * @post result
   * @var string
   */
  public $url_redirect;
}

?>