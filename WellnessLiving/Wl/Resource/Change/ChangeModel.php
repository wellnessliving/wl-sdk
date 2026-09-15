<?php

namespace WellnessLiving\Wl\Resource\Change;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to change an asset occupied by specified visit.
 *
 * @method WlModelRequest put() Changes an asset occupied by specified visit.  Validates that the specified resource and visit belong to the same business and that the  resource is available for the visit's session, then checks that the current user has  attendance privileges for the class location. When the visit belongs to a block event, the  new asset is applied to all sessions of that event for the same visitor. The change runs  inside a transaction that updates or inserts the corresponding `rs_resource_busy` records,  and fails when the target asset is already occupied for the affected time slot.
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