<?php

namespace WellnessLiving\Wl\Resource\Change;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to change an asset occupied by specified visit.
 *
 * @method WlModelRequest put() Changes an asset occupied by specified visit.
 */
class ChangeModel extends WlModelAbstract
{
  /**
   * Index of asset to be set.
   *
   * @put post
   * @var int
   */
  public $i_index;

  /**
   * @put post
   * @var string
   */
  public $k_resource;

  /**
   * @put post
   * @var string
   */
  public $k_visit;
}

?>