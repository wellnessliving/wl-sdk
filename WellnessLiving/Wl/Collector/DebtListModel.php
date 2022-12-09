<?php

namespace WellnessLiving\Wl\Collector;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns list of debts added within the previous month.
 */
class DebtListModel extends WlModelAbstract
{
  /**
   * A list of debts for the given business added within the previous month.
   *
   * Each value is an array with the next structure:
   * <dl>
   *   <dt>string <var>dl_client_birth</var></dt>
   *   <dd>The birth date of the debtor client.</dd>
   *   <dt>string <var>dtu_client_since</var></dt>
   *   <dd>The date and time in UTC from which the debtor client is a member of the business.</dd>
   *   <dt>string <var>dtu_due</var></dt>
   *   <dd>The date and time in UTC of the last payment on the debtor client's account.</dd>
   *   <dt>string <var>dtu_add</var></dt>
   *   <dd>The date and time in UTC when the client was added to the list of debtors.</dd>
   *   <dt>string <var>dtu_cease</var></dt>
   *   <dd>The date and time in UTC when the debt was fully ceased.</dd>
   *   <dt>int <var>id_currency</var></dt>
   *   <dd>The debt currency ID. One of {@link \WellnessLiving\Core\Locale\CurrencySid} constants.</dd>
   *   <dt>string <var>k_business</var></dt>
   *   <dd>The business key where the debt occurred.</dd>
   *   <dt>string <var>k_collector_debt</var></dt>
   *   <dd>The debt key, which should be used for debt payment.</dd>
   *   <dt>string <var>k_pay_transaction_debt</var></dt>
   *   <dd>The transaction key after which the debt occurred.</dd>
   *   <dt>string <var>k_pay_transaction_last</var></dt>
   *   <dd>The last transaction key on account after the debt occurred.</dd>
   *   <dt>string <var>m_amount_debt</var></dt>
   *   <dd>The initial amount of the debt.</dd>
   *   <dt>string <var>m_amount_paid</var></dt>
   *   <dd>The amount paid for debt.</dd>
   *   <dt>string <var>text_business_title</var></dt>
   *   <dd>The title of the business.</dd>
   *   <dt>string <var>text_client_name</var></dt>
   *   <dd>The full name of the debtor client.</dd>
   *   <dt>string <var>text_client_address</var></dt>
   *   <dd>The address of the debtor client.</dd>
   *   <dt>string <var>text_client_mail</var></dt>
   *   <dd>The email address of the debtor client.</dd>
   *   <dt>string <var>text_client_phone</var></dt>
   *   <dd>The phone number of the debtor client.</dd>
   *   <dt>string <var>text_client_zip</var></dt>
   *   <dd>The ZIP code of the debtor client.</dd>
   *   <dt>string <var>text_skip</var></dt>
   *   <dd>The notification message sent when the debt payment is missed.</dd>
   *   <dt>string <var>uid</var></dt>
   *   <dd>The user key of the debt owner.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_debt;

  /**
   * The business key to which debts should be returned.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>