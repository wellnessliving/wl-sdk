<?php

namespace WellnessLiving\Wl\Report;

/**
 * Returns information from a WellnessLiving report.
 *
 * There are two All Clients Reports that can be used to find user IDs. The results from each report can be filtered by different
 * fields. The two reports are similar, but not exactly the same. The `LOGIN_LIST` (ID 22) report requires filters to be set to
 * retrieve information. The `LOGIN_LIST_ALL` (ID 33) doesn’t require any filters to be set when specifying a date range.
 *
 * @method WlModelRequest get() Gets data of required report.  Loads the specified report for the given business, applying filter, sort, and pagination parameters, and returns the report rows and totals.
 */
class DataModel extends \WellnessLiving\Custom\Wl\Report\DataModel
{
  /**
   * The report contents.
   *
   * Contents of this array can vary based on the report that's loaded.
   *
   * @get result
   * @var array
   */
  public $a_data;

  /**
   * The report total.
   *
   * Contents of this array can vary based on the report that's loaded.
   *
   * @get result
   * @var array
   */
  public $a_total;

  /**
   * The page of results to show, starting at zero. The API will return 256 results per page.
   *
   * @get get
   * @var int
   */
  public $i_page = 0;

  /**
   * The report ID.
   * The following reports are currently available via the API:
   * <ul>
   *     <li>{@link WlReportSid::LOGIN_LIST} - All Clients Report (Reports tab, features date search)</li>
   *     <li>{@link WlReportSid::LOGIN_LIST_ALL} - All Clients Report (Clients tab) Batch Report</li>
   *     <li>{@link WlReportSid::PAY_TRANSACTION_BATCH} - Batch Report</li>
   *     <li>{@link WlReportSid::PURCHASE_ITEM_LIST_USER} - Sales per Client Report</li>
   *     <li>{@link WlReportSid::PURCHASE_ITEM_ACCRUAL_CASH} - All Sales Report</li>
   * </ul>
   *
   * @get get
   * @var int
   * @see WlReportSid
   */
  public $id_report = 0;

  /**
   * The report group ID.
   *
   * @get get
   * @var int
   * @see WlReportGroupSid
   */
  public $id_report_group = 0;

  /**
   * The report page ID. One of the {@link WlReportPageSid} constants.
   * If set, the collection of that page will be used, otherwise a collection of single report will be used.
   *
   * @get get
   * @var int|null
   */
  public $id_report_page = null;

  /**
   * The report view ID. One of the {@link WlReportChartViewSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_report_view = 0;

  /**
   * The key of business for which the report must be generated.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Filter settings in encoded format.
   *
   * @get get
   * @var string
   */
  public $s_filter = '';

  /**
   * The field to use for sorting report data.
   *
   * @get get
   * @var string
   */
  public $s_sort = '';
}

?>