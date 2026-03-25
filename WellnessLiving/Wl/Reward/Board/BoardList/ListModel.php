<?php

namespace WellnessLiving\Wl\Reward\Board\BoardList;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list with information about reward board.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of information about reward boards.
   *
   * @get result
   * @var array|null
   */
  public $a_reward_board;

  /**
   * Business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * User to retrieve information about.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>