<?php

namespace WellnessLiving\Wl\Resource\Change;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to change an asset occupied by specified visit.
 *
 * @method WlModelRequest put() Changes an asset occupied by specified visit.  Validates that the specified resource and visit belong to the same business and that the  resource is available for the visit's session, then checks that the current user has  attendance privileges for the class location. When the visit belongs to a block event, the  new asset is applied to all sessions of that event for the same visitor.
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
 * Key of asset to be set.
 *
 * @put post
 * @var string
 */
  public $k_resource;

  /**
 * Key of visit.
 *
 * @put post
 * @var string
 */
  public $k_visit;
}

?>