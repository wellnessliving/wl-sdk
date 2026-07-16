<?php

namespace WellnessLiving\Core\Testing\Automation;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Automation test API endpoint that flushes all application caches.
 *
 * @method WlModelRequest get() Flushes all application caches.
 */
class CacheFlushModel extends WlModelAbstract
{
  /**
   * Name of the action to perform within this endpoint.
   *
   * @get get
   * @var string
   */
  public $s_action = '';

  /**
   * Request authentication token.
   *
   * A hex-encoded `sha256` signature that proves the caller knows the shared secret.
   *
   * @get get
   * @var string
   */
  public $s_token = '';
}

?>