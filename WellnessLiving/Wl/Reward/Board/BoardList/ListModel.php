<?php

namespace WellnessLiving\Wl\Reward\Board\BoardList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves a list with information about reward board.
 *
 * @method WlModelRequest get() Retrieves all reward boards for business specified in {@link \Wl\Reward\Board\BoardList\ListApi::$k_business}.  Returns the list of reward boards available to the given user in the business, including board key and title, filtered to exclude boards the user is not eligible to view.
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
   * </dd>
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