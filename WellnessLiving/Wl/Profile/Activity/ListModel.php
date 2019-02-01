<?php

namespace WellnessLiving\Wl\Profile\Activity;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of activity items to show in user profile.
 */
class ListModel extends WlModelAbstract
{
  /**
   * ID of activity items to show.
   *
   * Order of items in this array is the order in which elements should be shown.
   *
   * @get result
   * @var array
   */
  public $a_activity = [];

  /**
   * ID of a business to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * ID of a user to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>