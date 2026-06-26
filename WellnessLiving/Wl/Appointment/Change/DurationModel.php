<?php

namespace WellnessLiving\Wl\Appointment\Change;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Appointment duration change API.
 *
 * @method WlModelRequest post() Change appointment duration.
 */
class DurationModel extends WlModelAbstract
{
  /**
   * Array with state of client mail form.
   *
   * @post post
   * @var array
   */
  public $a_mail_form_client = [];

  /**
   * Array with state of staff mail form.
   *
   * @post post
   * @var array
   */
  public $a_mail_form_staff = [];

  /**
   * Duration change value.
   *
   * @post post
   * @var int
   */
  public $i_duration_delta = 0;

  /**
   * <tt>true</tt> if it is required to send notification about appointment change to client, <tt>false</tt> otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_notify_client = false;

  /**
   * <tt>true</tt> if it is required to send notification about appointment change to staff, <tt>false</tt> otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_notify_staff = false;

  /**
   * Reload page.
   *
   * @post result
   * @var bool
   */
  public $is_reload;

  /**
   * To do nothing, skip all changes.
   *
   * @post result
   * @var bool
   */
  public $is_skip;

  /**
   * Appointment key.
   *
   * Empty value means not set.
   *
   * @post post
   * @var string
   */
  public $k_appointment = '';

  /**
   * ID form.
   *
   * @post post
   * @var string
   */
  public $s_form_id = '';

  /**
   * New appointment end time
   *
   * @post result
   * @var string
   */
  public $s_time_end;
}

?>