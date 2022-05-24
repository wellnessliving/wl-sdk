<?php

namespace WellnessLiving\Wl\Report;

use WellnessLiving\WlAssertException;
use WellnessLiving\WlModelAbstract;

/**
 * Report information.
 */
class DataModel extends WlModelAbstract
{
  /**
   * Report content information.
   *
   * Content of this array completely depends on the report that is loaded.
   *
   * @get result
   * @var array
   */
  public $a_data=[];

  /**
   * Page number. Starts from zero!
   *
   * @get get
   * @var int
   */
  public $i_page = 0;

  /**
   * Report ID. One of {@link \WellnessLiving\Wl\Report\WlReportSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_report = 0;

  /**
   * Report group ID. One of {@link \WellnessLiving\Wl\Report\WlReportGroupSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_report_group = 0;

  /**
   * Report view ID. One of {@link \WellnessLiving\Wl\Report\WlReportChartViewSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_report_view = 0;

  /**
   * Key of business for which report must be generated.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Filter settings in encoded format.
   *
   * Do not set this field directly. Use {@link \WellnessLiving\Wl\Report\DataModel::filterSet()} to set filter.
   *
   * @get get
   * @var string
   */
  public $s_filter = '';

  /**
   * Way for sorting report data.
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
   * @param array $a_filter Report filters. Key is filter variable name, value is its value.
   * @throws WlAssertException In a case of an assertion.
   */
  public function filterSet(array $a_filter):void
  {
    if(count($a_filter))
      $this->s_filter=UrlEncode::encode($a_filter);
    else
      $this->s_filter='';
  }
}

?>