<?php

namespace WellnessLiving\Wl\Review\ReviewList;

use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of review IDs for all reviews for a location. If location is not specified, returns
 * all reviews for all locations in the specified business.
 *
 * Reviews in WellnessLiving apply to specific locations. This endpoint can be used to get the IDs for all reviews or
 * to get a listing that includes all the review data if the `i_page parameter` is set.
 */
class ReviewListModel extends WlModelAbstract
{
  /**
   * List of reviews. If passed {@link ReviewListModel::$i_page} then the result will be full, otherwise in result will be keys: <tt>k_review</tt>, <tt>uid</tt>.
   *
   * @get result
   * @var array[]
   */
  public $a_review;

  /**
   * If not specified, this request will return all review keys. If specified, this request will return detailed reviews
   * (10 per page).
   *
   * This will be `null` if you only need to load the keys of the review.
   *
   * @get get
   * @var int|null
   */
  public $i_page = null;

  /**
   * The order in which the review should be arranged. One of the {@link ReviewOrderSid} constants.
   *
   * If not passed use default order {@link ReviewOrderSid::LATEST}.
   *
   * @get get
   * @var int|null
   */
  public $id_order = null;

  /**
   * Business key. If not specified, location key needs to be specified.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The key of the location to show reviews for. If not specified, business key should be specified.
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * The user's key. WellnessLiving allows staff to check low-rated reviews before posting them. Staff members can see
   * all reviews. Clients can only see checked reviews.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>