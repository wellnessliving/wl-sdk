<?php

namespace WellnessLiving\Wl\Virtual;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Schedules new virtual meeting.
 *
 * @method WlModelRequest post() Schedules or joins a virtual meeting for an appointment or a class session.  Validates that the requested appointment or class period exists, has not already passed,  and that the current user is allowed to view or attend it. When the session start is  within the create-ahead window, creates the virtual meeting (or reuses one already created  by a concurrent request) and returns the redirect URL to join it. Otherwise returns the  number of seconds to wait before the meeting can be created.
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