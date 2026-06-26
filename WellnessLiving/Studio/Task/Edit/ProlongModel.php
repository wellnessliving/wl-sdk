<?php

namespace WellnessLiving\Studio\Task\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Prolongs studio task development cycle.
 *
 * @method WlModelRequest post() Prolongs studio task development cycle.
 */
class ProlongModel extends WlModelAbstract
{
  /**
   * Studio task key
   *
   * @post post
   * @var string
   */
  public $k_studio_task;
}

?>