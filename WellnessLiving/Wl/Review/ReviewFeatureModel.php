<?php

namespace WellnessLiving\Wl\Review;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that changes the status of a featured review.
 */
class ReviewFeatureModel extends WlModelAbstract
{
  /**
   * Determines if the review is featured.
   *
   * @post post
   * @var bool
   */
  public $is_featured=true;

  /**
   * The business key.
   *
   * @post post
   * @var string
   */
  public $k_business='';

  /**
   * The review key.
   *
   * @post post
   * @var string
   */
  public $k_review='';
}

?>