<?php

namespace WellnessLiving\Wl\Profile\Activity;

use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of client activities.
 */
class ListModel extends WlModelAbstract
{
  /**
     * An array listing client activities, where each activity is provided as an ID number.
     *
     * The order of items in this array is the order in which the elements should be displayed.
     *
     * @get result
     * @var string[]
     *
     */
  public $a_activity;

  /**
     * The key of the business to show information for.
     *
     * @get get
     * @var string
     *
     */
  public $k_business = '0';

  /**
     * The key of the client to show information for.
     *
     * @get get
     * @var string
     *
     */
  public $uid = '0';
}

?>