<?php

namespace WellnessLiving\Wl\Staff;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint to manage staffs sorting.
 *
 * @method WlModelRequest post()
 */
class StaffSortModel extends WlModelAbstract
{
  /**
   * Sort order ID. `null` if custom sort order is selected.
   *
   * @post get
   * @var int
   */
  public $id_order = 0;

  /**
   * @post get
   * @var int
   */
  public $id_sort = 0;

  /**
   * Whether sorting order is changed. `true` if changed, `false` - otherwise.
   *
   * @post get
   * @var bool
   */
  public $is_sort_changed = false;

  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '';
}

?>