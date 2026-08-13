<?php

namespace WellnessLiving\Wl\Pay\Transaction\Report;

use WellnessLiving\Thoth\ReportCore\Generator\ReportGeneratorStatusSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * Can retrieve information from the All Transactions Report.
 *
 * @method WlModelRequest get() Returns All Transactions Report data for the specified date range.  Provides access to the All Transactions Report used for revenue reconciliation and export. The report is generated asynchronously and cached; check `$id_report_status` to determine whether generation is still in progress. Set `$is_refresh` to request regeneration and use `$i_page` to paginate through up to {@link \Thoth\WlPay\Transaction\Report\TransactionAllPaymentApi::LIMIT} rows per request.
 */
class TransactionAllPaymentModel extends WlModelAbstract
{
  /**
   * A list of fields in the report.
   *
   * This array is effectively a title row for the table returned in {@link TransactionAllPaymentModel::$a_row}.
   *
   * @get result
   * @var string[]
   */
  public $a_field = [];

  /**
   * The report data.
   *
   * This is an indexed array where each element is also an indexed array representing one report row.
   * Column positions in each row correspond to the field names in {@link TransactionAllPaymentModel::$a_field}.
   *
   * Known columns (use {@link TransactionAllPaymentModel::$a_field} to resolve their positional indexes): 
   *
   * <dl>
   *   <dt>array `a_pay_transaction`</dt>
   *   <dd>
   *     List of pay transactions associated with this row. Each element:
   *     <dl>
   *       <dt>int `id_pay_method`</dt>
   *       <dd>Payment method ID. One of {@link WlPayMethodSid} constants.</dd>
   * 
   *       <dt>string `k_pay_transaction`</dt>
   *       <dd>Pay transaction key. </dd>
   * 
   *       <dt>string `m_amount`</dt>
   *       <dd>Amount paid.</dd>
   * 
   *       <dt>string `m_surcharge`</dt>
   *       <dd>Surcharge amount from store settings.</dd>
   * 
   *       <dt>string `s_batch_number`</dt>
   *       <dd>Batch number for this transaction.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `dtu_purchase_start`</dt>
   *   <dd>Start date and time of the purchase in UTC.</dd>
   * 
   *   <dt>string `k_purchase`</dt>
   *   <dd>Purchase key. </dd>
   * 
   *   <dt>string `m_net_sale`</dt>
   *   <dd>Net sales amount.</dd>
   * 
   *   <dt>string `m_total_tax`</dt>
   *   <dd>Total tax amount.</dd>
   * 
   *   <dt>string `o_client.text_first`</dt>
   *   <dd>First name of the client.</dd>
   * 
   *   <dt>string `o_client.text_last`</dt>
   *   <dd>Last name of the client.</dd>
   * 
   *   <dt>string `o_client.text_name`</dt>
   *   <dd>Full name of the client.</dd>
   * 
   *   <dt>string `o_location.k_location`</dt>
   *   <dd>Location key. </dd>
   * 
   *   <dt>string `s_batch_number`</dt>
   *   <dd>Batch number of the first transaction in the row.</dd>
   * 
   *   <dt>string `text_location_address`</dt>
   *   <dd>Street address of the location.</dd>
   * 
   *   <dt>string `text_location_city`</dt>
   *   <dd>Name of the location's city.</dd>
   * 
   *   <dt>string `text_location_country`</dt>
   *   <dd>Name of the location's country.</dd>
   * 
   *   <dt>string `text_location_postal`</dt>
   *   <dd>Postal code of the location.</dd>
   * 
   *   <dt>string `text_location_region`</dt>
   *   <dd>Name of the location's region.</dd>
   * 
   *   <dt>string `text_payment_method`</dt>
   *   <dd>Name of the payment method used.</dd>
   * 
   *   <dt>string `text_payment_method_base`</dt>
   *   <dd>Name of the base payment method. If a custom method was used, this is the method it is based on.</dd>
   * 
   *   <dt>string `text_tax_title`</dt>
   *   <dd>Comma-separated list of tax names applied to the purchase.</dd>
   * 
   *   <dt>string `text_tax_value`</dt>
   *   <dd>
   *     Comma-separated list of tax values. Percentage-based taxes have `%` appended;
   * fixed-amount taxes have `$` appended.
   *   </dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_row = [];

  /**
   * The warning list of the report.
   *
   * @get result
   * @var string[]
   */
  public $a_warning = [];

  /**
   * The end date in local time to retrieve transactions for.
   *
   * @get get
   * @var string
   */
  public $dl_date_end = '';

  /**
   * The end date in local time to retrieve transactions for.
   *
   * @get get
   * @var string
   */
  public $dl_date_start = '';

  /**
   * The date and time if the report has completed generation. Otherwise, this will be `null`.
   *
   * @get result
   * @var string|null
   */
  public $dtu_complete = null;

  /**
   * The date and time if this report has been put in the generation queue. Otherwise, this will be `null`.
   *
   * @get result
   * @var string|null
   */
  public $dtu_queue = null;

  /**
   * The date and time if generation of this report has started. Otherwise, this will be `null`.
   *
   * @get result
   * @var string|null
   */
  public $dtu_start = null;

  /**
   * The page of the report, starting from 0.
   *
   * @get get
   * @var int
   */
  public $i_page = 0;

  /**
   * The report status.
   *
   * @get result
   * @var int
   * @see ReportGeneratorStatusSid
   */
  public $id_report_status = 0;

  /**
   * Determines whether to show more rows in the report.
   *
   * If `true`, there are more report rows to get. Otherwise, `false` to indicate that all rows in the report have
   * already been retrieved.
   *
   * @get result
   * @var bool
   */
  public $is_more = false;

  /**
   * Determines whether the report should be refreshed.
   *
   * If `true`, this report should be refreshed. A report refresh can't be requested while the report is being generated.
   * Otherwise, `false` to only return contents of the report.
   *
   * If the report hasn't yet been generated, it will automatically start generating in the background.
   *
   * @get get
   * @var bool
   */
  public $is_refresh = false;

  /**
   * Determines whether the report is complete.
   *
   * If the report is accessed on the current day, or is returning a result that was cached on the current day, it could
   * be incomplete as not all the transactions for the day are present.
   *
   * If `true`, the report has been completed. Otherwise, `false`.
   *
   * @get result
   * @var bool
   */
  public $is_report_complete = false;

  /**
   * The key of the business for which report should be generated.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>