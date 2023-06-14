<?php

namespace WellnessLiving\Wl\Review;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that adds a review for a location. The review consists of a rating from 1 to 5 stars and text.
 * The review will be attributed to the user who is signed in to the API.
 */
class ReviewModel extends WlModelAbstract
{
  /**
   * The rating given to the location (1 to 5 stars).
   *
   * This will be `null` if not loaded yet.
   *
   * @post post
   * @var int|null
   */
  public $i_rate = null;

  /**
   * The key of a location.
   *
   * This will be `null` if not loaded yet.
   *
   * @post post
   * @var string|null
   */
  public $k_location = null;

  /**
   * The key of the review writing activity. This will be empty if the review was saved but not published.
   *
   * This will be `null` if not loaded yet.
   *
   * @post result
   * @var string|null
   */
  public $k_login_activity = null;

  /**
   * The text of the review.
   *
   * This will be `null` if not loaded yet.
   *
   * @post post
   * @var string|null
   */
  public $s_text = true;
}

?>