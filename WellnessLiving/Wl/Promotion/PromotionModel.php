<?php

namespace WellnessLiving\Wl\Promotion;

use WellnessLiving\WlModelAbstract;

/**
 * Gets promotions for the specified business and promotion keys.
 */
class PromotionModel extends WlModelAbstract
{
  /**
   * Promotion information.
   *
   * @get result
   * @post post
   * @var array[]
   */
  public $a_promotion;

  /**
   * The key of the business.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the promotion.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_promotion = '0';

  /**
   * Guest passes settings for promotion. This will be `null` if there are no guest pass settings for the promotion.
   *
   * @field a_guest_settings
   * @get result
   * @post post
   * @var GuestPassSettingsEntity|array|null
   */
  public $o_guest_settings = null;
}

?>