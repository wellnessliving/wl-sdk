<?php

namespace WellnessLiving\Thoth\ReportCore\QueryEngine\Report;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns per-report column metadata for the SQL report SPA.
 *
 * Returns the runtime column metadata for the SQL report SPA.
 *
 * Because {@link \Thoth\ReportCore\QueryEngine\Report\ReportQueryReportRow} has no static property annotations, the compile-time
 *  column metadata cache (`Wl_Report_View_Row_a_field`) is empty. This API gives the SPA the
 *  live column list (SELECT aliases, format hints) so it can populate `rowField()` and the
 *  customization form at runtime without relying on any compile-time field registration.
 *
 * The response also tells the SPA whether the SQL references date-filter
 *  placeholders (`dl_start` / `dl_end` - with `@` in the begining) -- driving date-filter visibility -- and which
 *  user-facing `placeholder` variables exist in the WHERE clause so the SPA can inject
 *  filter inputs for them.
 *
 * @method WlModelRequest get()
 */
class ReportQueryColumnMetaModel extends WlModelAbstract
{
  /**
   * Parsed action schema for the report row menu, or empty array when no actions are configured.
   *
   * Populated from the `json_actions` column of {@link \Thoth\ReportCore\QueryEngine\Registry\ReportQuerySql}
   *
   * Each element describes one action visible in the 3-dot row menu: 
   *
   * <dl>
   *   <dt>array `a_key_map`</dt>
   *   <dd>Map of action parameter name to SELECT alias used to extract the value from the row.</dd>
   * 
   *   <dt>bool `is_confirm`</dt>
   *   <dd>`true` if a confirmation modal must appear before executing the action.</dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>
   *
   *   </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Human-readable menu item label shown in the row menu.</dd>
   * 
   *   <dt>string `s_url_api`</dt>
   *   <dd>API endpoint URL for `api`-type actions. Empty string for `link` actions.</dd>
   * 
   *   <dt>string `s_url_template`</dt>
   *   <dd>URL template with `{param}` placeholders for `link`-type actions. Empty string for `api` actions.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_action_schema = [];

  /**
   * Active column metadata. One entry per SELECT-clause column, in SELECT order.
   *
   * Each entry: 
   *
   * Empty array if the registry record is missing, inactive, or the SQL cannot be parsed.
   *
   * <dl>
   *   <dt>string `s_slot`</dt>
   *   <dd>
   *     Clean column alias (format suffix stripped), matching the key used in
   *    {@link \Thoth\ReportCore\Generator\ReportGeneratorRowAbstract::$a_dynamic} and the
   *    `s_
   *    Example: `m_amount` for raw alias `m_amount.formatMoney`.
   *   </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Human-readable column title (same value as `s_slot` unless a custom title is added later).</dd>
   * 
   *   <dt>string|null `s_format`</dt>
   *   <dd>Format hint extracted from the alias (`Money`, `Date`, ...); `null` if absent.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_column = [];

  /**
   * Names of `@placeholder` variables found in the WHERE clause, in order of appearance.
   *
   * Excludes:
   * - Context-injected placeholders (those whose
   *    {@link \Thoth\ReportCore\QueryEngine\Placeholder\QueryEnginePlaceholderAbstract::FILTER_FIELD_CLASS}
   *    equals {@link \Thoth\ReportCore\QueryEngine\Placeholder\QueryEnginePlaceholderAbstract::CONTEXT_INJECTED}),
   *    e.g. `@business`, `@actor`, `@dl_end`.
   * - Date-filter placeholders (`@dl_start`, `@dl_end`): already surfaced via `has_date_filter`
   *    and rendered by the dedicated date picker widget, not as generic text inputs.
   *
   * Unregistered placeholder names (not in the registry) are included as-is - the SPA renders
   *  a generic text input for them as a fallback.
   * Empty array when there are no user-facing placeholders or the SQL has no WHERE clause.
   *
   * @get result
   * @var string[]
   */
  public $a_placeholder = [];

  /**
   * Parsed totals configuration loaded from
   *  the `json_
   * One entry per total card, in the order they appear in `json_totals`.
   * Empty array when no totals are configured.
   *
   * Each entry: 
   *
   * <dl>
   *   <dt>string `s_function`</dt>
   *   <dd>Aggregation function: 'AVG', 'COUNT', 'MAX', 'MIN', or 'SUM'.</dd>
   * 
   *   <dt>string `text_label`</dt>
   *   <dd>Human-readable label for the summary card.</dd>
   * 
   *   <dt>string|null `s_alias`</dt>
   *   <dd>Clean column alias to aggregate. `null` for COUNT-all.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_totals_config = [];

  /**
   * `true` if the SQL references `dl_start` or `dl_end` (with `@` at the beginning) placeholders (i.e. it wants date
   *  filtering); `false` otherwise. Drives date-filter widget visibility on the SPA side.
   *
   * @get result
   * @var bool
   */
  public $has_date_filter = false;

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

  /**
   * Human-readable title of the report instance (from the registry record).
   * Empty string when the record is missing or inactive.
   *
   * @get result
   * @var string
   */
  public $text_title = '';
}

?>