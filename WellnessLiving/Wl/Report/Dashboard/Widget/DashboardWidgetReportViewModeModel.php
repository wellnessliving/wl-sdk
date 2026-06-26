<?php

namespace WellnessLiving\Wl\Report\Dashboard\Widget;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages dashboard widget report view mode.
 *
 * @method WlModelRequest put() Sets widget collapse state.
 */
class DashboardWidgetReportViewModeModel extends WlModelAbstract
{
  /**
   * Widget keys list for update collapse state.
   *
   * @put post
   * @var string[]
   */
  public $a_report_dashboard_widget = [];

  /**
   * Whether report is in full view mode.
   *
   * @put post
   * @var bool
   */
  public $is_report_view_full = false;

  /**
   * Business key.
   *
   * @delete get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Widget key.
   *
   * Use {@link DashboardWidgetModel::$a_report_dashboard_widget} to update collapse state of multiple widgets.
   *
   * @delete get
   * @put get
   * @var string
   */
  public $k_report_dashboard_widget = '';

  /**
   * User key.
   *
   * @delete get
   * @put get
   * @var string
   */
  public $uid = '';
}

?>