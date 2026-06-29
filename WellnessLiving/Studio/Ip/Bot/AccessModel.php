<?php

namespace WellnessLiving\Studio\Ip\Bot;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to grant/revoke access from a bot to a service.
 *
 * @method WlModelRequest delete() Revokes bot access from a service.  Removes the access record and schedules a service update to apply the change.
 * @method WlModelRequest put() Grants bot access to a service.  Inserts an access record and schedules a service update to apply the change.
 */
class AccessModel extends WlModelAbstract
{
  /**
   * Key of a bot which access should be changed.
   *
   * @delete get
   * @put get
   * @var string
   */
  public $k_ip_bot;

  /**
   * Key of a service which access should be changed.
   *
   * @delete get
   * @put get
   * @var string
   */
  public $k_ip_service;
}

?>