<?php

namespace WellnessLiving\Wl\Profile\Prize;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about user's prize.
 *
 * @method WlModelRequest get() Retrieves information about prize item of user.
 * @method WlModelRequest post() Sets number of remaining prize quantity to 0.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * Prize price in wellnessliving points.
   *
   * @get result
   * @var int
   */
  public $i_score;

  /**
   * Key of redeemable prize.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_login_prize = '0';

  /**
   * Date of redeem.
   *
   * @get result
   * @var string|null
   */
  public $s_date;

  /**
   * User friendly prize description.
   *
   * @get result
   * @var string
   */
  public $s_description;
}

?>