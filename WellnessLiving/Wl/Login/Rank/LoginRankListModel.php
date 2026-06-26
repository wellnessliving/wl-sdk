<?php

namespace WellnessLiving\Wl\Login\Rank;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to get and save list of ranks for specified users.
 *
 * @method WlModelRequest get() Returns list of ranks for specified users or login ranks.
 * @method WlModelRequest post() Saves ranks for specified users in the business.
 */
class LoginRankListModel extends WlModelAbstract
{
  /**
   * List of users with information about their ranks in the business.
   *
   * @get result
   * @var array[]
   */
  public $a_user_list;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Class key.
   * Used to filter the list of ranks by their visit conditions.
   *
   * `null` if no need to filter by class.
   *
   * @get get
   * @var string|null
   */
  public $k_class = null;

  /**
   * @get get
   * @var string
   */
  public $s_user_key;

  /**
   * Users with rank categories encoded by Javascript analogue of the {@link \Core\Tool\UrlEncode\UrlEncode::encode()}
   * method. This logic was selected, because there is a possibility to promote belts of too many users. In this case
   * URI is too long.
   *
   * <tt>null</tt> if not initialized.
   *
   * @get get
   * @var string
   */
  public $s_user_rank_category = null;

  /**
   * Users with rank categories and ranks that need to be saved encoded by Javascript analogue of the
   *
   * <tt>null</tt> if not initialized.
   *
   * @post post
   * @var string
   */
  public $s_user_rank_save = null;

  /**
   * Whether need to return user detail information (mail, phone).
   *
   * @get get
   * @var bool
   */
  public $show_user_detail = true;
}

?>