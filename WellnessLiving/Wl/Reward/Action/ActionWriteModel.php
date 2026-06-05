<?php

namespace WellnessLiving\Wl\Reward\Action;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;

/**
 * Point for modify the reward action.
 */
class ActionWriteModel extends WlModelAbstract
{
  /**
   * Promotions' list.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var string[]|null
   */
  public $a_promotion = null;

  /**
   * Maximum count of score.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var int|null
   */
  public $i_cap = null;

  /**
   * Count of the duration period.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var int|null
   */
  public $i_count = null;

  /**
   * Score of the reward.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var int|null
   */
  public $i_score = null;

  /**
   * Period to apply maximum count of score.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var int|null
   * @see ADurationSid
   */
  public $id_cap = null;

  /**
   * Type of a period.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var int|null
   * @see ADurationSid
   */
  public $id_duration = null;

  /**
   * Flag to define points type (account credits or points) in the 'Refer-a-Friend' section on the 'Enable Points' page.
   * <tt>true</tt>, if these are account credits.
   * <tt>false</tt>, if these are points.
   * <tt>null</tt> if field left unchanged.
   *
   * @post post
   * @var bool|null
   */
  public $is_account_credit;

  /**
   * Whether auto-renewal is enabled for this reward action.
   *
   * @post post
   * @var bool|null
   */
  public $is_auto_renewal = null;

  /**
   * Business key.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;

  /**
   * Class ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var string|null
   */
  public $k_class = null;

  /**
   * Promotion key.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var string|null
   */
  public $k_promotion = null;

  /**
   * Reward action ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var string|null
   */
  public $k_reward_action = null;

  /**
   * Service key.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var string|null
   */
  public $k_service = null;

  /**
   * Shop product ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var string|null
   */
  public $k_shop_product = null;
}

?>