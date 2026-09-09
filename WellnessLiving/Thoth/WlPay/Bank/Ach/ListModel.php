<?php

namespace WellnessLiving\Thoth\WlPay\Bank\Ach;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * List of user's ACH accounts.
 *
 * @method WlModelRequest get() Retrieves information about user's ACH accounts.  Validates the user, business, and location, then retrieves all saved ACH accounts for the resolved merchant.  Also reports whether the current owner is allowed to add a new ACH account.
 */
class ListModel extends WlModelAbstract
{
  /**
   * List of ACH accounts:
   *
   * <dl>
   *   <dt>int `id_pay_bank_ach_holder`</dt>
   *   <dd>Type of account holder.</dd>
   * 
   *   <dt>int `id_pay_bank_ach_type`</dt>
   *   <dd>Type of account.</dd>
   * 
   *   <dt>bool `is_default`</dt>
   *   <dd><tt>true</tt> - this account is default payment method; <tt>false</tt> - otherwise.</dd>
   * 
   *   <dt>string `k_pay_bank`</dt>
   *   <dd>ID of bank account. </dd>
   * 
   *   <dt>string `text_name_account`</dt>
   *   <dd>Account name.</dd>
   * 
   *   <dt>string `text_name_holder`</dt>
   *   <dd>Account holder name.</dd>
   * 
   *   <dt>string `text_number`</dt>
   *   <dd>ACH account number.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_list = [];

  /**
   * Whether new ACH account can be added.
   *
   * `true` if new ACH account can be added.
   * `false` if new ACH account can not be added.
   *
   * @get result
   * @var bool
   */
  public $can_add = false;

  /**
   * ID of current business.
   *
   * @get get
   * @var string
   */
  public $k_business = null;

  /**
   * Location to show information for.
   *
   * <tt>0</tt> to use user's home location.
   *
   * @get get
   * @var string
   */
  public $k_location = null;

  /**
   * ID of a user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = null;
}

?>