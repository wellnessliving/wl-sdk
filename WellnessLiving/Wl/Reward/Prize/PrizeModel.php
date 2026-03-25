<?php

namespace WellnessLiving\Wl\Reward\Prize;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of available redeemable prizes.
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