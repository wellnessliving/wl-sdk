<?php

namespace WellnessLiving\Studio\Ip\Bot;

use WellnessLiving\WlModelAbstract;

/**
 * Allows to grant/revoke access from a bot to a service.
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