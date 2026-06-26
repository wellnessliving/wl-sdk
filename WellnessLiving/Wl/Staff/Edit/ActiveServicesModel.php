<?php

namespace WellnessLiving\Wl\Staff\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * An endpoint for getting information about staff's scheduled services.
 *
 * @method WlModelRequest get()
 */
class ActiveServicesModel extends WlModelAbstract
{
  /**
   * `true` if staff member has any scheduled services, otherwise `false`.
   *
   * @get result
   * @var bool
   */
  public $has_active_services = false;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * User key.
   *
   * @get get
   * @var string
   */
  public $uid_staff = '';
}

?>