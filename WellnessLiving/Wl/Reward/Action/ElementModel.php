<?php

namespace WellnessLiving\Wl\Reward\Action;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about reward action item.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * Points amount that will be added to user account after successful accomplishment of reward action.
   *
   * @get result
   * @var int
   */
  public $i_score;

  /**
   * Reward score type ID.
   *
   * @get result
   * @var int|null
   */
  public $id_reward_score;

  /**
   * <tt>true</tt> if user has requested points for action accomplishment, <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_request;

  /**
   * Business to show information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Reward action to show information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_reward_action = '0';

  /**
   * User friendly reward action description.
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