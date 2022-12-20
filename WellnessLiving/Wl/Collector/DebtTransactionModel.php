<?php

namespace WellnessLiving\Wl\Collector;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns a list of payments for debts added within the previous day.
 */
class DebtTransactionModel extends WlModelAbstract
{
  /**
   * A list of debt payments for a given business added within the previous day.
   *
   * Each value is an array with next structure:
   * <dl>
   *   <dt>string <var>dtu_pay</var></dt>
   *   <dd>The date and time in UTC of the payment transaction.</dd>
   *   <dt>string <var>m_pay_amount</var></dt>
   *   <dd>The amount of the payment's transaction.</dd>
   *   <dt>int <var>id_pay_method</var></dt>
   *   <dd>The payment method ID that was used for the payment. One of {@link \WellnessLiving\WlPayMethodSid} constants.</dd>
   *   <dt>bool <var>is_pay_collections</var></dt>
   *   <dd>Defines whether the payment was performed via a third party service.
   *     `true` if the payment was performed via a third party service and this transaction is
   *     responsible for an account credit transaction for that payment. See {@link \WellnessLiving\Wl\Collector\DebtPayModel}.
   *     `false` if the payment was performed within the Wellnessliving system.
   *   </dd>
   *   <dt>bool <var>is_debt_paid</var></dt>
   *   <dd>
   *     Defines whether the initial debt to which this related transaction is fully paid.
   *     `true` if the debt is fully paid.
   *     `false` if the debt is partially paid.
   *   </dd>
   *   <dt>string <var>text_client_name</var></dt>
   *   <dd>The full name of the debtor client for whom the payment transaction was performed.</dd>
   *   <dt>string <var>uid</var></dt>
   *   <dd>The UID of the debtor client for whom the payment transaction was performed.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_transaction;

  /**
   * The business key of the debt.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>