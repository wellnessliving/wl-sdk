<?php

namespace WellnessLiving\Studio\Ip;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Get current IP.
 *
 * @method WlModelRequest get() Get current IP.
 */
class IpGetModel extends WlModelAbstract
{
  /**
   * Current IPv4.
   *
   * @get result
   * @var string
   */
  public $ip_v4;

  /**
   * Current IPv6.
   *
   * @get result
   * @var string
   */
  public $ip_v6;
}

?>