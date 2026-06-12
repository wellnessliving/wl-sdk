<?php

namespace WellnessLiving\Wl\Pay\Account;

use WellnessLiving\WlModelAbstract;

/**
 * Displays information about user's accounts.
 */
class AccountModel extends WlModelAbstract
{
  /**
   * A list of the user's accounts.
   *
   * Keys are account keys. This could be `0` if the user has no accounts in the currency of the given business.
   * Values are account data: 
   *
   * @get result
   * @var array
   */
<dl>
  <dt>int `id_currency`</dt>
  <dd>Currency ID.</dd>

  <dt>string `k_currency`</dt>
  <dd>Key of account currency. 

  <dt>string|null `k_pay_account`</dt>
  <dd>
    ID of payment account. null</tt> if this is a user account based on system payment method.
  </dd>

  <dt>string|null `k_pay_method`</dt>
  <dd>
    ID of custom payment method. <tt>null</tt> if this is a user account based on system payment method. /dd>

  <dt>string `m_rest`</dt>
  <dd>Account balance.</dd>

  <dt>string|null `s_method`</dt>
  <dd>Name of a custom payment method. <tt>null</tt> if this is a user account based on system payment method.</dd>
</dl>
  public $a_account;

  /**
   * A list of accounts that have not been created for this user yet.
   *
   * Keys are composed of `{k_pay_method}:{k_currency}`. Each element: 
   *
   * @get result
   * @var array[]
   */
<dl>
  <dt>bool `can_negative`</dt>
  <dd>`true` if the account is allowed to have a negative balance, `false` otherwise.</dd>

  <dt>int `id_currency`</dt>
  <dd>Currency ID.</dd>

  <dt>string `k_currency`</dt>
  <dd>Currency key. 

  <dt>string|null `k_pay_account`</dt>
  <dd>Payment account key. `null` for accounts not yet created.</dd>

  <dt>string|null `k_pay_method`</dt>
  <dd>
    Custom payment method key. `null` for accounts based on the system payment method.
/dd>

  <dt>string `m_rest`</dt>
  <dd>Account balance. Always `'0.00'` for accounts not yet created.</dd>

  <dt>string|null `s_method`</dt>
  <dd>Name of the custom payment method. `null` for accounts based on the system payment method.</dd>
</dl>
  public $a_account_nx;

  /**
   * Determines whether the user is a debtor. If `true` - the owner of this account is a debtor.
   * If `false` - the user is not a debtor or the information is not returned for the
   * account owner ({@link AccountModel::$is_owner} is `false`).
   *
   * @get result
   * @var bool
   */
  public $is_debtor = false;

  /**
   * If `true`, information for the account's owner is returned. Clients can be configured to pay for a relative's
   * expenses. For example, a parent can pay for their child.
   * Otherwise, `false` to indicate information strictly for the specified user is returned.
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