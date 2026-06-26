<?php

namespace WellnessLiving\Core\Async\Service;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlRegionSid;

/**
 * Allows to activate or deactivate a worker server.
 *
 * Deactivation of a worker server may be needed for maintenance work on the server.
 *
 * @method WlModelRequest post() Activates or deactivates a worker server.
 */
class ActivateModel extends WlModelAbstract
{
  /**
   * Datacenter region ID to which the worker server belongs. One of the {@link WlRegionSid} constants.
   *
   * `null` if there is no division into regions or current region.
   *
   * @post post
   * @var int|null
   */
  public $id_region = null;

  /**
   * IP address of a worker server that should be activated or deactivated.
   *
   * @post post
   * @var string
   */
  public $ip_worker;

  /**
   * Whether this worker server should be activated or deactivated.
   *
   * <tt>true</tt> to activate this worker server.
   *
   * <tt>false</tt> to deactivate this worker server.
   *
   * @post post
   * @var string
   */
  public $is_active;

  /**
   * `null` if current microservice.
   *
   * @post post
   * @var string|null
   */
  public $s_microservice = null;

  /**
   * Name of a provider which worker server should be activated or deactivated.
   *
   * @post get
   * @var string
   */
  public $s_provider;

  /**
   * World to which worker server belongs.
   *
   * `null` if current world.
   *
   * @post post
   * @var string|null
   */
  public $s_world = null;
}

?>