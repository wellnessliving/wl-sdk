<?php

namespace WellnessLiving\Wl\Report;

/**
 * Returns information from a WellnessLiving report.
 *
 * There are two All Clients Reports that can be used to find user IDs. The results from each report can be filtered by different
 * fields. The two reports are similar, but not exactly the same. The `LOGIN_LIST` (ID 22) report requires filters to be set to
 * retrieve information. The `LOGIN_LIST_ALL` (ID 33) doesn’t require any filters to be set when specifying a date range.
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
     *
     */
  public $a_data;

  /**
     * The page of results to show, starting at zero. The API will return 256 results per page.
     *
     * @get get
     * @var int
     */
  public $i_page = 0;

  /**
     * The report ID. One of the {@link WlReportSid} constants.
     *  The following reports are currently available via the API:
     * <dl>
     *   <dt>LOGIN_LIST {@link WlReportSid::LOGIN_LIST}</dt>
     *   <dd>All Clients Report (Reports tab, features date search)</dd>
     *   <dt>LOGIN_LIST_ALL {@link WlReportSid::LOGIN_LIST_ALL}</dt>
     *   <dd>All Clients Report (Clients tab) Batch Report</dd>
     *   <dt>PAY_TRANSACTION_BATCH {@link WlReportSid::PAY_TRANSACTION_BATCH}</dt>
     *   <dd>Batch Report</dd>
     *   <dt>PURCHASE_ITEM_LIST_USER {@link WlReportSid::PURCHASE_ITEM_LIST_USER}</dt>
     *   <dd>Sales per Client Report</dd>
     *   <dt>PURCHASE_ITEM_ACCRUAL_CASH {@link WlReportSid::PURCHASE_ITEM_ACCRUAL_CASH}</dt>
     *   <dd>All Sales Report</dd>
     * </dl>
     *
     * @get get
     * @var int
     */
  public $id_report = 0;

  /**
     * The report group ID. One of the {@link WlReportGroupSid} constants that describes the time
     * period (day, week, month, or year) for the report to cover.
     *
     * @get get
     * @var int
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
     *
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