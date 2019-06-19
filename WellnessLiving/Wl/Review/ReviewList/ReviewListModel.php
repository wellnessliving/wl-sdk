<?php

namespace WellnessLiving\Wl\Review\ReviewList;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of reviews.
 */
class ReviewListModel extends WlModelAbstract
{
  /**
   * List of review identifiers.
   *
   * Order of items in this array is the order in which elements should be shown.
   * Each element is review ID.
   *
   * @get result
   * @var array|null
   */
  public $a_review = [];

  /**
   * Quantity of last reviews information about which is required.
   *
   * <tt>0</tt> to get all review. In this case only review keys must be returned.
   *
   * If not <tt>0</tt>, information of each review must be returned.
   *
   * @get get
   * @var int
   */
  public $i_quantity = 0;

  /**
   * Business ID to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Location ID to show reviews for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * User ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid=null;
}

?>