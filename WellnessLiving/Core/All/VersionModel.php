<?php

namespace WellnessLiving\Core\All;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves current application version number.
 *
 * @method WlModelRequest get() Retrieves current application version number.
 */
class VersionModel extends WlModelAbstract
{
  /**
   * Current application version number.
   *
   * @get result
   * @var string
   */
  public $s_version;
}

?>