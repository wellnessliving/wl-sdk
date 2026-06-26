<?php

namespace WellnessLiving\Thoth\ReportCore\QueryEngine\Page;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns the schema descriptor used by the SQL editor autocomplete.
 *
 * Exposes the list of registered tables (with columns, PHP types, and PHPDoc hints),
 *  the list of supported format hints, and the list of built-in `@placeholder` variables.
 * The response is consumed by the `Thoth_ReportCore_QueryEngine_Page_List_CrudPanelEditor` JavaScript class to power
 *  context-aware suggestions in the SQL field of the Create/Edit report form.
 *
 * @method WlModelRequest get()
 */
class ReportQuerySchemaModel extends WlModelAbstract
{
  /**
   * Registered row actions available for use in `json_actions`.
   *
   * Each entry: 
   *
   * <dl>
   *   <dt>string `s_name`</dt>
   *   <dd>Unique action name used in `json_actions` as `s_action`.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Human-readable menu item label shown to the user.</dd>
   * 
   *   <dt>string[] `a_key_names`</dt>
   *   <dd>Required SELECT column aliases that must be present in the SQL query for this action.</dd>
   * 
   *   <dt>bool `is_confirm`</dt>
   *   <dd>`true` if a confirmation modal must appear before executing the action.</dd>
   * 
   *   <dt>string `s_action_type`</dt>
   *   <dd>`'api'` for backend API call, or `'link'` for URL navigation.</dd>
   * 
   *   <dt>string `text_usage`</dt>
   *   <dd>Plain-text usage hint describing the action and required SQL columns.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_action = [];

  /**
   * Supported format hints for SELECT-alias dot-suffixes.
   *
   * Each entry: 
   *
   * <dl>
   *   <dt>string `s_name`</dt>
   *   <dd>Hint name including the `format` prefix (e.g. `formatMoney`).</dd>
   * 
   *   <dt>string `text_hint`</dt>
   *   <dd>Human-readable description shown in the autocomplete popup.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_format = [];

  /**
   * Built-in `@placeholder` variables supported by all tables that honour date-range filtering.
   *
   * Each entry: 
   *
   * <dl>
   *   <dt>string `s_name`</dt>
   *   <dd>Placeholder name without the leading `@` (e.g. `dl_start`).</dd>
   * 
   *   <dt>string `text_hint`</dt>
   *   <dd>Human-readable description shown in the autocomplete popup.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_placeholder = [];

  /**
   * Registered tables keyed by SQL table name.
   *
   * Each value: 
   *
   * <dl>
   *   <dt>bool `is_first_allowed`</dt>
   *   <dd>`true` if the table may be used as the first (driving) table in FROM.</dd>
   * 
   *   <dt>bool `has_date_filter`</dt>
   *   <dd>`true` if the table honours `@dl_start`/`@dl_end` placeholders.</dd>
   * 
   *   <dt>array `a_column`</dt>
   *   <dd>
   *     Column descriptors. Each:
   *     <dl>
   *       <dt>string `s_name`</dt>
   *       <dd>Column name as used in SQL.</dd>
   * 
   *       <dt>string `s_type`</dt>
   *       <dd>PHP type name (`int`, `string`, ...).</dd>
   * 
   *       <dt>string `text_hint`</dt>
   *       <dd>Human-readable description from PHPDoc.</dd>
   *     </dl>
   *   </dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_table = [];

  /**
   * Supported aggregate functions for the `json_totals` field.
   *
   * Each entry: 
   *
   * <dl>
   *   <dt>string `s_function`</dt>
   *   <dd>Aggregate function name (e.g. `SUM`, `COUNT`).</dd>
   * 
   *   <dt>string `text_hint`</dt>
   *   <dd>Plain-text description shown in the reference panel.</dd>
   * 
   *   <dt>string `s_alias`</dt>
   *   <dd>Whether `s_alias` is `'required'`, `'optional'`, or `'omit'` for this function.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_total = [];

  /**
   * User View field groups keyed by logical section name.
   *
   * Each value is an array of field descriptors for the User View reference panel: 
   *
   * <dl>
   *   <dt>string `s_column`</dt>
   *   <dd>Full `table.column` reference inserted into SQL on click.</dd>
   * 
   *   <dt>string `text_label`</dt>
   *   <dd>Short human-readable column label shown prominently.</dd>
   * 
   *   <dt>string `text_tooltip`</dt>
   *   <dd>Longer description shown in the hover tooltip.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_user_field = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>