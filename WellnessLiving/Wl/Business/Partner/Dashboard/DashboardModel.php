<?php

namespace WellnessLiving\Wl\Business\Partner\Dashboard;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Class for drawing chart earnings.
 *
 * @method WlModelRequest get()
 */
class DashboardModel extends WlModelAbstract
{
  /**
   * Data for chart report.
   *
   * @get result
   * @var string
   */
  public $html_chart;

  /**
   * Chart format ID.
   *
   * @get get
   * @var int
   */
  public $id_chart;

  /**
   * Key of the business.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>