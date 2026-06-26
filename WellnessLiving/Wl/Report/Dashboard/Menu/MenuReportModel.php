<?php

namespace WellnessLiving\Wl\Report\Dashboard\Menu;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Report\WlReportSid;

/**
 * List of dashboards for menu in report.
 *
 * @method WlModelRequest get()
 */
class MenuReportModel extends WlModelAbstract
{
  /**
   * List of dashboards for report.
   *
   * @get result
   * @var array
   */
  public $a_dashboard;

  /**
   * Report ID (one of {@link WlReportSid} constant for old generation reports) or CID report controller
   *
   * @get get
   * @var int
   */
  public $id_report;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Report save key.
   *
   * @get get
   * @var string
   */
  public $k_report_save;

  /**
   * User key.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>