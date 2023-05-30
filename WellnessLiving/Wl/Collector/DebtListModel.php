<?php

namespace WellnessLiving\Wl\Collector;

use WellnessLiving\WlModelAbstract;

/**
 * Returns list of debts added within specific date range or within previous month if date range is not specified.
 */
class DebtListModel extends WlModelAbstract
{
  /**
   * List of debts for given business added within previous month.
   *
   * Each value is array with next structure:
   * <dl>
   *   <dt>string <var>dl_client_birth</var></dt>
   *   <dd>Birth date of the debtor client.</dd>
   *   <dt>string <var>dtu_client_since</var></dt>
   *   <dd>Date and time in UTC since which debtor client is a member of the business.</dd>
   *   <dt>string <var>dtu_due</var></dt>
   *   <dd>Date and time in UTC of the last payment on the debtor's account.</dd>
   *   <dt>string <var>dtu_add</var></dt>
   *   <dd>Date and time in UTC when client was added to the list of debtors.</dd>
   *   <dt>string <var>dtu_cease</var></dt>
   *   <dd>Date and time in UTC when debt was fully ceased.</dd>
   *   <dt>int <var>id_currency</var></dt>
   *   <dd>Debt currency ID. One of {@link \WellnessLiving\Core\Locale\CurrencySid} constants.</dd>
   *   <dt>string <var>k_business</var></dt>
   *   <dd>Business key where debt occurred.</dd>
   *   <dt>string <var>k_collector_debt</var></dt>
   *   <dd>Debt key. Should be used for debt payment.</dd>
   *   <dt>string <var>k_pay_transaction_debt</var></dt>
   *   <dd>Transaction key after which debt occurred.</dd>
   *   <dt>string <var>k_pay_transaction_last</var></dt>
   *   <dd>Last transaction key on account after debt occurred.</dd>
   *   <dt>string <var>m_amount_debt</var></dt>
   *   <dd>Initial amount of debt.</dd>
   *   <dt>string <var>m_amount_paid</var></dt>
   *   <dd>Amount that is paid for debt.</dd>
   *   <dt>string <var>text_business_title</var></dt>
   *   <dd>Title of the business.</dd>
   *   <dt>string <var>text_client_name</var></dt>
   *   <dd>Full name of the debtor client.</dd>
   *   <dt>string <var>text_client_address</var></dt>
   *   <dd>Street address of the debtor client.</dd>
   *   <dt>string <var>text_client_city</var></dt>
   *   <dd>City address of the debtor client.</dd>
   *   <dt>string <var>text_client_mail</var></dt>
   *   <dd>Email address of the debtor client.</dd>
   *   <dt>string <var>text_client_phone</var></dt>
   *   <dd>Phone number of the client who is a debtor.</dd>
   *   <dt>string <var>text_client_zip</var></dt>
   *   <dd>ZIP code of the debtor client.</dd>
   *   <dt>string <var>text_skip</var></dt>
   *   <dd>Notification message in a case of debt skipped.</dd>
   *   <dt>string <var>uid</var></dt>
   *   <dd>User key who is debt owner.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_debt;

  /**
   * Date before which debts should be returned.
   *
   * If `null` and {@link \WellnessLiving\Wl\Collector\DebtListModel::$dl_start} specified will return debts before current date.
   * If `null` and {@link \WellnessLiving\Wl\Collector\DebtListModel::$dl_start} also `null` will return debts from previous month.
   *
   * @get get
   * @var string|null
   */
  public $dl_end = null;

  /**
   * Date since which debts should be returned.
   *
   * If `null` and {@link \WellnessLiving\Wl\Collector\DebtListModel::$dl_end} specified will return debts since the beginning of time.
   * If `null` and {@link \WellnessLiving\Wl\Collector\DebtListModel::$dl_end} also `null` will return debts from previous month.
   *
   * @get get
   * @var string|null
   */
  public $dl_start = null;

  /**
   * Business key for which debts should be returned.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>