<?php

namespace WellnessLiving\Wl\Rank\Setting;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to save belts settings for the business.
 *
 * @method WlModelRequest post() Save belts settings for the business.
 */
class RankSettingModel extends WlModelAbstract
{
  /**
   * Whether to display promotion criteria to clients in the Client Wep App. `true` - to display promotion criteria,
   *   `false` - otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_display_promotion_criteria = false;

  /**
   * Whether to display promotion status to clients in the Client Wep App. `true` - to display promotion status,
   *   `false` - otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_display_promotion_status = false;

  /**
   * Whether to reset class attendance requirements after promotion. `true` - only classes which took place after
   *  the date of promotion should be counted for the current belt class attendance requirements, `false` - otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_reset_class_attendance = false;

  /**
   * Key of the business to save belts settings in.
   *
   * @post post
   * @var string
   */
  public $k_business = '';
}

?>