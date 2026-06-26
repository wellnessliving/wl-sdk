<?php

namespace WellnessLiving\Thoth\ReportCore\QueryEngine\Page;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns the list of SQL report registry records for the current business.
 *
 * For business-level requests (`$k_business` is a real business key), returns
 *  both business-specific and system-level reports. For system-level requests
 *  (`$k_business = '0'`), returns only system-level reports.
 *
 * @method WlModelRequest get()
 */
class ReportQueryListModel extends WlModelAbstract
{
  /**
   * List of registry records. Each element: 
   *
   * <dl>
   *   <dt>string `dtu_update`</dt>
   *   <dd>UTC datetime of the last update.</dd>
   * 
   *   <dt>bool `is_active`</dt>
   *   <dd>`true` if the record is active.</dd>
   * 
   *   <dt>bool `is_system`</dt>
   *   <dd>`true` if this is a system-level report visible to all businesses, `false` for business-specific reports.</dd>
   * 
   *   <dt>string `k_report_query`</dt>
   *   <dd>Report query key.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>Human-readable report title.</dd>
   * 
   *   <dt>string `url_view`</dt>
   *   <dd>URL of the report view page for this record.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_list = [];

  /**
   * Status filter.
   *
   * @get get
   * @var int
   */
  public $id_record_status = 1;

  /**
   * Business key. `'0'` to list system-level reports.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>