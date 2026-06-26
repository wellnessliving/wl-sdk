<?php

namespace WellnessLiving\Wl\Profile\Prize;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves a list of redeemed prizes.
 *
 * @method WlModelRequest get() Retrieves a list of prizes redeemed by user.
 */
class PrizeModel extends WlModelAbstract
{
  /**
   * Array of prize keys redeemed by user.
   *
   * @get result
   * @var array
   */
  public $a_login_prize;

  /**
   * Key of current business.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of a user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>