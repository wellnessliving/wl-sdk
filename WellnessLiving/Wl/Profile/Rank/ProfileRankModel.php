<?php

namespace WellnessLiving\Wl\Profile\Rank;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to change promotion date on belts.
 *
 * @method WlModelRequest get() Gets promotion date on belts.
 * @method WlModelRequest post() Sets promotion date on belts.
 */
class ProfileRankModel extends WlModelAbstract
{
  /**
   * Promotion date on belts.
   * <tt>null</tt> if not initialized yet.
   *
   * @get result
   * @post get
   * @var string|null
   */
  public $dtu_promotion_date = null;

  /**
   * Login rank key.
   * Can be empty. In this case a promotion date will be set for currently promoted belt and belts in all franchisees
   * a belt was pushed to.
   *
   * @post get
   * @var string
   */
  public $k_login_rank = '';

  /**
   * Rank key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_rank = '';

  /**
   * UID of user promotion date on belts of whom to be changed.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';
}

?>