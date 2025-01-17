<?php

namespace WellnessLiving\Wl\Reward\Score;

use WellnessLiving\WlModelAbstract;

/**
 * API endpoint designed to manage points which are earned for certain activity.
 */
class ScoreModel extends WlModelAbstract
{
  /**
     * List of login activity keys for which points should be added or returned.
     *
     *
     * NOTE: Login activity might belong to different users. It is possible for ex if booking performed
     * for several users (usually family members) and required to retrieve sum of all scores for preformed activities.
     *
     * @get get
     * @post get
     * @var string[]
     */
  public $a_login_activity = [];

  /**
     * Depending on arguments specified during API request might be:
     * * Total number of points which were earned for each activity in a list provided in {@link ScoreModel::$a_login_activity}
     *   in a case if it was provided.
     * * Total number of points user currently own in a cast if {@link ScoreModel::$uid} specified.
     *
     * @get result
     * @put post
     * @var int
     */
  public $i_score = 0;

  /**
     * Business key within which score should be managed.
     *
     * @put post
     * @var string
     *
     */
  public $k_business = '0';

  /**
     * String to be added as a comment to manual reward points changes.
     *
     * @put post
     * @var string
     */
  public $text_comment = '';

  /**
     * User key for which score should be managed.
     *
     * @put post
     * @var string
     *
     */
  public $uid = '0';
}

?>