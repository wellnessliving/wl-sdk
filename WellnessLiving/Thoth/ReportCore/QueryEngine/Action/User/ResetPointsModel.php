<?php

namespace WellnessLiving\Thoth\ReportCore\QueryEngine\Action\User;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Resets the reward points balance of a client to zero.
 *
 * Inserts a negative `rs_reward_score` entry equal to the client's current balance,
 *  records an activity log entry, and schedules async statistics refresh.
 *
 * Access: must be in a business backend; caller must have reward point-reset privilege
 *  (same check as the profile page reset via `Wl\Profile\Reward\Reward::canPointReset()`).
 *
 * @method WlModelRequest post()
 */
class ResetPointsModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Client user key to reset points for.
   *
   * @post post
   * @var string
   */
  public $uid = '';
}

?>