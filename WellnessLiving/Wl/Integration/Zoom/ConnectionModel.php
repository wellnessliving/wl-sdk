<?php

namespace WellnessLiving\Wl\Integration\Zoom;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages business connection with {@link https://zoom.us/}.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest post() Deauthorization endpoint.
 */
class ConnectionModel extends WlModelAbstract
{
  /**
   * Event payload information.
   *
   * @field payload
   * @post post
   * @var array
   */
  public $a_payload;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Code to returned by <tt>Zoom</tt> service after successful authorisation.
   *
   * Required to retrieve access token.
   *
   * @field code
   * @get get
   * @var string
   */
  public $s_code;

  /**
   * Csrf code.
   *
   * @field csrf
   * @get get
   * @var string
   */
  public $s_csrf;

  /**
   * Event type.
   *
   * @field event
   * @post post
   * @var string
   */
  public $s_event;
}

?>