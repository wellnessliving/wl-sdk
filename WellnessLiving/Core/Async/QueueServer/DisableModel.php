<?php

namespace WellnessLiving\Core\Async\QueueServer;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to disable or activate a queue server.
 *
 * Disabling of a queue server may be needed for maintenance work on the server.
 *
 * See <tt>namespace.Core/Async/QueueServer/doc/statuses-of-queue-servers.md</tt> for information about possible
 * transitions of queue servers between statuses.
 *
 * @method WlModelRequest post() Disables or activates a queue server.
 */
class DisableModel extends WlModelAbstract
{
  /**
   * IP address of a queue server that should be disabled or activated.
   *
   * @post post
   * @var string
   */
  public $ip_queue;

  /**
   * Whether this queue server should be disabled or activated.
   *
   * <tt>true</tt> to activate this queue server.
   *
   * <tt>false</tt> to disable this queue server.
   *
   * @post post
   * @var bool
   */
  public $is_active;

  /**
   * Name of a provider which queue server should be disabled or activated.
   *
   * @post get
   * @var string
   */
  public $s_provider;
}

?>