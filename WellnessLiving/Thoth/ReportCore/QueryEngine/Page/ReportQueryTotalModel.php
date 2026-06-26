<?php

namespace WellnessLiving\Thoth\ReportCore\QueryEngine\Page;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns computed aggregate totals for a SQL report record.
 *
 * Reads the `json_totals` config from the registry, executes the report SQL across all
 *  partitions of the first table, and aggregates each configured summary card via
 *
 * Returns an empty array when the record is missing, inactive, has no totals configured,
 *  or when the SQL cannot be parsed.
 *
 * @method WlModelRequest get()
 */
class ReportQueryTotalModel extends WlModelAbstract
{
  /**
   * Filter values forwarded to the executor context. Accepts date-range keys
   *  (`dl_start`, `dl_end` as `'YYYY-MM-DD'`) and any user-facing `@placeholder` variables.
   *
   * @get get
   * @var array
   */
  public $a_filter = [];

  /**
   * Computed totals. One entry per configured total card.
   * Empty array when the report has no totals configured or the report is inactive/missing.
   *
   * Each entry: 
   *
   * <dl>
   *   <dt>string `text_label`</dt>
   *   <dd>Human-readable label for the card (from `json_totals`).</dd>
   * 
   *   <dt>string `s_value`</dt>
   *   <dd>Computed aggregate value formatted as a string.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_total = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Report query key.
   *
   * @get get
   * @var string
   */
  public $k_report_query = '';
}

?>