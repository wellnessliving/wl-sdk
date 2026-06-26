<?php

namespace WellnessLiving\Thoth\ReportCore\QueryEngine\Page;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Updates an existing SQL report registry record.
 *
 * Calls {@link ReportQueryModel::selectById()} before update to prevent the silent no-op
 *  when the record does not exist or belongs to another business.
 *
 * @method WlModelRequest post()
 */
class ReportQueryUpdateModel extends WlModelAbstract
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
   * Report query key.
   *
   * @post post
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