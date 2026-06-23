<?php

namespace WellnessLiving\Wl\Profile\Activity;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns a list of client activities.
 *
 * @method WlModelRequest get() Retrieves a list of activity items to show in user profile.  Returns the client's activity history for the specified business, filtered by an optional  date range. Requires profile-view access and respects activity-type visibility rules for the  requesting user.
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
   */
  public $a_activity;

  /**
   * Ending date of the date range. Optional.
   *
   * This is local business timezone date. This day is included in the result.
   *
   * @get get
   * @var string
   */
  public $dl_end = '';

  /**
   * Starting date of the date range. Optional.
   *
   * This is local business timezone date. This day is included in the result.
   *
   * @get get
   * @var string
   */
  public $dl_start = '';

  /**
   * The key of the business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the client to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>