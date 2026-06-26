<?php

namespace WellnessLiving\Wl\Report\Dashboard\Widget;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Report\WlReportPageSid;
use WellnessLiving\Wl\Report\WlReportSid;

/**
 * Handles list of widgets(reports) available to be put on a dashboard.
 *
 * @method WlModelRequest get() Gets list of widgets (reports) that can be placed on a dashboard.
 * @method WlModelRequest put() Saves order of widgets on a dashboard.
 */
class DashboardWidgetListModel extends WlModelAbstract
{
  /**
   * List of report categories available to the user and that have at least 1 widget in the <var>a_widget_list</var> below. Each item has the following structure:
   *
   * <dl>
   *   <dt>int `i_sort`</dt>
   *   <dd>Category sort order.</dd>
   * 
   *   <dt>int `id_report_category`</dt>
   *   <dd>Category ID.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Category title.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_category_list;

  /**
   * List of widget keys in the order they should be displayed.
   *
   * @put get
   * @var string[]
   */
  public $a_report_dashboard_widget = [];

  /**
   * List of widgets that should be pre-selected by default for a new dashboard. Each item is an array with the following structure:
   *
   * <dl>
   *   <dt>int `i_report_widget`</dt>
   *   <dd>
   *     Widget content identifier. Depending on <var>id_report_widget</var> may be one of {@link WlReportSid}, {@link WlReportPageSid}, or primary key in {@link \RsReportSaveSql} table.
   *   </dd>
   * 
   *   <dt>int `i_sort`</dt>
   *   <dd>Widget order within its category.</dd>
   * 
   *   <dt>int `id_report_widget`</dt>
   *   <dd>Widget type.</dd>
   * 
   *   <dt>string `text_widget_key`</dt>
   *   <dd>Unique key of the widget. Composite of <var>id_report_widget</var> and <var>i_report_widget</var>.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_widget_default_list;

  /**
   * List of available widgets. Each item is an array with the following structure:
   *
   * <dl>
   *   <dt>int[] `a_report_category`</dt>
   *   <dd>List of report categories this widget belongs to.</dd>
   * 
   *   <dt>int `i_report_widget`</dt>
   *   <dd>
   *     Widget content identifier. Depending on <var>id_report_widget</var> may be one of {@link WlReportSid}, {@link WlReportPageSid}, or primary key in {@link \RsReportSaveSql} table.
   *   </dd>
   * 
   *   <dt>int `i_sort`</dt>
   *   <dd>Widget order within its category.</dd>
   * 
   *   <dt>int `id_report_widget`</dt>
   *   <dd>Widget type.</dd>
   * 
   *   <dt>string `text_widget_key`</dt>
   *   <dd>Unique key of the widget. Composite of <var>id_report_widget</var> and <var>i_report_widget</var>.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Widget title.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_widget_list;

  /**
   * Business key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Dashboard key to update.
   *
   * `null` if not specified.
   *
   * @put get
   * @var string|null
   */
  public $k_report_dashboard = null;

  /**
   * User key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $uid = '';
}

?>