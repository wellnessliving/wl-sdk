<?php

namespace WellnessLiving\Wl\Profile\Activity;

use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of client activities.
 */
class ListModel extends WlModelAbstract
{
  /**
   * An array listing client activities, each activity is given as an ID number.
   *
   * The order of items in this array is the order in which elements should be shown.
   *
   * @get result
   * @var array
   */
  public $a_activity = [];

  /**
   * The key of the business to show information for.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * ID of a user to show information for.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>