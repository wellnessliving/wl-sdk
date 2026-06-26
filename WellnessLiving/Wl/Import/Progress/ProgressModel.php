<?php

namespace WellnessLiving\Wl\Import\Progress;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages business import progress.
 *
 * @method WlModelRequest get() Designed to notify about import progress.
 */
class ProgressModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>