<?php

namespace WellnessLiving\Wl\Report;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns information from a WellnessLiving report.
 *
 * There are two All Clients Reports that can be used to find user IDs. The results from each report can be filtered by different
 * fields. The two reports are similar, but not exactly the same. The `LOGIN_LIST` (ID 22) report requires filters to be set to
 * retrieve information. The `LOGIN_LIST_ALL` (ID 33) doesn’t require any filters to be set when specifying a date range.
 */
class DataModel extends WlModelAbstract
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
   * The page of results to show, starting at zero. The API will return 256 results per page.
   *
   * @get get
   * @var int
   */
  public $i_page = 0;

  /**
   * The report ID. One of the {@link \WellnessLiving\Wl\Report\WlReportSid} constants.
   * The following reports are currently available via the API:
   * <dl>
   *   <dt>LOGIN_LIST (ID 22)</dt>
   *   <dd>All Clients Report (Reports tab, features date search)</dd>
   *   <dt>LOGIN_LIST_ALL (ID 33)</dt>
   *   <dd>All Clients Report (Clients tab) Batch Report</dd>
   *   <dt>PAY_TRANSACTION_BATCH (ID 77)</dt>
   *   <dd>Batch Report</dd>
   *   <dt>PURCHASE_ITEM_LIST_USER (ID 118)</dt>
   *   <dd>Sales per Client Report</dd>
   *   <dt>PURCHASE_ITEM_ACCRUAL_CASH (ID 123)</dt>
   *   <dd>All Sales Report</dd>
   * </dl>
   *
   * @get get
   * @var int
   */
  public $id_report = 0;

  /**
   * The report group ID. One of the {@link \WellnessLiving\Wl\Report\WlReportGroupSid} constants that describes the time
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
   * The report view ID. One of the {@link \WellnessLiving\Wl\Report\WlReportChartViewSid} constants.
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
   * Filter settings in encoded format. May be decoded by {@link Core\Tool\UrlEncode\UrlDecode::decode()}.
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

  /**
   * Sets report filters.
   *
   * Specific filters depend on specific reports.
   *
   * @param array $a_filter The report filters. The key is the filter variable name, and the value is its value.
   */
  public function filterSet($a_filter)
  {
    if(count($a_filter))
      $this->s_filter=UrlEncode::encode($a_filter);
    else
      $this->s_filter='';
  }
}

?>