<?php

namespace WellnessLiving\Wl\Reward\Action;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\RsRewardActionCategorySid;

/**
 * Retrieves a list of available reward actions.
 *
 * @method WlModelRequest get() Retrieves a list of available reward actions.  Returns all reward actions visible to the specified user in the given business, optionally filtered by category, including the score value and request status for each action.
 */
class ActionModel extends WlModelAbstract
{
  /**
   * A list reward actions. Every element has next keys:
   *
   * <dl>
   *   <dt>int `id_reward_action_category`</dt>
   *   <dd>
   *     ID of reward actions category type. One of {@link RsRewardActionCategorySid} constants. <tt>false</tt> for custom reward actions categories.
   *   </dd>
   * 
   *   <dt>string `k_reward_action`</dt>
   *   <dd>ID of reward action. </dd>
   * 
   *   <dt>string `k_reward_action_category`</dt>
   *   <dd>ID of reward action category in database. </dd>
   * </dl>
   * @get result
   * @var string[]
   */
  public $a_reward_action;

  /**
   * Key of current business.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of reward action category.
   *
   * @get get
   * @var string
   */
  public $k_reward_action_category = '0';

  /**
   * Key of a user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>