<?php

namespace WellnessLiving\Wl\Profile\Activity;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns a list of client activities.
 */
class ListModel extends WlModelAbstract
{
  /**
   * An array listing client activities, where each activity is provided as an ID number.
   *
   * The order of items in this array is the order in which the elements should be displayed.
   *
   * @get result
   * @var array
   */
  public $a_activity = [];

  /**
   * The key of the business to show information for.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The ID of the client to show information for.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>