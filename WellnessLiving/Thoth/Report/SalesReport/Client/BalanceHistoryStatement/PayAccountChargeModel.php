<?php

namespace WellnessLiving\Thoth\Report\SalesReport\Client\BalanceHistoryStatement;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns "Make a payment" charge URLs for each account balance pay method of a client.
 *
 * Used by `Thoth_Report_SalesReport_Client_BalanceHistoryStatement_BalanceHistoryStatementLazy` to open the correct charge page
 * when the staff clicks "Make a payment" on the Balance History and Statements tab.
 *
 * @method WlModelRequest get()
 */
class PayAccountChargeModel extends WlModelAbstract
{
  /**
   * List of account pay methods with their charge URLs.
   *
   * Each element has the following structure:
   *
   * <dl>
   *   <dt>string `k_pay_method`</dt>
   *   <dd>The pay method key. `'0'` for the default (system) account.</dd>
   * 
   *   <dt>string `url_charge`</dt>
   *   <dd>URL of the "Make a payment" page for this account.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_list = [];

  /**
   * Business key.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Client user key.
   * `null` if not yet initialized.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>