<?php

namespace WellnessLiving\Wl\Login\Promotion;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API point to check whether login promotion will be extended upon disabling auto-renew and for how many days.
 *
 * @method WlModelRequest get()
 */
class PromotionCheckExtensionModel extends WlModelAbstract
{
  /**
   * Number of days the contract will get extended
   *
   * @get result
   * @var int
   */
  public $i_extend;

  /**
   * Whether to show warning upon disabling auto-renew
   * `true` - login promotion has been applied to visit beyond its expiration date, `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_expiration_date = false;

  /**
   * Whether login promotion will get extended upon disabling auto-renew.
   * `true` - promotion will be extended, `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_extend = false;

  /**
   * Key of login promotion.
   *
   * @get get
   * @var string
   */
  public $k_login_promotion;
}

?>