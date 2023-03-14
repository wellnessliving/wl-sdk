<?php

namespace WellnessLiving\Wl\Report;

use WellnessLiving\WlAssertException;
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
  public $a_data=[];

  /**
   * The page of results to show, starting at zero. The API will return 256 results per page.
   *
   * @get get
   * @var int
   */
  public $i_page = 0;

  /**
   * The report ID. One of the {@link \WellnessLiving\Wl\Report\WlReportSid} constants. The following reports are currently
   * available:
   * <table>
   *   <tr><th>ID Name</td><th>ID Number</th><th>Name and Description</th></tr>
   *   <tr><td>LOGIN_LIST</td><td>22</td><td>All Clients Report (Reports tab, features date search)</td></tr>
   *   <tr><td>LOGIN_LIST_ALL</td><td>33</td><td>All Clients Report (Clients tab) Batch Report</td></tr>
   *   <tr><td>PAY_TRANSACTION_BATCH</td><td>77</td><td>Batch Report</td></tr>
   *   <tr><td>PURCHASE_ITEM_LIST_USER</td><td>118</td><td>Sales per Client Report</td></tr>
   *   <tr><td>PURCHASE_ITEM_ACCRUAL_CASH</td><td>123</td><td>All Sales Report</td></tr>
   *   <tr><td>PURCHASE_ITEM_ACCRUAL_SUMMARY</td><td>133</td><td>Sales Summary</td></tr>
   * </table>
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
   * Filter settings in an encoded format.
   *
   * Don't set this field directly. Use {@link \WellnessLiving\Wl\Report\DataModel::filterSet()} to set the filter.
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
   * @throws WlAssertException Used in case of an assertion.
   */
  public function filterSet(array $a_filter)
  {
    if(count($a_filter))
      $this->s_filter=UrlEncode::encode($a_filter);
    else
      $this->s_filter='';
  }
}

?>