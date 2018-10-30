<?php

namespace WellnessLiving\Wl\Review;

use WellnessLiving\WlModelAbstract;

/**
 * Creates a review using the login of the user signed into the API.
 */
class ReviewModel extends WlModelAbstract
{
  /**
   * Selected rate, the number of stars of the review (1-5).
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var int|null
   */
  public $i_rate = null;

  /**
   * ID of a location.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var string|null
   */
  public $k_location = null;

  /**
   * ID of writing review activity. Empty if review was saved but not published.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post result
   * @var string|null
   */
  public $k_login_activity = null;

  /**
   * The text of review.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var string|null
   */
  public $s_text = true;
}

?>