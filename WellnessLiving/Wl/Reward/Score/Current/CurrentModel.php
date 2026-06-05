<?php

namespace WellnessLiving\Wl\Reward\Score\Current;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about current score.
 */
class CurrentModel extends WlModelAbstract
{
  /**
   * Current user's rank in the first leaderboard.
   *
   * @get result
   * @var int
   */
  public $i_board_rank;

  /**
   * Current score in wellnessliving points.
   *
   * @get result
   * @var int
   */
  public $i_score;

  /**
   * ID of a business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Title of the first leaderboard.
   *
   * @get result
   * @var string
   */
  public $s_board_title;

  /**
   * UID to retrieve information about.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>