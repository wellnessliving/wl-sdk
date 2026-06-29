<?php

namespace WellnessLiving\Wl\Review;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Changes the status of a featured review.
 *
 * @method WlModelRequest post() Updates the featured status of the given review for the business.  If featuring the review, unfeatures the currently featured review for the business location and marks the specified review as featured; if unfeaturing, clears the featured flag on the given review.
 */
class ReviewFeatureModel extends WlModelAbstract
{
  /**
   * Determines if the review is featured.
   *
   * @post post
   * @var bool
   */
  public $is_featured = true;

  /**
   * The business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * The review key.
   *
   * @post post
   * @var string
   */
  public $k_review = '';
}

?>