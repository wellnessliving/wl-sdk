<?php

namespace WellnessLiving\Wl\Integration\Autymate;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves all daily transactions for a business using the All Transactions report.
 */
class ReportModel extends WlModelAbstract
{
  /**
   * A list of fields in this report.
   *
   * This array is effectively a title row for table that is returned in {@link \WellnessLiving\Wl\Integration\Autymate\ReportModel::$a_row}.
   *
   * @get result
   * @var string[]
   */
  public $a_field;

  /**
   * Report data.
   *
   * This is an indexed array in which one row is an indexed array also.
   *
   * Indexes of the columns correspond columns in {@link \WellnessLiving\Wl\Integration\Autymate\ReportModel::$a_field}.
   *
   * @get result
   * @var string[][]
   */
  public $a_row;

  /**
   * Warning list of the report.
   *
   * @get result
   * @var string[]
   */
  public $a_warning;

  /**
   * Date in local time to retrieve transactions for.
   *
   * @get get
   * @var string
   */
  public $dl_date = '';

  /**
   * The page of the report, starting from 0.
   *
   * @get get
   * @var int
   */
  public $i_page=0;

  /**
   * Status of the report.
   *
   * One of {@link \Wl\Report\Generator\ReportGeneratorStatusSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_report_status;

  /**
   * If <tt>true</tt> then there are more report rows to get. Otherwise <tt>false</tt>, all rows are sent.
   *
   * @get result
   * @var bool
   */
  public $is_more;

  /**
   * Whether this report should be refreshed.
   *
   * `true` to refresh this report if it is already generated.
   * Refreshing of the report may not be queried while report is being generated.
   *
   * `false` to only return contents of the report.
   * If report is not yet generated, it automatically starts the generation in the background.
   *
   * @get get
   * @var bool
   */
  public $is_refresh;

  /**
   * Key of the business for which report must be generated.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Randomly generated 32 character string use to authenticate requests.
   *
   * @get get
   * @var string
   */
  public $s_guid = '';

  /**
   * User's key.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}
?>