<?php

namespace WellnessLiving\Wl\Reward\Score;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API endpoint designed to manage points which are earned for certain activity.
 *
 * @method WlModelRequest get() Returns the total reward points for the specified activity list or user.  If `a_login_activity` is provided, returns the total points earned across those activities; otherwise returns the current point balance for the specified user in the given business.
 * @method WlModelRequest post() Gives user reward points for sharing of certain activity into Facebook.  Validates the activity list, determines the appropriate reward score type per activity category, and schedules reward point additions for each shareable activity.
 * @method WlModelRequest put() Manually adjusts the reward points balance for the specified user.  Requires the reward point reset privilege, creates a manual activity log entry, and applies the signed point adjustment to the user's reward balance within a transaction.
 */
class ScoreModel extends WlModelAbstract
{
  /**
   * List of login activity keys for which points should be added or returned.
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
   */
  public $uid = '0';
}

?>