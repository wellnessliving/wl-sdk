<?php

namespace WellnessLiving\Wl\Report\Dashboard;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API point to load dashboard data.
 *
 * @method WlModelRequest get() Loads dashboard data.
 */
class DashboardModel extends WlModelAbstract
{
  /**
   * Dashboard data.
   *
   * @get result
   * @var array
   */
  public $a_dashboard_data = [];

  /**
   * Business key of the report.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Report dashboard key to which report should be added.
   *
   * @get get
   * @var string
   */
  public $k_report_dashboard = '';
}

?>