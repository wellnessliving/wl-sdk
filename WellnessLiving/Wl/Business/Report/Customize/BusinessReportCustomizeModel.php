<?php

namespace WellnessLiving\Wl\Business\Report\Customize;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Report\WlReportPageSid;
use WellnessLiving\Wl\Report\WlReportSid;

/**
 * Processes requests of the report customization.
 *
 * @method WlModelRequest get() Returns the report config.
 * @method WlModelRequest post() Saves the report config.
 */
class BusinessReportCustomizeModel extends WlModelAbstract
{
  /**
   * Button config.
   *
   * @get result
   * @post post
   * @var array
   */
  public $a_button;

  /**
   * Config of the report columns.
   *
   * <dl>
   *   <dt>string[] `a_hide`</dt>
   *   <dd>Column name list of the hidden columns and available in the report.</dd>
   * 
   *   <dt>string[] `a_visible`</dt>
   *   <dd>Column name list of the visible columns and available in the report.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_column;

  /**
   * Selected columns of the report.
   *
   * @post post
   * @var string[]
   */
  public $a_column_selected;

  /**
   * List of the available report dates.
   *
   * <dl>
   *   <dt>bool `is_select`</dt>
   *   <dd>Whether the report date is selected.</dd>
   * 
   *   <dt>string `sid_report_date`</dt>
   *   <dd>Report date SID.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Title of the report date.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_report_date;

  /**
   * Whether that the report has a client column.
   *
   * @get result
   * @var bool
   */
  public $has_client;

  /**
   * Report ID. One of the {@link WlReportSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_report;

  /**
   * Default report date ID.
   *
   * `null` if default report date is not defined.
   *
   * @get result
   * @var int
   */
  public $id_report_date_default;

  /**
   * Report page ID. One of the {@link WlReportPageSid} constants.
   *
   * <tt>null</tt> if report is rendered in a single report collection.
   *
   * @get get
   * @var int
   */
  public $id_report_page;

  /**
   * Whether predefined filter should be generated or user should select filter prior to generate report.
   *
   * @get result
   * @post get
   * @var bool
   */
  public $is_report_date_default;

  /**
   * Whether last generated date range should be opened by default.
   *
   * @get result
   * @post get
   * @var bool
   */
  public $is_report_generate_last;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Report save key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_report_save;

  /**
   * Whether buttons for date range selection should be shown nearby date filter.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $show_button_selection;

  /**
   * Whether that client details information should be shown.
   *
   * @get result
   * @post post
   * @var string
   */
  public $show_client_details;

  /**
   * Selected report date SID.
   *
   * @post post
   * @var string
   */
  public $sid_report_date;

  /**
   * Selected report date range SID.
   *
   * @post post
   * @var string
   */
  public $sid_report_date_range;

  /**
   * User key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid;
}

?>