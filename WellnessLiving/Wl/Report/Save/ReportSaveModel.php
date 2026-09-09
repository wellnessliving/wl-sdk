<?php

namespace WellnessLiving\Wl\Report\Save;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\RsReportCategorySid;

/**
 * API endpoint to manage saved reports.
 *
 * @method WlModelRequest get() Returns information about saved report.  Loads the title, description, category and stored filters of the saved report identified by {@link \Wl\Report\Save\ReportSaveApi::$k_report_save} within the current business.
 * @method WlModelRequest post() Saves new saved report.  Creates a new saved report for the current business from the specified title, description, category, filters and view widget settings, and stores the related customization for the report controller.
 * @method WlModelRequest put() Updates existing saved report.  Rewrites the title, description, category, filters and view widget settings of the saved report identified by {@link \Wl\Report\Save\ReportSaveApi::$k_report_save} within the current business.
 */
class ReportSaveModel extends WlModelAbstract
{
  /**
   * Filter raw data of the saved report.
   *
   * Keys are filter field names, values are the raw filter values.
   *
   * @get result
   * @post post
   * @put post
   * @var array<string, string>
   *
   * @deprecated Use {@link ReportSaveModel::$json_filter}.
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
   * Report category of the saved report.
   *
   * One of the {@link RsReportCategorySid} constants.
   *
   * @get result
   * @post post
   * @put post
   * @var int
   */
  public $id_report_category;

  /**
   * Filter raw data of the saved report. Uses to save empty filter values, actual when empty filter is the same as all
   * values are chosen.
   *
   * Use this value instead of {@link ReportSaveModel::$a_filter}.
   *
   * In this array, key is name of a filter field.
   *
   * @post post
   * @put post
   * @var string
   */
  public $json_filter = '';

  /**
   * Business key of the saved report.
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * Report save key used as a base configuration when saving a new report.
   *
   * @post post
   * @var string
   */
  public $k_report_config;

  /**
   * Report save key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_report_save;

  /**
   * Description of the saved report.
   *
   * @get result
   * @post post
   * @put post
   * @var string
   */
  public $text_description;

  /**
   * Title of the saved report.
   *
   * @get result
   * @post post
   * @put post
   * @var string
   */
  public $text_title;

  /**
   * UID user's key of the actor.
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $uid_actor;
}

?>