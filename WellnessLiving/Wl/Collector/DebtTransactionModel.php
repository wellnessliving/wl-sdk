<?php

namespace WellnessLiving\Wl\Collector;

use WellnessLiving\WlModelAbstract;

/**
 * Returns list payments for debts added within previous day.
 */
class DebtTransactionModel extends WlModelAbstract
{
  /**
   * List of debt payments for given business added within previous day.
   *
   * Each value is array with next structure:
   * <dl>
   *   <dt>string <var>dtu_pay</var></dt>
   *   <dd>Date and time in UTC of the payment transaction.</dd>
   *   <dt>string <var>m_pay_amount</var></dt>
   *   <dd>Amount of the payments transaction.</dd>
   *   <dt>int <var>id_pay_method</var></dt>
   *   <dd>Payment method ID that was used for payment. One of {@link \WellnessLiving\WlPayMethodSid} constants.</dd>
   *   <dt>bool <var>is_pay_collections</var></dt>
   *   <dd>Defines whether payment was performed via third party service.
   *     `true` if payment performed via third party service and this transaction is
   *     responsible account credit transaction for that payment. See {@link \WellnessLiving\Wl\Collector\DebtPayModel}.
   *     `false` if payment performed within Wellnessliving system.
   *   </dd>
   *   <dt>bool <var>is_debt_paid</var></dt>
   *   <dd>
   *     Defines whether initial debt to which this transaction related is fully paid.
   *     `true` if debt paid fully.
   *     `false` if debt paid partially.
   *   </dd>
   *   <dt>string <var>text_client_name</var></dt>
   *   <dd>Full name of the debtor client for which payment transaction performed.</dd>
   *   <dt>string <var>uid</var></dt>
   *   <dd>Uid of the debtor client for which payment transaction performed.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_transaction;

  /**
   * Business key of the debt.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>