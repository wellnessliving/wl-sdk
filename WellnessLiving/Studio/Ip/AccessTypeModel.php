<?php

namespace WellnessLiving\Studio\Ip;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to manage access rights of current staff member to a service.
 *
 * @method WlModelRequest put() Saves information about access type of current staff member to specified service.
 */
class AccessTypeModel extends WlModelAbstract
{
  /**
   * Type of access of current staff member to specified service.
   *
   * @put post
   * @var int
   */
  public $id_access;

  /**
   * Key of the service to manage.
   *
   * @put post
   * @var string
   */
  public $k_ip_service;
}

?>