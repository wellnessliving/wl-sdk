<?php

namespace WellnessLiving\Wl\Video;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Checks whether limit for video upload reached for specific business.
 *
 * @method WlModelRequest get()
 */
class VideoLimitModel extends WlModelAbstract
{
  /**
   * Whether business has reach limits for video upload.
   *
   * @get result
   * @var bool
   */
  public $has_limit;

  /**
   * Maximum video size in bytes.
   *
   * @get result
   * @var int|string
   */
  public $i_limit;

  /**
   * Subscription plan proposed for upgrade if limit reached and this subscription plan can avoid this limit.
   *
   * <tt>null</tt> if plan can not be upgraded.
   *
   * @get result
   * @var int|null
   */
  public $id_upgrade_plan;

  /**
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Monthly payment amount for subscription plan proposed for upgrade
   * if limit reached and this subscription plan can avoid this limit.
   *
   * <tt>null</tt> if plan can not be upgraded.
   *
   * @get result
   * @var string|null
   */
  public $m_upgrade_price;
}

?>