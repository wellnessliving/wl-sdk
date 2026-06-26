<?php

namespace WellnessLiving\Studio\Ip\Personnel;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to grant/revoke access from personnel to IP services.
 *
 * @method WlModelRequest delete() Revokes access.
 * @method WlModelRequest put() Grants access.
 */
class AccessModel extends WlModelAbstract
{
  /**
   * A list of IP services to change.
   *
   * @delete get
   * @put get
   * @var string[]
   */
  public $a_ip_service;

  /**
   * Key of a personnel member whose access should be changed.
   *
   * @delete get
   * @put get
   * @var string
   */
  public $k_personnel;
}

?>