<?php

namespace WellnessLiving\Wl\Reward\Board;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves a list of items to show in user profile.
 *
 * @method WlModelRequest get() Retrieves a list of reward board items to show.  Returns an ordered list of user IDs ranked by points for the specified reward board, up to the configured maximum number of entries.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of UID items.
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