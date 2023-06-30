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
   * The report ID. One of the {@link \WellnessLiving\RsReportSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_report = 0;

  /**
   * The report group ID. One of the {@link \WellnessLiving\RsReportGroupSid} constants that describes the time
   * period (day, week, month, or year) for the report to cover.
   *
   * @get get
   * @var int
   */
  public $id_report_group = 0;

  /**
   * The report view ID. One of the {@link \WellnessLiving\RsReportChartViewSid} constants.
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
}

?>