<?php

namespace WellnessLiving\Core\Async\Service;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlRegionSid;

/**
 * Allows to restart a thread or all threads at worker server or at all worker servers.
 *
 * @method WlModelRequest post() Restarts a thread or all threads at worker server or at all worker servers.
 */
class RestartModel extends WlModelAbstract
{
  /**
   * Datacenter region ID to which the worker belongs. One of the {@link WlRegionSid} constants.
   * `null` if there is no division into regions.
   *
   * @post post
   * @var int|null
   */
  public $id_region = null;

  /**
   * IP address of a queue server which worker threads should be restarted.
   *
   * An empty string to restart worker threads at all queue servers.
   *
   * @post post
   * @var string
   */
  public $ip_queue;

  /**
   * IP address of a worker at which all threads should be restarted.
   *
   * This variable is required if {@link RestartModel::$is_all} is <tt>false</tt> and
   * {@link RestartModel::$s_thread} is not specified, otherwise this variable is not allowed.
   *
   * @post post
   * @var string
   */
  public $ip_worker;

  /**
   * Whether all threads at all worker servers should be restarted.
   *
   * This variable should be set to `true` if neither {@link RestartModel::$ip_worker} nor
   * {@link RestartModel::$s_thread} specified, otherwise this variable should be set to `false`.
   *
   * @post post
   * @var bool
   */
  public $is_all;

  /**
   * `null` if value is not defined.
   *
   * @post post
   * @var string|null
   */
  public $s_microservice = null;

  /**
   * Name of a provider which thread(s) should be restarted.
   *
   * @post get
   * @var string
   */
  public $s_provider;

  /**
   * ID of a thread to restart.
   *
   * This variable is required if {@link RestartModel::$is_all} is <tt>false</tt> and
   * {@link RestartModel::$ip_worker} is not specified, otherwise this variable is not allowed.
   *
   * @post post
   * @var string
   */
  public $s_thread;

  /**
   * World to which worker belongs.
   *
   * `null` if search should be performed in all worlds.
   *
   * @post post
   * @var string|null
   */
  public $s_world = null;
}

?>