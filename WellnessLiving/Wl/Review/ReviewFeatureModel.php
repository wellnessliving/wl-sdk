<?php

namespace WellnessLiving\Wl\Review;

use WellnessLiving\WlModelAbstract;

/**
 * Change status of review is featured.
 */
class ReviewFeatureModel extends WlModelAbstract
{
  /**
   * If is review is featured.
   *
   * @post post
   * @var bool
   */
  public $is_featured=true;

  /**
   * Key of the business.
   *
   * @post post
   * @var string
   * @see \RsBusinessSql
   */
  public $k_business='';

  /**
   * The review key.
   *
   * @post post
   * @var string
   * @see \RsReviewSql
   */
  public $k_review='';
}

?>