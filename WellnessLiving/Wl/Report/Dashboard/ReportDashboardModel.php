<?php

namespace WellnessLiving\Wl\Report\Dashboard;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Report\Save\ReportSaveModel;

/**
 * API endpoint to manage reports added to a dashboard.
 *
 * <b>Note</b>.
 * Old context and context from {@link ReportSaveModel} is used here because:
 *  - reason to use 'rs.report.save' context: messages should be the same in both implementations (old and new);
 *  - reason to use context from {@link ReportSaveModel}: saving and adding to a dashboard in the old implementation uses the same module.
 *
 * @method WlModelRequest post() Adds new report to a dashboard.  Creates a saved report from the specified title, description, filters and view widget settings and attaches it as a widget to the dashboard identified by {@link \Wl\Report\Dashboard\ReportDashboardApi::$k_report_dashboard}.
 * @method WlModelRequest put() Updates added report to a dashboard.  Rewrites the title, description, filters and view widget settings of the dashboard report identified by {@link \Wl\Report\Dashboard\ReportDashboardApi::$k_report_save} within the current business.
 */
class ReportDashboardModel extends WlModelAbstract
{
  /**
   * Filter raw data of the report.
   *
   * Keys are filter field names, values are the raw filter values.
   *
   * @post post
   * @put post
   * @var array<string, string>
   *
   * @deprecated Use {@link ReportDashboardModel::$json_filter}.
   * This variable do not get empty values of filters from HTML forms.
   */
  public $a_filter;

  /**
   * View widget settings raw data of the saved report.
   *
   * Keys are widget setting names, values are the raw setting values.
   *
   * @post post
   * @put post
   * @var array<string, string>
   */
  public $a_settings;

  /**
   * CID of the controller class.
   *
   * @post post
   * @put post
   * @var int
   */
  public $cid_controller;

  /**
   * Filter raw data of the saved report. Uses to save empty filter values, actual when empty filter is the same as all
   * values are chosen.
   *
   * Use this value instead of {@link ReportDashboardModel::$a_filter}.
   *
   * In this array, key is name of a filter field.
   *
   * @post post
   * @put post
   * @var string
   */
  public $json_filter = '[]';

  /**
   * Business key of the report.
   *
   * @post get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * Report dashboard key to which report should be added.
   *
   * @post post
   * @put post
   * @var string
   */
  public $k_report_dashboard;

  /**
   * Report save key.
   *
   * @put get
   * @var string
   */
  public $k_report_save;

  /**
   * Description of the report.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_description;

  /**
   * Title of the report.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_title;

  /**
   * UID user's key of the actor.
   *
   * @post get
   * @put get
   * @var string
   */
  public $uid_actor;
}

?>