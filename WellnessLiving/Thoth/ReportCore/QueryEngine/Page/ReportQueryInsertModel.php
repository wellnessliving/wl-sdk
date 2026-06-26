<?php

namespace WellnessLiving\Thoth\ReportCore\QueryEngine\Page;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Creates a new SQL report registry record.
 *
 * Delegates validation of `s_sql` (must be SELECT) and `json_totals` (must be JSON)
 *
 * @method WlModelRequest post()
 */
class ReportQueryInsertModel extends WlModelAbstract
{
  /**
   * Access level for this report.
   * Required - the report cannot be saved without selecting an access level.
   *
   * @post post
   * @var int
   */
  public $id_report_access = 0;

  /**
   * Whether to create a system-level report (`k_business`='0').
   * System reports are visible to all businesses. Only WL admins can create them.
   *
   * @post post
   * @var bool
   */
  public $is_system = false;

  /**
   * JSON actions definition. Empty string is normalized to `null` (no actions configured).
   *
   * @post post
   * @var string
   */
  public $json_actions = '';

  /**
   * JSON totals definition. Empty string is normalized to `null` (no totals configured).
   *
   * @post post
   * @var string
   */
  public $json_totals = '';

  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the newly created record.
   *
   * @post result
   * @var string
   */
  public $k_report_query = '';

  /**
   * Body of the SQL query (SELECT only).
   *
   * @post post
   * @var string
   */
  public $s_sql = '';

  /**
   * Human-readable title of the report.
   *
   * @post post
   * @var string
   */
  public $s_title = '';
}

?>