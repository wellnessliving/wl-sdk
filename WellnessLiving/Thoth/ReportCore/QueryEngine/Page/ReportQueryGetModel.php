<?php

namespace WellnessLiving\Thoth\ReportCore\QueryEngine\Page;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns full data for a single SQL report registry record.
 *
 * Supports both business-level and system-level reports. System-level reports
 *  (`k_business = '0'`) are accessible by WL admins and by non-admins if
 *  `id_report_access >= BUSINESS`.
 *
 * @method WlModelRequest get()
 */
class ReportQueryGetModel extends WlModelAbstract
{
  /**
   * Access level for this report.
   * `0` when the record does not have an access level set.
   *
   * @get result
   * @var int
   */
  public $id_report_access = 0;

  /**
   * Whether the record is active.
   *
   * @get result
   * @var bool
   */
  public $is_active = false;

  /**
   * Whether this is a system-level report (visible to all businesses).
   *
   * @get result
   * @var bool
   */
  public $is_system = false;

  /**
   * JSON actions definition, or empty string if not set.
   *
   * @get result
   * @var string
   */
  public $json_actions = '';

  /**
   * JSON totals definition, or empty string if not set.
   *
   * @get result
   * @var string
   */
  public $json_totals = '';

  /**
   * Business key. `'0'` when querying a system-level report.
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
   * Body of the SQL query (SELECT only).
   *
   * @get result
   * @var string
   */
  public $s_sql = '';

  /**
   * Human-readable title of the report.
   *
   * @get result
   * @var string
   */
  public $s_title = '';
}

?>