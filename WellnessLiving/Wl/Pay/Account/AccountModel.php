<?php

namespace WellnessLiving\Wl\Pay\Account;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that displays information about user's accounts.
 */
class AccountModel extends WlModelAbstract
{
  /**
   * A list of the user's accounts.
   *
   * Keys are account keys. This could be `0<` if the user has no accounts in the currency of the given business.
   * Values are account data.
   *
   * This will be `null` until loaded.
   *
   * @get result
   * @var array|null
   */
  public $a_account = null;

  /**
   * `true` - get information for the account of the money owner (another user could be the owner of the specified
   * user's money).
   *`false` - get information certainly for the specified user.
   *
   * @get get
   * @var bool
   */
  public $is_owner = false;

  /**
   * The key of the business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>