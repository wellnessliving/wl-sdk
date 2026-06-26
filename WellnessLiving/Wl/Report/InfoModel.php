<?php

namespace WellnessLiving\Wl\Report;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Information about a report.
 *
 * @method WlModelRequest get() Gets report type data.
 */
class InfoModel extends WlModelAbstract
{
  /**
   * Report ID. One of {@link WlReportSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_report = 0;

  /**
   * Report type ID.
   *
   * @get result
   * @var int
   */
  public $id_report_type;

  /**
   * ID of business for which report must be generated.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>