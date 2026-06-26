<?php

namespace WellnessLiving\Wl\Login\Location;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to locations ever visited by user.
 *
 * @method WlModelRequest get() Gets locations ever visited by user.
 */
class LoginLocationModel extends WlModelAbstract
{
  /**
   * Keys of locations.
   *
   * @get result
   * @var string[]
   */
  public $a_location;

  /**
   * Key of user to get data for.
   *
   * @get get
   * @var string
   */
  public $uid;
}

?>