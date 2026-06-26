<?php

namespace WellnessLiving\Wl\Report\Dashboard\Menu;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Dashboard menu API.
 *
 * @method WlModelRequest get() Gets available dashboard for specified user within specified business.
 * @method WlModelRequest put() Updates dashboard sort order selected by user.
 */
class MenuModel extends WlModelAbstract
{
  /**
   * List of the available dashboards.
   *
   * @get result
   * @var array
   */
  public $a_dashboard = [];

  /**
   * Dashboard order list.
   *
   * @put post
   * @var array
   */
  public $a_dashboard_order = [];

  /**
   * Business key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * User key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $uid = '';
}

?>