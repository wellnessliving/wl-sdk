<?php

namespace WellnessLiving\Wl\Review\ReviewList;

use WellnessLiving\WlModelAbstract;

/**
 * Returns information about a review.
 */
class ReviewElementModel extends WlModelAbstract
{
  /**
   * Review data:
   *
   * @get result
   * @var array
   */
  public $a_review = [];

  /**
   * The key of the business to which the review belongs.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The review key.
   *
   * @delete get
   * @get get
   * @var string
   */
  public $k_review = '0';

  /**
   * The user key.
   *
   * May be empty in the case of a guest.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>