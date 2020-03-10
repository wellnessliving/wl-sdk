<?php

namespace WellnessLiving\Wl\Review;

use WellnessLiving\WlModelAbstract;

class ReviewReplyModel extends WlModelAbstract
{
  /**
   * Review key.
   *
   * @post post
   * @var string
   */
  public $k_review;

  /**
   * Reply text for review.
   *
   * @post post
   * @var string
   */
  public $text_reply;
}

?>