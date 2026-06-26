<?php

namespace WellnessLiving\Studio\Ip;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows a staff member to acquire access from his current IP address to specified service.
 *
 * @method WlModelRequest put() Acquires access from current IP address of a staff member to specified service.
 */
class AccessAcquireModel extends WlModelAbstract
{
  /**
   * Key of the service to manage.
   *
   * @put post
   * @var string
   */
  public $k_ip_service;
}

?>