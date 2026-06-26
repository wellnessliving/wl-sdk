<?php

namespace WellnessLiving\Wl\Login\Promotion\Rollup;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Adjusts remaining visits for given attendance restriction of the given purchased promotion.
 *
 * @method WlModelRequest post() This method is called to process POST query.
 */
class AdjustModel extends WlModelAbstract
{
  /**
   * Count of remaining visits that should be after adjustment.
   *
   * @post post
   * @var int
   */
  public $i_count;

  /**
   * ID of the calendar period attendance restriction is applied to.
   *
   * @post get
   * @var string
   */
  public $id_period;

  /**
   * ID of the purchased promotion.
   *
   * @post get
   * @var string
   */
  public $k_login_promotion;
}

?>