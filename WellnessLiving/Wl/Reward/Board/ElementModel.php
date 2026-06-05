<?php

namespace WellnessLiving\Wl\Reward\Board;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about reward board item.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * List of reward board elements. `null` if not loaded.
   * Each element:
   * <dl>
   *   <dt>int `i_score`</dt>
   *   <dd>Score in points.</dd>
   *   <dt>string `text_name`</dt>
   *   <dd>Reward name.</dd>
   *   <dt>string `uid`</dt>
   *   <dd>User key. 
   *   <dt>string `url_logo`</dt>
   *   <dd>URL to the user logo image.</dd>
   * </dl>
   *
   * @get result
   * @var array[]|null
   */
  public $a_reward = null;

  /**
   * List of users to get information for.
   *
   * <tt>null</tt> for mode of single user.
   *
   * @get get
   * @var string[]|null
   */
  public $a_uid = null;

  /**
   * Score in points.
   *
   * @get result
   * @var int
   */
  public $i_score = 0;

  /**
   * Business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Reward board to show information for.
   *
   * @get get
   * @var string
   */
  public $k_reward_board = '0';

  /**
   * User name.
   *
   * @get result
   * @var string
   */
  public $s_name = '';

  /**
   * User to retrieve information about.
   *
   * @get get
   * @var string
   */
  public $uid = '0';

  /**
   * User logo.
   *
   * @get result
   * @var string
   */
  public $url_logo = '';
}

?>