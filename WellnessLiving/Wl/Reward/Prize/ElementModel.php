<?php

namespace WellnessLiving\Wl\Reward\Prize;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about redeemable prize.
 *
 * @method WlModelRequest get() Retrieves information about redeemable prize item.  Returns the point cost and description for the specified redeemable prize in the given business.
 * @method WlModelRequest post() Redeems selected prize.  Deducts the required points from the user's reward balance and records the redemption, returning the key of the created login prize record.
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
   * Business to show information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of login prize.
   *
   * @post result
   * @var string
   */
  public $k_login_prize = '0';

  /**
   * Key of redeemable prize.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_reward_prize = '0';

  /**
   * User friendly prize description.
   *
   * @get result
   * @var string
   */
  public $s_description;

  /**
   * User to retrieve information about.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>