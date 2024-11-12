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
   * Values are account data: <dl>
   *   <dt>
   *     int <var>id_currency</var>
   *   </dt>
   *   <dd>
   *     Currency ID.
   *   </dd>
   *   <dt>
   *     string <var>k_currency</var>
   *   </dt>
   *   <dd>
   *     Key of account currency.
   *   </dd>
   *   <dt>
   *     string|null <var>k_pay_account</var>
   *   </dt>
   *   <dd>
   *     ID of payment account. <tt>null</tt> if this is a user account based on system payment method.
   *   </dd>
   *   <dt>
   *     string|null <var>k_pay_method</var>
   *   </dt>
   *   <dd>
   *     ID of custom payment method. <tt>null</tt> if this is a user account based on system payment method.
   *   </dd>
   *   <dt>
   *     string <var>m_rest</var>
   *   </dt>
   *   <dd>
   *     Account balance.
   *   </dd>
   *   <dt>
   *     string|null <var>s_method</var>
   *   </dt>
   *   <dd>
   *     Name of a custom payment method. <tt>null</tt> if this is a user account based on system payment method.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_account;

  /**
   * A list of accounts that is not created for this user yet.
   *
   * @get result
   * @var array[]
   */
  public $a_account_nx;

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