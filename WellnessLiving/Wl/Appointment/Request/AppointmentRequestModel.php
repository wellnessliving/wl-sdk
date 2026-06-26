<?php

namespace WellnessLiving\Wl\Appointment\Request;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Confirms or denies the appointment.
 *
 * @method WlModelRequest post() Confirms or denies the appointment.
 */
class AppointmentRequestModel extends WlModelAbstract
{
  /**
   * From where request comes.
   *
   * @post get
   * @var int
   */
  public $id_place = 1;

  /**
   * Whether to deny the appointment.
   * `true` to deny appointment or `false` to confirm.
   *
   * @post get
   * @var bool
   */
  public $is_deny = false;

  /**
   * Whether all instances of recurring appointment should be denied or approved.
   * `true` if all instances, `false` for only current appointment.
   *
   * @post get
   * @var bool
   */
  public $is_repeat = false;

  /**
   * Appointment key.
   *
   * @post get
   * @var string
   */
  public $k_appointment = '0';

  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '0';
}

?>