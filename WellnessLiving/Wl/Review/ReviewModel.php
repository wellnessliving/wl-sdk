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
   * This will be `null` if not set yet.
   *
   * @post post
   * @var int|null
   */
  public $i_rate;

  /**
   * Reward score for leaving a review.
   *
   * @post result
   * @var int
   */
  public $i_score = 0;

  /**
   * Reward score for sharing a review on Facebook.
   *
   * @post result
   * @var int
   */
  public $i_score_facebook = 0;

  /**
   * Reward score for sharing a review on Twitter.
   *
   * @post result
   * @var int
   */
  public $i_score_twitter = 0;

  /**
   * If a reward score for leaving a review exists.
   *
   * @post result
   * @var bool
   */
  public $is_score = false;

  /**
   * If a reward score for sharing a review on Facebook exists.
   *
   * @post result
   * @var bool
   */
  public $is_score_facebook = false;

  /**
   * If a reward score for sharing a review on Twitter exists.
   *
   * @post result
   * @var bool
   */
  public $is_score_twitter = false;

  /**
   * If a reward score for sharing exists.
   *
   * @post result
   * @var bool
   */
  public $is_share_points = false;

  /**
   * If a reward score does not exist for leaving a review or sharing the review.
   *
   * @post result
   * @var bool
   */
  public $is_share_points_none = false;

  /**
   * The key of a location.
   *
   * This will be `null` if not loaded yet.
   *
   * @post post
   * @var string|null
   */
  public $k_location;

  /**
   * The key of the review writing activity. This will be empty if the review was saved but not published.
   *
   * @post result
   * @var string
   */
  public $k_login_activity;

  /**
   * Review key.
   *
   * @post result
   * @var string
   */
  public $k_review;

  /**
   * Visit key.
   * Can be `null` if the review is not connected to a visit.
   *
   * @post post
   * @var string|null
   */
  public $k_visit;

  /**
   * The text of the review.
   *
   * This will be `null` if not set yet.
   *
   * @post post
   * @var string|null
   */
  public $s_text;

  /**
   * The UID of client who leaves review.
   *
   * @post result
   * @var string
   */
  public $uid = '';

  /**
   * The sharing url of the review.
   *
   * @post result
   * @var string
   */
  public $url_share = '';
}

?>