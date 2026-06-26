<?php

namespace WellnessLiving\Thoth\Report\SalesReport\Client\AccountReport;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns information needed to initialize the "Account Balance History" report filter:
 * the "Include relationships' account activity" toggle, and payer identity fields used
 * to show non-payer empty-state messages on the Balance History and Statement History tabs.
 *
 * @method WlModelRequest get()
 */
class AccountHistoryReportInfoModel extends WlModelAbstract
{
  /**
   * When `true`, the toggle is shown and defaults to on.
   *
   * @get result
   * @var bool
   */
  public $is_payer = false;

  /**
   * Whether the client has at least one past account transaction paid on behalf of a relationship member.
   *
   * Meaningful only when {@link AccountHistoryReportInfoModel::$is_payer} is `false`.
   * When `true`, the toggle is shown but defaults to off.
   *
   * @get result
   * @var bool
   */
  public $is_payer_has_history = false;

  /**
   * Business key.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Full name of the user who pays for this client.
   *
   * Empty string when the client pays for themselves.
   *
   * @get result
   * @var string
   */
  public $text_payer_name = '';

  /**
   * Client user key.
   *
   * @get get
   * @var string|null
   */
  public $uid_client = null;

  /**
   * UID of the user who pays for this client.
   *
   * Empty string when the client pays for themselves.
   *
   * @get result
   * @var string
   */
  public $uid_payer = '';

  /**
   * URL of the payer's Balance History and Statements page.
   *
   * Empty string when the client pays for themselves.
   *
   * @get result
   * @var string
   */
  public $url_payer_balance_history = '';

  /**
   * URL of the payer's Statement History tab on the Balance History and Statements page.
   *
   * Empty string when the client pays for themselves.
   *
   * @get result
   * @var string
   */
  public $url_payer_statement_history = '';
}

?>