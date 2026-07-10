<?php

namespace WellnessLiving\Thoth\ReportCore\QueryEngine\Report\Customization;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Loads and saves customization form data scoped to a specific SQL query report.
 *
 * Extends {@link CustomizationFormApi} to add {@link ReportQueryCustomizationFormModel::$k_report_query}, which isolates
 *  customization settings (visible buttons, date range, report generation mode) per SQL query
 *  instead of sharing them across all SQL reports for the same business and user.
 *
 * When {@link ReportQueryCustomizationFormModel::$k_report_query} is set, the per-query customization row is loaded first;
 *  if no per-query row exists, the generic shared row is used as a fallback so existing
 *  settings are preserved after the first deployment.
 *
 * @method WlModelRequest get()
 * @method WlModelRequest post()
 */
class ReportQueryCustomizationFormModel extends WlModelAbstract
{
  /**
   * Customization form data.
   *
   * @get result
   * @post post
   * @var array
   */
  public $a_customization_form = [];

  /**
   * Report page CID.
   *
   * @get get
   * @post get
   * @var int
   */
  public $cid_page = 0;

  /**
   * Page CID.
   *
   * @get get
   * @post get
   * @var int
   */
  public $cid_report = 0;

  /**
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * SQL query primary key.
   *
   * Scopes the customization record to a specific SQL query.
   * `null` loads the generic shared row as a backward-compatible fallback.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_report_query = null;

  /**
   * <tt>null</tt> means that report is not saved.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_report_save = null;

  /**
   * Report CID list to that page customization form must be converted. String separated with <tt>,</tt>.
   *
   * @get get
   * @var string
   */
  public $s_report = '';

  /**
   * @get get
   * @post get
   * @var string
   */
  public $uid_actor = '0';
}

?>