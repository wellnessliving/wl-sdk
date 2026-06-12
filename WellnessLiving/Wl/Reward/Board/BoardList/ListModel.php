<?php

namespace WellnessLiving\Wl\Reward\Board\BoardList;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list with information about reward board.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of reward boards. `null` if not loaded.
   * Each element: 
   *
   * <dl>
   *   <dt>string `k_reward_board`</dt>
   *   <dd>Reward board key.
   * `0` for the all-time system board.
   * 
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>Board title.</dd>
   * </dl>
   * @get result
   * @var array[]|null
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