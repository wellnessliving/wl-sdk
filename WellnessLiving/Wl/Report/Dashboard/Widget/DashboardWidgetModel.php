<?php

namespace WellnessLiving\Wl\Report\Dashboard\Widget;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages dashboard widgets.
 *
 * @method WlModelRequest delete() Deletes dashboard widget.
 * @method WlModelRequest put() Sets widget collapse state.
 */
class DashboardWidgetModel extends WlModelAbstract
{
  /**
   * Widget keys list for update collapse state.
   *
   * @put post
   * @var string[]
   */
  public $a_report_dashboard_widget = [];

  /**
   * Whether dashboard widget is collapsed.
   *
   * @put post
   * @var bool
   */
  public $is_collapsed = false;

  /**
   * Business key.
   *
   * @delete get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * Widget key.
   *
   * Use {@link DashboardWidgetModel::$a_report_dashboard_widget} to update collapse state of multiple widgets.
   *
   * @delete get
   * @put get
   * @var string
   */
  public $k_report_dashboard_widget;

  /**
   * User key.
   *
   * @delete get
   * @put get
   * @var string
   */
  public $uid;
}

?>