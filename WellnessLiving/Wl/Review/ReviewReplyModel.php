<?php

namespace WellnessLiving\Wl\Review;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlReviewStatusSid;

/**
 * Adds a review reply.
 */
class ReviewReplyModel extends WlModelAbstract
{
  /**
   * Status of the Review. One of {@link WlReviewStatusSid} constants.
   *
   * `null` until passed to the api when admin replies to the review.
   *
   * @post post
   * @var int|null
   */
  public $id_review_status = null;

  /**
   * Key of the business to which the review belongs.
   *
   * Empty string to defined business automatically, based on value of <tt>k_review</tt>.
   *
   * Although this value may be empty, this behavior is deprecated and will be removed in the future.
   * You MUST pass key of the business always.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * The review key.
   *
   * @post post
   * @var string
   */
  public $k_review;

  /**
   * The reply text for review.
   *
   * @post post
   * @var string
   */
  public $text_reply;
}

?>