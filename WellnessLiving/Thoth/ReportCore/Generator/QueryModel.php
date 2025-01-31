<?php

namespace WellnessLiving\Thoth\ReportCore\Generator;

use WellnessLiving\WlModelAbstract;

/**
 * Returns content of a report as a table.
 *
 * If report is not yet generated, it gets generated.
 * If the report is being generated now, partial content may be returned.
 */
class QueryModel extends WlModelAbstract
{
  /**
   * A list of dynamic fields in this report.
   *
   * @post result
   * @var array[]|ReportGeneratorFieldInfo[]
   */
  public $a_dynamic;

  /**
   * A list of fields in this report.
   *
   * This array is effectively a title row for table that is returned in {@link QueryModel::$a_row}.
   *
   * @post result
   * @var string[]
   */
  public $a_field;

  /**
   * Report data.
   *
   * This is an indexed array in which one row is an indexed array also.
   *
   * Indexes of the columns correspond columns in {@link QueryModel::$a_field}.
   *
   * @post result
   * @var string[][]
   */
  public $a_row;

  /**
   * A list of stale rows.
   *
   * This array is only filled in when report is being updated now, or due to some other reasons contains mixed version
   * data (some data from the latest generation, and other from one of previous generations).
   *
   * Value is index in {@link QueryModel::$a_row}.
   *
   * If a row is not listed here, it is of the latest version.
   *
   * @post result
   * @var int[]
   */
  public $a_stale;

  /**
   * Warning list of the report.
   *
   * @post result
   * @var string[]
   */
  public $a_warning;

  /**
   * CID of the report to show.
   *
   * @post post
   * @var int
   */
  public $cid_report;

  /**
   * Date and time when this report has completed generation.
   *
   * `null` if generation of this report is not completed.
   *
   * @post result
   * @var string
   */
  public $dtu_complete;

  /**
   * Date and time when this report was put on generation queue.
   *
   * Effectively, this is the time when a user clicked to view this report.
   *
   * @post result
   * @var string
   */
  public $dtu_queue;

  /**
   * Date and time when generation of this report has started.
   *
   * `null` if generation of this report is not started.
   *
   * @post result
   * @var string
   */
  public $dtu_start;

  /**
   * A CAS (compare-and-swap) number that allows to track changes in the report storage.
   *
   * This number is changed every time content of the report gets updated.
   * If this number is not changed, the content is not updated.
   *
   * @post result
   * @var int
   */
  public $i_cas_change;

  /**
   * How many rows of the report to return.
   *
   * `0` to not to return content at all.
   * This may be useful to get metadata of the report.
   *
   * @post post
   * @var int
   */
  public $i_limit = '0';

  /**
   * Offset.
   *
   * How many rows of the report to skip at the beginning of the list.
   *
   * Only return rows after the last skipped row.
   *
   * `0` to return contents from the very beginning.
   *
   * @post post
   * @var int
   */
  public $i_offset = '0';

  /**
   * Status of the report.
   *
   * One of {@link ReportGeneratorStatusSid} constants.
   *
   * @post result
   * @var int
   */
  public $id_report_status;

  /**
   * Defines whether actual or already generated report should be returned.
   *
   * `true` to not attempt search generated report and generate it again.
   * `false` to attempt search generated report.
   *
   * @post post
   * @var bool
   */
  public $is_actual = false;

  /**
   * Whether report is generating for the backend.
   *
   * @post post
   * @var bool
   */
  public $is_backend = false;

  /**
   * Whether this report should be refreshed.
   *
   * `true` to refresh this report if it is already generated.
   * Refreshing of the report may not be queried while report is being generated.
   *
   * `false` to only return contents of the report.
   * If report is not yet generated, it automatically starts the generation in the background.
   *
   * @post post
   * @var bool
   */
  public $is_refresh = '0';

  /**
   * Filters that should be applied to the report.
   *
   * In this array, key is name of a filter field.
   *
   * Name of the property of that subclass corresponds key in this array.
   *
   * @post post
   * @var array
   */
  public $json_filter;

  /**
   * Key of the business which report should be shown.
   *
   * `0` or an empty string for system-wide reports.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * Key of this report.
   *
   * @post result
   * @var string
   */
  public $s_report;

  /**
   * Sorting order.
   *
   * A comma-separated list of fields to sort by.
   *
   * Name of a field may be prepended with a `+` or `-` sign to sort in ascending or descending order.
   * Ascending order is the default.
   *
   * You may sort reports by report fields and by cell fields.
   *
   * To sort by a report field, just specify name of that field.
   *
   * To sort by a cell field, specify name of a report field and name of the cell field.
   * Separate with a dot. For example: <tt>o_account.m_amount</tt>.
   *
   * You may specify a field which contains objects of {@link ReportGeneratorCellAbstract} without
   * specification of a name of a cell field.
   *
   * Example value: <tt>s_first,+s_last,-o_account.m_amount,o_address</tt>.
   *
   * Means the following:
   *
   * * sort by <tt>s_first</tt> in ascending order (which is the default).
   * * sort by <tt>s_last</tt> in ascending order (which is specified explicitly).
   * * sort by <tt>m_amount</tt> field of <tt>o_account</tt> cell in descending order.
   * * sort by default field (i.e. the one marked with &#64;`sort` tag) of <tt>o_address</tt> cell in ascending order.
   *
   * Note that you may not sort by fields that are marked with &#64;`store-no` tag.
   *
   * @post post
   * @var string
   */
  public $s_sort = '';

  /**
   * An SQL query that should be executed on report table.
   *
   * See <tt>namespace.Wl/Report/Generator/doc/report-query-sql.md</tt> for details.
   *
   * Empty string to select all columns of the report table.
   *
   * @post post
   * @var string
   */
  public $s_sql;

  /**
   * Text of an error message that occurred during generation of the report.
   *
   * An empty string in no error messages have occurred.
   *
   * @post result
   * @var string
   */
  public $text_error = '';

  /**
   * Actor user.
   *
   * `0` or an empty string for guests.
   *
   * @post post
   * @var string
   */
  public $uid_actor;
}

?>