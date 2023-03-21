<?php

namespace WellnessLiving\Wl\Review;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that adds a review reply.
 */
class ReviewReplyModel extends WlModelAbstract
{
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