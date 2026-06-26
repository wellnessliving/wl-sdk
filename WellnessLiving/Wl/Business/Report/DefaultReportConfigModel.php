<?php

namespace WellnessLiving\Wl\Business\Report;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Default report configuration API.
 *
 * @method WlModelRequest post() Saves default business report config, and overwrites all customized report configurations for the current user.
 */
class DefaultReportConfigModel extends WlModelAbstract
{
  /**
   * Hidden feature button list.
   *
   * May be an empty array.
   *
   * @post get
   * @var int[]
   */
  public $a_button_hidden = [];

  /**
   * Visible feature button list.
   *
   * May be an empty array.
   *
   * @post get
   * @var int[]
   */
  public $a_button_visible = [];

  /**
   * Selected report date range.
   *
   * @post get
   * @var int
   */
  public $id_report_date;

  /**
   * Does report use preselected date range. If not - open date range page before report generation.
   *
   * @post get
   * @var bool
   */
  public $is_report_date_default;

  /**
   * Whether last generated range should be used instead of generating new report.
   *
   * @post get
   * @var bool
   */
  public $is_report_generate_last;

  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Whether buttons for date range selection should be shown nearby date filter.
   *
   * @post get
   * @var bool
   */
  public $show_button_selection;

  /**
   * User's UID key.
   *
   * @post get
   * @var string
   */
  public $uid;
}

?>