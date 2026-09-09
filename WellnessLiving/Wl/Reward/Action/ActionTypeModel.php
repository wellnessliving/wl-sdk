<?php

namespace WellnessLiving\Wl\Reward\Action;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\RsRewardScoreSid;

/**
 * Information about reward actions of given type in business.
 *
 * @method WlModelRequest get() Retrieves information about reward actions.  Returns all reward action records of the specified score type for the business, including the point value configured for each action.
 */
class ActionTypeModel extends WlModelAbstract
{
  /**
   * Information about reward actions. Every element has next keys:
   *
   * <dl>
   *   <dt>int `i_score`</dt>
   *   <dd>Number of points for this reward action.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_reward_action;

  /**
   * ID of type of reward action. One of {@link RsRewardScoreSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_reward_score = 0;

  /**
   * Key of a business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>