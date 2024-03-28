<?php

namespace WellnessLiving\Wl\Pay\Transaction\Report;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Report\Generator\ReportGeneratorStatusSid;

/**
 * An endpoint that can retrieve information from the All Transactions Report.
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
   * This is an indexed array in which one row is also an indexed array.
   *
   * Indexes of the columns correspond to the columns in {@link TransactionAllPaymentModel::$a_field}.
   *
   * @get result
   * @var array
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
   * Each page will contain a maximum of {@link TransactionAllPaymentModel::LIMIT} rows.
   *
   * @get get
   * @var int
   */
  public $i_page = 0;

  /**
   * The report status.
   *
   * One of {@link ReportGeneratorStatusSid} constants.
   *
   * @get result
   * @var int
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