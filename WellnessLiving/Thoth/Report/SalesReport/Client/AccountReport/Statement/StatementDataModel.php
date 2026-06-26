<?php

namespace WellnessLiving\Thoth\Report\SalesReport\Client\AccountReport\Statement;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns data required to render the account statement preview.
 *
 * Sign-flip rule applied to all balance amounts:
 * <ul>
 *   <li>Negative account balance (client owes money) becomes positive in statement.</li>
 *   <li>Positive account balance (credit) becomes negative in statement.</li>
 * </ul>
 *
 * This mirrors the convention used in the "Account Balance History" report
 *
 * @method WlModelRequest get()
 */
class StatementDataModel extends WlModelAbstract
{
  /**
   * Aged balance summary buckets as of the statement date.
   *
   * Each bucket is the remaining unpaid amount from charges past due by the indicated range.
   * Payments are applied to oldest charges first (FIFO).
   * A negative amount indicates an unused credit.
   *
   * Structure:
   *
   * <dl>
   *   <dt>string `m_current`</dt>
   *   <dd>Remaining unpaid amount from charges on the statement date.</dd>
   * 
   *   <dt>string `m_days_1_30`</dt>
   *   <dd>Remaining unpaid amount from charges 1-30 days past due.</dd>
   * 
   *   <dt>string `m_days_31_60`</dt>
   *   <dd>Remaining unpaid amount from charges 31-60 days past due.</dd>
   * 
   *   <dt>string `m_days_61_90`</dt>
   *   <dd>Remaining unpaid amount from charges 61-90 days past due.</dd>
   * 
   *   <dt>string `m_days_90_plus`</dt>
   *   <dd>Remaining unpaid amount from charges more than 90 days past due.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_aged_balance = [
    'm_current' => '0.00',
    'm_days_1_30' => '0.00',
    'm_days_31_60' => '0.00',
    'm_days_61_90' => '0.00',
    'm_days_90_plus' => '0.00',
  ];

  /**
   * List of account methods available for this client.
   *
   * Rendered as a drop-down only when more than one account method exists.
   *
   * Each element:
   *
   * <dl>
   *   <dt>string `k_pay_method`</dt>
   *   <dd>Account method key. `0` for the default account balance.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Display name of the account method.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_pay_method = [];

  /**
   * Statement table rows, ordered by date ascending.
   *
   * Each element:
   *
   * <dl>
   *   <dt>string `dtl_date`</dt>
   *   <dd>Date and time in local business timezone (MySQL datetime format). Used for display.</dd>
   * 
   *   <dt>string|null `m_charge`</dt>
   *   <dd>Charge amount (positive). `null` if the transaction is a credit.</dd>
   * 
   *   <dt>string|null `m_payment`</dt>
   *   <dd>Payment amount (positive). `null` if the transaction is a debit.</dd>
   * 
   *   <dt>string `m_balance`</dt>
   *   <dd>Running balance after this transaction, sign-flipped.</dd>
   * 
   *   <dt>string `text_item`</dt>
   *   <dd>Comma-separated item names.</dd>
   * 
   *   <dt>string `text_payment_method`</dt>
   *   <dd>Payment method display name.</dd>
   * 
   *   <dt>string `text_date`</dt>
   *   <dd>Transaction date formatted in business locale (e.g. "Dec 1, 2025").</dd>
   * 
   *   <dt>string `text_time`</dt>
   *   <dd>Transaction time formatted in business locale (e.g. "2:30pm").</dd>
   * 
   *   <dt>string `text_type`</dt>
   *   <dd>Transaction type label (shown in bold, first line of Item column).</dd>
   * 
   *   <dt>string|null `text_client_name`</dt>
   *   <dd>
   *     Name of the client who received this transaction.
   *    Populated only when {@link StatementDataModel::$is_include_relationship} is `true`.
   *   </dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_row = [];

  /**
   * Period end date.
   *
   * Written back as result after period resolution so callers can read the effective date.
   *
   * @get get,result
   * @var string|null
   */
  public $dl_end = null;

