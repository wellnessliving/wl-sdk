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
   * If `true`, information for the account's owner is returned. Clients can be configured to pay for a relative's
   * expenses. For example, a parent can pay for their child. Otherwise, `false` to indicate information strictly for
   * the specified user is returned.
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
