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