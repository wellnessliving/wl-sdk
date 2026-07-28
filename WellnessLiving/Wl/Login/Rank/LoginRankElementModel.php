<?php

namespace WellnessLiving\Wl\Login\Rank;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to delete a rank record for a user.
 *
 * @method WlModelRequest delete() Deletes a rank record for a user.  Removes the rank record from the database and logs the action in the belt history.
 */
class LoginRankElementModel extends WlModelAbstract
{
  /**
   *  To delete entire rank category from this user.
   *
   * @delete get
   * @var bool
   */
  public $is_rank_category;

  /**
   * Business key.
   *
   * @delete get
   * @var string
   */
  public $k_business;

  /**
   * Login rank key.
   *
   * @delete get
   * @var string
   */
  public $k_login_rank;
}

?>