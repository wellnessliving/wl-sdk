<?php

namespace WellnessLiving\Wl\Appointment\Mark;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Appointment state change API.
 *
 * @method WlModelRequest post() Changes the attendance status of an appointment.  Validates that the appointment belongs to the specified business and that the requesting  user has access to mark it, then verifies the requested status transition is allowed based  on the appointment's current visit and confirmation state. Applies the change within a  database transaction.
 */
class MarkModel extends WlModelAbstract
{
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
 * Business key.
 *
 * Empty value means not set.
 *
 * @post post
 * @var string
 */
  public $k_business = '';

  /**
 * Appointment status.
 *
 * One of 'attend', 'book', 'confirmed', 'pending' string values.
 * Empty value means not set.
 *
 * @post post
 * @var string
 */
  public $text_status = '';
}

?>