<?php

namespace WellnessLiving\Wl\Appointment\Client;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Updates an appointment for a walk-in client with newly created or existing client
 *
 * @method WlModelRequest put() Changes Appointment Client.
 */
class AppointmentEditClientModel extends WlModelAbstract
{
  /**
   * Key of the business where operation in performing.
   *
   * @put get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of certain reservation to set client for.
   *
   * @put get
   * @var string
   */
  public $k_visit = '0';

  /**
   * Client key.
   *
   * @put get
   * @var string
   */
  public $uid = '0';
}

?>