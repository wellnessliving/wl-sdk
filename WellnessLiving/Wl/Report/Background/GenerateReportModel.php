<?php

namespace WellnessLiving\Wl\Report\Background;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages accumulation of the report.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get() Gets status of the report accumulation.
 * @method WlModelRequest post() Marks the report as needed for display in Generated reports.
 * @method WlModelRequest put()
 */
class GenerateReportModel extends WlModelAbstract
{
  /**
   * Status of the report background generation.
   *
   * <tt>0</tt> in case of report title updating.
   *
   * @get result
   * @put get
   * @var int
   */
  public $id_status = 0;

  /**
   * Whether the report should be displayed in Generated reports.
   *
   * @post get
   * @var bool
   */
  public $is_need_show = false;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * Key of the report file generation.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_report_accumulation;

  /**
   * Title of generated report.
   *
   * @put get
   * @var string
   */
  public $text_title = '';
}

?>