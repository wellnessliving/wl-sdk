<?php

namespace WellnessLiving\Wl\Pay\Transaction\Report;

use WellnessLiving\WlModelAbstract;

/**
 * Entry point to get data from "All Transactions" report - {@link TransactionAllPaymentReport}.
 * This endpoint is an interface for giving data from "All Transactions" report.
 */
class TransactionAllPaymentModel extends WlModelAbstract
{
  /**
   * A list of fields in this report.
   *
   * This array is effectively a title row for table that is returned in {@link TransactionAllPaymentApi}.
   *
   * @get result
   * @var string[]
   */
  public $a_field = [];

  /**
   * Report data.
   *
   * This is an indexed array in which one row is an indexed array also.
   *
   * Indexes of the columns correspond columns in {@link TransactionAllPaymentApi::$a_field}.
   *
   * @get result
   * @var array
   */
  public $a_row = [];

  /**
   * Warning list of the report.
   *
   * @get result
   * @var string[]
   */
  public $a_warning = [];

  /**
   * Date in local time to retrieve transactions for.
   *
   * @get get
   * @var string
   */
  public $dl_date_end = '';

  /**
   * Date in local time to retrieve transactions for.
   *
   * @get get
   * @var string
   */
  public $dl_date_start = '';

  /**
   * Date and time when this report has completed generation and `null` otherwise.
   *
   * See {@link \Wl\Report\Generator\ReportStorageListSql}.`dtu_complete` for additional details.
   *
   * @get result
   * @var string|null
   */
  public $dtu_complete;

  /**
   * Date and time when this report was put on generation queue and `null` otherwise.
   *
   * See {@link \Wl\Report\Generator\ReportStorageListSql}.`dtu_queue` for additional details.
   *
   * @get result
   * @var string|null
   */
  public $dtu_queue;

  /**
   * Date and time when generation of this report has started and `null` otherwise.
   *
   * See {@link \Wl\Report\Generator\ReportStorageListSql}.`dtu_start` for additional details.
   *
   * @get result
   * @var string|null
   */
  public $dtu_start;

  /**
   * The page of the report, starting from 0.
   * Each page will contain a maximum of {@link TransactionAllPaymentApi::LIMIT} rows.
   *
   * @get get
   * @var int
   */
  public $i_page = 0;

  /**
   * Status of the report.
   *
   * One of {@link \Wl\Report\Generator\ReportGeneratorStatusSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_report_status = 0;

  /**
   * Whether to show more rows in the report.
   *
   * `true` in a case when there are more report rows to get and
   * `false` when all rows in the report.
   *
   * @get result
   * @var bool
   */
  public $is_more = false;

  /**
   * Whether this report should be refreshed.
   *
   * `true` to refresh this report if it is already generated.
   * A report refresh cannot be requested while the report is being generated.
   *
   * `false` to only return contents of the report.
   * If the report has not yet been generated, it automatically starts generation in the background.
   *
   * @get get
   * @var bool
   */
  public $is_refresh = false;

  /**
   * Whether this report is complete. If this report is accessed on the current day, or is returning
   * a result that was cached on the current day it could be incomplete as not all the transactions for the day
   * are present.
   *
   * `true` when this report has been completed and `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_report_complete = false;

  /**
   * Key of the business for which report should be generated.
   * Primary key in {@link \RsBusinessSql} table.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>