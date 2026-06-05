<?php

namespace WellnessLiving\Wl\Reward\Action;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of available reward actions.
 */
class ActionModel extends WlModelAbstract
{
  /**
   * A list reward actions. Every element has next keys:
   * <dl>
   *   <dt>
   *     int|bool <var>id_reward_action_category</var>
   *   </dt>
   *   <dd>
   *     ID of reward actions category type. <tt>false</tt> for custom reward actions categories.
   *   </dd>
   *   <dt>
   *     string <var>k_reward_action</var>
   *   </dt>
   *   <dd>
   *     ID of reward action.    </dd>
   *   <dt>
   *     string <var>k_reward_action_category</var>
   *   </dt>
   *   <dd>
   *     ID of reward action category in database.    </dd>
   * </dl>
   *
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