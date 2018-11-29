<?php

namespace WellnessLiving\Wl\Review\ReviewList;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about review element.
 */
class ReviewElementModel extends WlModelAbstract
{
  /**
   * Review identifier.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var array|null
   */
  public $a_review = null;

  /**
   * Review identifier.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_review = null;

  /**
   * User ID.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>