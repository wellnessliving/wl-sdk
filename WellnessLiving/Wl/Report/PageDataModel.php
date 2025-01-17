<?php

namespace WellnessLiving\Wl\Report;

use WellnessLiving\WlModelAbstract;

/**
 * Returns collection of the reports.
 */
class PageDataModel extends WlModelAbstract
{
  /**
     * List of the reports contents. Key is the report id from {@link WlReportSid}, value is report contents.
     * Contents can vary based on the report that's loaded.
     *
     * @get result
     * @var array[]
     *
     */
  public $a_data;

  /**
     * The page of results to show for each report in collection, starting at zero (set by default). The API will return
     * 256 results per page. Key is report id from {@link WlReportSid}, value is the page of results.
     *
     * @get get
     * @var int[]
     */
  public $a_page = [];

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
     * The collection of that page will be used to get list of reports.
     *
     * The following report collections are currently available via the API:
     * * PROFILE_PURCHASE (ID 11) Collection with reports from client profile: memberships, packages, session/duration
     * passes, single sessions, events, gift cards and groupon.
     *
     * @get get
     * @var int
     */
  public $id_report_page = 0;

  /**
     * The report view ID. One of the {@link WlReportChartViewSid} constants.
     *
     * @get get
     * @var int
     */
  public $id_report_view = 0;

  /**
     * The key of business for which the report collection must be generated.
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