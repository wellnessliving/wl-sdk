<?php

namespace WellnessLiving\Wl\Integration\Autymate;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * Retrieves all daily transactions for a business using the All Transactions report endpoint.
 *
 * This endpoint is a streamlined interface and adds additional columns to the report for Autymate.
 * Autymate will have one user to access all businesses, this user will require the wl.integration.autymate.report privilege.
 */
class ReportModel extends WlModelAbstract
{
  /**
   * The list of fields in this report.
   *
   * This array is effectively a title row for table that is returned in {@link ReportModel::$a_row}.
   *
   * @get result
   * @var string[]
   */
  public $a_field = [];

  /**
   * List of payment methods to filter out in the report.
   * Each element is one of the {@link WlPayMethodSid} constants.
   *
   * @get get
   * @var int[]
   */
  public $a_pay_method_remove = [
    7,
  ];

  /**
   * The report data.
   *
   * This is an indexed array in which one row is an indexed array also.
   *
   * Indexes of the columns correspond to columns in {@link ReportModel::$a_field}.
   *
   * @get result
   * @var string[][]
   */
  public $a_row = [];

  /**
   * The warning list of the report, if applicable.
   *
   * @get result
   * @var string[]
   */
  public $a_warning = [];

  /**
   * The date in local time to retrieve transactions for.
   *
   * @get get
   * @var string
   */
  public $dl_date = '';

  /**
   * The date and time when this report has completed generation.
   *
   * `null` if generation of this report isn't completed.
   *
   * @get result
   * @var string|null
   */
  public $dtu_complete;

  /**
   * The date and time when this report was put in the generation queue.
   *
   * Effectively, this is the time when a user clicked to view this report or the report for this day was first called.
   *
   * @get result
   * @var string|null
   */
  public $dtu_queue;

  /**
   * The date and time when generation of this report was started.
   *
   * `null` if generation of this report hasn't started.
   *
   * @get result
   * @var string|null
   */
  public $dtu_start;

  /**
   * The page of the report, starting from 0.
   *
   * @get get
   * @var int
   */
  public $i_page = 0;

  /**
   * The status of the report.
   *
   * @get result
   * @var int
   */
  public $id_report_status = 0;

  /**
   * If <tt>true</tt> then there are more report rows to get. Otherwise, <tt>false</tt> if all rows have been sent.
   *
   * @get result
   * @var bool
   */
  public $is_more = false;

  /**
   * Determines whether this report should be refreshed.
   *
   * `true` to refresh this report if it's already generated.
   * Refreshing of the report may not be queried while report is being generated.
   *
   * `false` to only return contents of the report.
   * If report isn't yet generated, it automatically starts the generation in the background.
   *
   * @get get
   * @var bool
   */
  public $is_refresh = false;

  /**
   * Determines whether this report is complete. If this report is accessed on the current day, or is returning
   * a result that was cached on the current day it could be incomplete as not all the transactions for the day
   * are present.
   *
   * If `true` then this report will be complete.
   *
   * If `false` then this report could be incomplete.
   *
   * @get result
   * @var bool
   */
  public $is_report_complete = false;

  /**
   * The key of the business for which the report must be generated.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The randomly generated 32 character string used to authenticate requests.
   *
   * @get get
   * @var string
   */
  public $s_guid = '';
}

?>