<?php

namespace WellnessLiving\Wl\Appointment\Mark;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Appointment state change API.
 *
 * @method WlModelRequest post()
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