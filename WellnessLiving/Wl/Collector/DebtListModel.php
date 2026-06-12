<?php

namespace WellnessLiving\Wl\Collector;

use WellnessLiving\WlModelAbstract;

/**
 * Returns list of debts added within the previous month.
 */
class DebtListModel extends WlModelAbstract
{
  /**
   * A list of debts for the given business added within the previous month.
   *
   * Each value is an array with the next structure:
   *
   * <dl>
   *   <dt>string `dl_client_birth`</dt>
   *   <dd>The birth date of the debtor client.</dd>
   * 
   *   <dt>string `dtu_client_since`</dt>
   *   <dd>The date and time in UTC from which the debtor client is a member of the business.</dd>
   * 
   *   <dt>string `dtu_due`</dt>
   *   <dd>The date and time in UTC of the last payment on the debtor client's account.</dd>
   * 
   *   <dt>string `dtu_add`</dt>
   *   <dd>The date and time in UTC when the client was added to the list of debtors.</dd>
   * 
   *   <dt>string `dtu_cease`</dt>
   *   <dd>The date and time in UTC when the debt was fully ceased.</dd>
   * 
   *   <dt>int `id_currency`</dt>
   *   <dd>The debt currency ID.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>The business key where the debt occurred.</dd>
   * 
   *   <dt>string `k_collector_debt`</dt>
   *   <dd>The debt key, which should be used for debt payment.</dd>
   * 
   *   <dt>string `k_pay_transaction_debt`</dt>
   *   <dd>The transaction key after which the debt occurred.</dd>
   * 
   *   <dt>string `k_pay_transaction_last`</dt>
   *   <dd>The last transaction key on account after the debt occurred.</dd>
   * 
   *   <dt>string `m_amount_debt`</dt>
   *   <dd>The initial amount of the debt.</dd>
   * 
   *   <dt>string `m_amount_paid`</dt>
   *   <dd>The amount paid for debt.</dd>
   * 
   *   <dt>string `text_business_title`</dt>
   *   <dd>The title of the business.</dd>
   * 
   *   <dt>string `text_client_name`</dt>
   *   <dd>The full name of the debtor client.</dd>
   * 
   *   <dt>string `text_client_address`</dt>
   *   <dd>The address of the debtor client.</dd>
   * 
   *   <dt>string `text_client_mail`</dt>
   *   <dd>The email address of the debtor client.</dd>
   * 
   *   <dt>string `text_client_phone`</dt>
   *   <dd>The phone number of the debtor client.</dd>
   * 
   *   <dt>string `text_client_zip`</dt>
   *   <dd>The ZIP code of the debtor client.</dd>
   * 
   *   <dt>string `text_skip`</dt>
   *   <dd>The notification message sent when the debt payment is missed.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>The user key of the debt owner.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_debt = [];

  /**
   * Date before which debts should be returned.
   *
   * If set, this is the end of the date window. Only debts added before or on this date will be shown.
   *
   * If left `null` and {@link DebtListModel::$dl_start} has been specified, only debts added after the start date will be returned.
   * If left `null` and {@link DebtListModel::$dl_start} is also `null`, this will return debts from the previous month.
   *
   * @get get
   * @var string|null
   */
  public $dl_end = null;

  /**
   * Date since which debts should be returned.
   *
   * If set, this is the start of the date window. Only debts added on or after this date will be shown.
   *
   * If left `null` and {@link DebtListModel::$dl_end} has been specified will return debts added since the beginning of time.
   * If left `null` and {@link DebtListModel::$dl_end} is also `null`, this will return debts from the previous month.
   *
   * @get get
   * @var string|null
   */
  public $dl_start = null;

  /**
   * Defines whether new debts should be returned or only previously sent debts.
   *
   * If `true` then return new debts only.
   * If `false` then return previously sent debts only.
   *
   * @get get
   * @var bool
   */
  public $is_request_debt = false;

  /**
   * Defines whether debts for test or real business should be returned.
   *
   * If `true`, debts from test businesses will be returned. Otherwise, this will be `false` if only
   * debts from real businesses will be returned.
   *
   * @get get
   * @var bool
   */
  public $is_test = false;

  /**
   * The business key for which debts should be returned.
   *
   * Use `null` if debt payments from all businesses should be returned.
   *
   * @get get
   * @var string|null
   */
  public $k_business = '';
}

?>