<?php

namespace WellnessLiving\Wl\Business\Report;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * The report configuration API.
 *
 * @method WlModelRequest get() Returns the specified report configuration for the specified user within the specified business.
 * @method WlModelRequest post() Saves report configuration for specified user within specified business.
 */
class ReportConfigModel extends WlModelAbstract
{
  /**
   * Hidden feature button list.
   *
   * May be an empty array. Order of items is relevant.
   * <tt>null</tt> if configuration is not save.
   *
   * @get result
   * @post post
   * @var int[]|null
   */
  public $a_button_hidden;

  /**
   * Visible feature button list.
   *
   * May be an empty array. Order of items is relevant.
   * <tt>null</tt> if configuration is not save.
   *
   * @get result
   * @post post
   * @var int[]|null
   */
  public $a_button_visible;

  /**
   * Hidden cell list.
   *
   * @get result
   * @post post
   * @var string[]
   */
  public $a_cell_hidden;

  /**
   * Visible cell list. Order of items is relevant.
   *
   * @get result
   * @post post
   * @var string[]
   */
  public $a_cell_visible;

  /**
   * The report CID.
   *
   * @get get
   * @post get
   * @var int
   */
  public $cid_report;

  /**
   * Selected report date range.
   *
   * <tt>null</tt> if configuration is not save.
   *
   * @get result
   * @post post
   * @var int|null
   */
  public $id_report_date;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * The key of the saved report.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_report_save;

  /**
   * Whether to show extended client details in the client info cell.
   *
   * <tt>null</tt> if report doesn't have a client cell.
   *
   * @get result
   * @post post
   * @var bool|null
   */
  public $show_client_details;

  /**
   * User's UID key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid;
}

?>