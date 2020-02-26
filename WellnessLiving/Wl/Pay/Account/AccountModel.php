<?php

namespace WellnessLiving\Wl\Pay\Account;

use WellnessLiving\WlModelAbstract;

/**
 * Information about user's accounts.
 */
class AccountModel extends WlModelAbstract
{
  /**
   * A list of user's accounts.
   *
   * Keys are account keys (may be <tt>0</tt> if user has no accounts in currency of given business);
   * values are account data.
   *
   * <tt>null</tt> until got.
   *
   * @get result
   * @var array|null
   */
  public $a_account = null;

  /**
   * <tt>true</tt> - get information for account of money owner
   * (another user may be owner of the specified user's money).
   *
   * <tt>false</tt> - get information certainly for the specified user.
   *
   * @get get
   * @var bool
   */
  public $is_owner = false;

  /**
   * Key of the business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of the user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>