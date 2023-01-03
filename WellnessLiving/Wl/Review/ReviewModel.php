<?php

namespace WellnessLiving\Wl\Review;

use WellnessLiving\WlModelAbstract;

/**
 * Adds a review for a location. The review consists of a rating from 1 to 5 stars and text.
 * The review will be attributed to the user who is signed into the API.
 */
class ReviewModel extends WlModelAbstract
{
  /**
   * The rating given to the location (1 to 5 stars).
   *
   * It is `null` if not loaded yet.
   *
   * @post post
   * @var int|null
   */
  public $i_rate = null;

  /**
   * The key of a location.
   *
   * It is `null` if not loaded yet.
   *
   * @post post
   * @var string|null
   */
  public $k_location = null;

  /**
   * The key of the review writing activity. Empty if review was saved but not published.
   *
   * It is `null` if not loaded yet.
   *
   * @post result
   * @var string|null
   */
  public $k_login_activity = null;

  /**
   * The text of the review.
   *
   * It is `null` if not loaded yet.
   *
   * @post post
   * @var string|null
   */
  public $s_text = true;
}

?>