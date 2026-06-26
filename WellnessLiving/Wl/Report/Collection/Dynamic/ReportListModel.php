<?php

namespace WellnessLiving\Wl\Report\Collection\Dynamic;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Report\WlReportSid;

/**
 * Handles list of reports available to be put into a dynamic collection.
 *
 * @method WlModelRequest get() Gets list of reports available for placing in a dynamic collection of specified class.
 */
class ReportListModel extends WlModelAbstract
{
  /**
   * List of available reports. Each item has the following structure:
   *
   * <dl>
   *   <dt>int `i_position`</dt>
   *   <dd>Position of the report in the list of available collection reports. Always 0 in this method.</dd>
   * 
   *   <dt>int `id_report`</dt>
   *   <dd>Report ID, one of {@link WlReportSid}.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Report title.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_report_list;

  /**
   * @get get
   * @var int
   */
  public $cid_dynamic_collection = 0;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * User key.
   *
   * Must be the same as currently logged-in user.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>