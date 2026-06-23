<?php

namespace WellnessLiving\Wl\Reward\Prize;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves a list of available redeemable prizes.
 *
 * @method WlModelRequest get() Retrieves a list of redeemable prizes.  Returns all active redeemable prizes for the specified business, ordered by point cost, including the prize key and required score for each item.
 */
class PrizeModel extends WlModelAbstract
{
  /**
   * Array of prize keys.
   *
   * @get result
   * @var string[]
   */
  public $a_prize;

  /**
   * Array of prize scores.
   *
   * @get result
   * @var int[]
   */
  public $a_score;

  /**
   * Key of current business.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>