  /**
   * Period start date.
   *
   * Written back as result after period resolution so callers can read the effective date.
   *
   * @get get,result
   * @var string|null
   */
  public $dl_start = null;

  /**
   * Statement date (today in business timezone).
   *
   * Shown in the "Aged balance summary as of ..." heading.
   *
   * @get result
   * @var string
   */
  public $dl_statement_date = '';

  /**
   * Next sequential statement number for the client within the business.
   *
   * Computed as total existing statements plus one.
   * Shown in preview as "#[uid]-[number]".
   *
   * @get result
   * @var int
   */
  public $i_statement_next = 1;

  /**
   * Whether to include account activity from the payer's relationships.
   *
   * `true` to include the account activity of all members for whom the client is the payer.
   *
   * @get get
   * @var bool
   */
  public $is_include_relationship = true;

  /**
   * Whether the email channel of the New Account Statement client notification
   *
   * When `true`, the email confirmation dialog shows a warning above the recipient
   * input. The email is still delivered on Send via the manual override in
   *
   * @get result
   * @var bool
   */
  public $is_mail_disabled = false;

  /**
   * Whether there is no account activity during the statement period.
   *
   * When `true`, only the Previous Balance row is shown in the statement table.
   *
   * @get result
   * @var bool
   */
  public $is_no_activity = false;

  /**
   * Whether the client is a payer (has relationships).
   *
   * When `true`, the "Includes relationships' account activity" toggle is shown.
   *
   * @get result
   * @var bool
   */
  public $is_payer = false;

  /**
   * Business key.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Business currency key.
   *
   * @get result
   * @var string
   */
  public $k_currency = '0';

  /**
   * Account method key. `null` for the default account balance.
   *
   * @get get
   * @var string|null
   */
  public $k_pay_method = null;

  /**
   * Balance due at end of statement period (sign-flipped).
   *
   * Matches the Balance column of the last row in the statement table.
   *
   * @get result
   * @var string
   */
  public $m_balance_due = '0.00';

  /**
   * Opening balance before the statement period (sign-flipped).
   *
   * Shown as the "Previous Balance" row.
   *
   * @get result
   * @var string
   */
  public $m_previous_balance = '0.00';

  /**
   * Business address text.
   *
   * @get result
   * @var string
   */
  public $text_business_address = '';

  /**
   * Business city name.
   *
   * Empty string if not saved on the business profile.
   *
   * @get result
   * @var string
   */
  public $text_business_city = '';

  /**
   * Business name.
   *
   * @get result
   * @var string
   */
  public $text_business_name = '';

  /**
   * Business postal/zip code.
   *
   * Empty string if not saved on the business profile.
   *
   * @get result
   * @var string
   */
  public $text_business_zip_code = '';

  /**
   * Client full address text.
   *
   * Empty string if not saved on profile.
   *
   * @get result
   * @var string
   */
  public $text_client_address = '';

  /**
   * Client city name.
   *
   * Empty string if not saved on profile.
   *
   * @get result
   * @var string
   */
  public $text_client_city = '';

  /**
   * Client full name.
   *
   * @get result
   * @var string
   */
  public $text_client_name = '';

  /**
   * Client postal/zip code.
   *
   * Empty string if not saved on profile.
   *
   * @get result
   * @var string
   */
  public $text_client_zip_code = '';

  /**
   * Default email address for statement delivery.
   *
   * `null` if no email is saved.
   *
   * @get result
   * @var string|null
   */
  public $text_mail = null;

  /**
   * Statement period label.
   *
   * Format: "Dec 1, 2025 - Dec 31, 2025".
   *
   * @get result
   * @var string
   */
  public $text_period = '';

  /**
   * Statement date formatted in business locale (e.g. "May 6, 2026").
   *
   * @get result
   * @var string
   */
  public $text_statement_date = '';

  /**
   * Client UID displayed in the statement.
   *
   * @get result
   * @var string
   */
  public $uid = '';

  /**
   * Client user key.
   *
   * @get get
   * @var string|null
   */
  public $uid_client = null;

  /**
   * Business logo URL.
   *
   * Empty string when the business has no logo set.
   *
   * @get result
   * @var string
   */
  public $url_logo = '';
}

?>