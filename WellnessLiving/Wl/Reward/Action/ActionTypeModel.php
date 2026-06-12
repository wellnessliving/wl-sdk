<?php

namespace WellnessLiving\Wl\Reward\Action;

use WellnessLiving\WlModelAbstract;

/**
 * Information about reward actions of given type in business.
 */
class ActionTypeModel extends WlModelAbstract
{
  /**
   * Information about reward actions. Every element has next keys:
   *
   * @get result
   * @var array[]
   */
  public $a_reward_action;

  /**
   * ID of type of reward action.
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