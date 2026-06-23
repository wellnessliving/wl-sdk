<?php

namespace WellnessLiving\Wl\Promotion;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlProgramSid;
use WellnessLiving\Wl\WlProgramTypeSid;

/**
 * Gets a promotion list of the specified business.
 *
 * @method WlModelRequest get() Returns promotion list of the specified business.  Returns all active promotions for the given business, with optional inclusion of Enterprise Location promotions when the business is a franchisor and `is_franchise` is set to `true`.
 */
class PromotionListModel extends WlModelAbstract
{
  /**
   * A list of promotions.
   *
   * <dl>
   *   <dt>int `id_program`</dt>
   *   <dd>The promotion program. One of the {@link WlProgramSid} constants.</dd>
   * 
   *   <dt>int `id_program_type`</dt>
   *   <dd>The type of the promotion program. One of the {@link WlProgramTypeSid} constants.</dd>
   * 
   *   <dt>bool `is_active`</dt>
   *   <dd>Whether the promotion is active.</dd>
   * 
   *   <dt>string `k_promotion`</dt>
   *   <dd>The key of the promotion. </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The title of the promotion.</dd>
   * </dl>
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