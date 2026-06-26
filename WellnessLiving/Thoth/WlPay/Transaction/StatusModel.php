<?php

namespace WellnessLiving\Thoth\WlPay\Transaction;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Pay\Transaction\WlPayTransactionStatusSid;

/**
 * Allows to manually change status of a payment transaction.
 *
 * @method WlModelRequest get() Get a payment status for multiple transactions.
 * @method WlModelRequest post() Get a payment status for multiple transactions via POST body.  This method exists to fix an HTTP 414 "URI Too Long" error that occurred when a report contained a large number  of transactions (e.g. a full month of Batch Reconciliation). The JS caller `StatusReportCell.afterLoadTable()` passed all transaction keys as a JSON-encoded GET query  parameter, causing the URL to exceed server limits. Switching to POST moves the payload to the request body, which has no length restriction.
 * @method WlModelRequest put() Changes status of payment transaction.
 */
class StatusModel extends WlModelAbstract
{
  /**
   * List of keys of transactions to get statuses for.
   *
   * `null` if not initialized yet.
   *
   * @get get
   * @todo No internal JS caller sends this field anymore - all JS uses {@link StatusModel::$json_pay_transaction}
   *  via POST. The annotation is kept for backward compatibility with any external GET callers
   *  (e.g. third-party integrations or SDK consumers) that may pass keys as standard
   *  `a_pay_transaction[]=123` query parameters. Safe to remove only after confirming no
   *  external callers exist.
   * @var string[]|null
   */
  public $a_pay_transaction = null;

  /**
   * Loaded data about transactions. Values are array with the following properties:
   *
   * `null` if not initialized yet.
   *
   * <dl>
   *   <dt>int `id_pay_transaction_status`</dt>
   *   <dd>Transaction payment status. One of {@link WlPayTransactionStatusSid} constants.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * 
   *   <dt>string `k_pay_transaction`</dt>
   *   <dd>Transaction key.</dd>
   * </dl>
   * @get result
   * @post result
   * @var array|null
   */
  public $a_pay_transaction_data = null;

  /**
   * `null` if not initialized yet.
   *
   * @put result
   * @var string|null
   */
  public $html_pay_transaction_status = null;

  /**
   * New status of payment transaction.
   *
   * One of {@link WlPayTransactionStatusSid} constants.
   *
   * `null` if not initialized yet.
   *
   * @put post
   * @var int|null
   */
  public $id_pay_transaction_status = null;

  /**
   * List of keys of transactions to get statuses for, JSON-encoded array of primary keys.
   *
   * Originally this field was a GET input with type `array`. For GET parameters the framework automatically
   *  json-decodes fields whose names start with `json_` when the declared type is `array`, so no manual decoding
   *  was needed. However, that auto-decode only applies to query string parameters - POST body data goes through
   *  a different code path and the auto-decode does not fire. As a result, a POST body value (a JSON string)
   *  could not be assigned to an `array` typed property and the field silently stayed empty.
   *
   * To fix HTTP 414 "URI Too Long" errors when the report contains many transactions, the JS
   *  caller `StatusReportCell.
   * The annotation was changed to a POST input and the type was changed from `array` to `string` so the raw
   *  JSON string from the POST body is received as-is; {@link StatusApi::post()} calls `json_decode()` explicitly
   *
   * @post post
   * @var string
   */
  public $json_pay_transaction = '';

  /**
   * ID of a payment transaction to change.
   *
   * `null` if not initialized yet.
   *
   * @put get
   * @var string|null
   */
  public $k_pay_transaction = null;
}

?>