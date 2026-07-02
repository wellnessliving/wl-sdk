<?php

namespace WellnessLiving\Thoth\ReportCore\Generator;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns content of a report as a table.
 *
 * If report is not yet generated, it gets generated.
 * If the report is being generated now, partial content may be returned.
 *
 * @method WlModelRequest post() Returns contents of a report as a table.  If the report is not yet generated, it gets generated. If the report is being generated now, partial content may be returned.
 */
class QueryModel extends WlModelAbstract
{
  /**
   * A list of dynamic fields in this report.
   *
   * <dl>
   *   <dt>Thoth\ReportCore\Generator\ReportGeneratorFieldInfo[] `a_cell`</dt>
   *   <dd>
   *     Fields of the complex cell.
   * 
   * 
   *   </dd>
   * 
   *   <dt>array[] `a_customization_element`</dt>
   *   <dd>
   *     Elements of a customization from that are required by this filter field.
   * Keys are names of required form elements; values are classes of this elements.
   *   </dd>
   * 
   *   <dt>array `a_type`</dt>
   *   <dd>
   *     A list of scalar types of values that this field can get.
   * 
   * Only scalar types are listed here.
   *
   * 
   * Key is name of a scalar type. Value is always `true`.
   * 
   * The following scalar types are possible:
   * 
   * * `string`
   * * `int`
   * * `float`
   * * `bool`
   * * `array` (only allowed for values cells, not for report fields)
   * 
   * Empty array if scalar types are not acceptable.
   *
   *   </dd>
   * 
   *   <dt>bool `is_dynamic`</dt>
   *   <dd>
   *     Whether this field is dynamic or static.
   * 
   * `true` if this field is generated dynamically.
   * 
   * 
   * `false` if this field corresponds to a regular property.
   * 
   *   </dd>
   * 
   *   <dt>bool|null `is_export`</dt>
   *   <dd>
   *     Whether this field is used for export.
   * 
   * <tt>true</tt> if this field is used for export.
   * 
   * <tt>false</tt> if this field is only used for rendering of the report.
   * 
   * 
   *   </dd>
   * 
   *   <dt>bool `is_hide_by_default`</dt>
   *   <dd>
   *     Whether this field should be hidden by default. It can later be shown by using the customization form.
   * 
   * `true` if this field should be hidden by default.
   * 
   * `false` if this field should be shown by default.
   *   </dd>
   * 
   *   <dt>bool `is_hide_if_empty`</dt>
   *   <dd>
   *     Whether this field should be hidden if the entire column is empty.
   * 
   * <b>Note: Currently only implemented in the export. If you need this to affect the HTML report, you will need to
   * implement that!</b>
   * 
   * `true` if this field should be hidden if the entire column is empty.
   * `false` if this field should be shown if the entire column is empty.
   *   </dd>
   * 
   *   <dt>bool `is_null`</dt>
   *   <dd>
   *     Whether this field is nullable.
   * 
   * `true` if `null` is an allowed value for this field.
   * 
   * `false` if `null` is not allowed.
   *   </dd>
   * 
   *   <dt>bool|null `is_order`</dt>
   *   <dd>
   *     Whether the ordering by this field is available.
   * 
   * `null` means that value is not initialized.
   * 
   * For dynamic fields should be set manually.
   *   </dd>
   * 
   *   <dt>bool `is_show`</dt>
   *   <dd>
   *     Whether this field should be shown during report render.
   * 
   * `true` if this field should be shown during report render.
   * 
   * `false` if this field should not be shown during report render.
   * 
   * By default, all fields are shown.
   * To not to show a field, it should be marked with &#64;`show-no` tag.
   *   </dd>
   * 
   *   <dt>bool `is_store`</dt>
   *   <dd>
   *     Whether this field is stored in the report storage.
   * 
   * 
   *   </dd>
   * 
   *   <dt>string|null `s_cast`</dt>
   *   <dd>
   *     Argument for the MySQL function `cast()`.
   * 
   * Allows treating value of the field as certain type, which is required for proper ordering.
   * For example, keys can be string and can be numbers.
   * If key is a number, it should have cast value as `unsigned`.
   * If key is a string, cast can be left null, because string will be used by default.
   * 
   * `null` value should be determined based on the prefix.
   *   </dd>
   * 
   *   <dt>class-string<Thoth\ReportCore\Generator\ReportGeneratorCellAbstract>|null `s_class`</dt>
   *   <dd>
   *     Name of a cell class.
   * 
   * 
   * `null` if complex types are not acceptable (in this case
   *
   *   </dd>
   * 
   *   <dt>string `s_class_css`</dt>
   *   <dd>CSS class that is used for formatting of this field.
   * This class will be added to the column header.</dd>
   * 
   *   <dt>string|null `s_format`</dt>
   *   <dd>
   *     Name of formatting method that is used for formatting of this field during export.
   *
   * In this case formatting methods may be specified for individual properties of that class.
   * 
   * `null` if no additional formatting should be performed during export.
   * 
   * See <tt>namespace.Wl/Report/Generator/doc/report-export-format.md</tt> for details.
   *   </dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>
   *     Name of a public property in which value of this field is stored.
   * 
   * 
   *   </dd>
   * 
   *   <dt>string `s_sort`</dt>
   *   <dd>
   *     A string by which report columns are sorted.
   * 
   * Sorting is only considered for report fields, but not for fields of a report cell.
   * 
   * 
   * Having different order leads to that all indexes are changed.
   *   </dd>
   * 
   *   <dt>string `s_type`</dt>
   *   <dd>
   *     Type of this field, as specified in its PHP doc.
   * 
   * Copy of value of &#64;`var` tag of the field.
   * 
   * This value may not be specified for dynamic columns.
   *   </dd>
   * 
   *   <dt>string|null `text_title`</dt>
   *   <dd>
   *     Data to derive title of a column which values are represented by this report field.
   * 
   * 
   * 
   *   For dynamic columns, it is required that this title be set.
   *   In this case this is not a source for a translated message.
   * 
   *   `null` for cell properties, because cells properties are not shown as individual columns in the report.
   *   `null` is also set if this field should not be show. 
   * </i>
   *   </dd>
   * 
   *   <dt>string|null `text_title_export`</dt>
   *   <dd>
   *     Title of this field that is used during export.
   * 
   * Copy of &#64;`title-export` tag.
   * If &#64;`title-export` tag is not provided, this property contains copy of
   *
   * 
   * For report cells, if &#64;`title-export` tag is not set, source for translated message for this property is based
   * on concatenation of {@link \Thoth\ReportCore\Generator\ReportGeneratorFieldInfo::$s_name} for report row field and report
   * cell field.
   *
   *   </dd>
   * 
   *   <dt>string|null `text_title_info`</dt>
   *   <dd>Text of the cell info tooltip.</dd>
   * </dl>
   * @post result
   * @var array[]
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
   * @post post
   * @var string
   */
  public $json_filter = '[]';

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