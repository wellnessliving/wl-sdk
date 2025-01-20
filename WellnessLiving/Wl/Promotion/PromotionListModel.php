<?php

namespace WellnessLiving\Wl\Promotion;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlProgramSid;

/**
 * Gets a promotion list of the specified business.
 */
class PromotionListModel extends WlModelAbstract
{
  /**
   * A list of promotions.
   * <dl>
   *   <dt>
   *     int <var>id_program</var>
   *   </dt>
   *   <dd>
   *     The promotion program. One of the {@link WlProgramSid} constants.
   *   </dd>
   *   <dt>
   *     string <var>k_promotion</var>
   *   </dt>
   *   <dd>
   *     The key of the promotion.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     The title of the promotion.
   *   </dd>
   * </dl>
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