<?php

namespace WellnessLiving\Wl\Promotion;

use WellnessLiving\WlModelAbstract;

/**
 * Gets a promotion list of the specified business.
 */
class PromotionListModel extends WlModelAbstract
{
  /**
   * A list of promotions.
   *
   * @get result
   * @var array[]
   */
  public $a_promotion;

  /**
   * Determines whether to return promotions created by Enterprise Locations (for Enterprise Cloud businesses only).
   * If `true`, promotions created by Enterprise Locations are included. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $is_franchise = false;

  /**
   * The business key used to get the promotions.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>