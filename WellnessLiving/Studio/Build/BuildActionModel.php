<?php

namespace WellnessLiving\Studio\Build;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to perform action with studio builds.
 *
 * @method WlModelRequest post()
 */
class BuildActionModel extends WlModelAbstract
{
  /**
   * Action Id.
   *
   * @post post
   * @var int
   */
  public $id_action;

  /**
   * Key of the build.
   *
   * @post post
   * @var string
   */
  public $k_build;
}

?>