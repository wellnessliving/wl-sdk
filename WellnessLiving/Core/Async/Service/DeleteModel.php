<?php

namespace WellnessLiving\Core\Async\Service;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to remove all tasks of specified function from task queue.
 *
 * @method WlModelRequest post() Removes all tasks of specified function from task queue.
 */
class DeleteModel extends WlModelAbstract
{
  /**
   * IP address of a queue server at which queue should be purged.
   *
   * Empty string to purge all available queue servers.
   *
   * @post post
   * @var string
   */
  public $ip_queue;

  /**
   * Name of a function to purge.
   *
   * @post post
   * @var string
   */
  public $s_function = '';

  /**
   * Name of a provider which queue should be purged.
   *
   * @post get
   * @var string
   */
  public $s_provider;
}

?>