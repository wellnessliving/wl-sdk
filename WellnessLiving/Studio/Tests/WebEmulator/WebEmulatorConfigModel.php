<?php

namespace WellnessLiving\Studio\Tests\WebEmulator;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Changes the number of active and passive browsers.
 *
 * @method WlModelRequest post() Saves the number of active and passive browsers.
 */
class WebEmulatorConfigModel extends WlModelAbstract
{
  /**
   * Maximum number of active browsers on the server.
   *
   * @post post
   * @var int
   */
  public $i_count_active = 0;

  /**
   * Maximum number of active browsers on the server.
   *
   * @post post
   * @var int
   */
  public $i_count_passive = 0;
}

?>