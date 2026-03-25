<?php

namespace WellnessLiving\Wl\Reward\Board;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of items to show in user profile.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of UID items. Each value is a primary key in {@link \RsRewardBoardSql}
   *
   * @get result
   * @var int[]
   */
  public $a_uid;

  /**
   * ID of a business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * ID of reward board to show information for.
   *
   * @get get
   * @var string
   */
  public $k_reward_board = '0';
}

?>