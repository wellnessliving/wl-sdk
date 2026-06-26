<?php

namespace WellnessLiving\Wl\Quiz\Response;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint to manage quiz response report.
 *
 * @method WlModelRequest get()
 */
class ReportPostponeModel extends WlModelAbstract
{
  /**
   * Quiz response report.
   *
   * @get result
   * @var string
   */
  public $html_response_report = '';

  /**
   * Key of a business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>