<?php

namespace WellnessLiving\Core\Prg\XDebug;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages xdebug profiler mode.
 *
 * @method WlModelRequest post()
 */
class ProfilerModeModel extends WlModelAbstract
{
  /**
   * <tt>true</tt> if xdebug profiler enable, <tt>false</tt> otherwise.
   *
   * @post result
   * @var bool
   */
  public $is_enable;
}

?>