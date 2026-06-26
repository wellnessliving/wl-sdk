<?php

namespace WellnessLiving\Thoth\ReportCore\QueryEngine\Page;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Activates or deactivates (soft-deletes) a SQL report registry record.
 *
 * System-level reports (`k_business = '0'`) can only be activated/deactivated by WL admins.
 *
 * @method WlModelRequest post()
 */
class ReportQueryActivateModel extends WlModelAbstract
{
  /**
   * `1` to activate the record, `0` to deactivate (soft-delete).
   *
   * @post post
   * @var int
   */
  public $is_active = 0;

  /**
   * Business key. `'0'` when activating a system-level report.
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
}

?>