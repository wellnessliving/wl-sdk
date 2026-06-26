<?php

namespace WellnessLiving\Wl\Franchise\Fee;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves a list of franchise fee.
 *
 * @method WlModelRequest get()
 */
class FeeListModel extends WlModelAbstract
{
  /**
   * List of franchise fee.
   *
   * @get result
   * @var FeeEntity[]
   */
  public $a_list = [];

  /**
   * If `true` - show inactive franchise fee. If `false` show only active franchise fee.
   *
   * @get get
   * @var bool
   */
  public $is_all = false;

  /**
   * If `true` - show removed franchise fee. `false` otherwise..
   *
   * @get get
   * @var bool
   */
  public $is_include_remove = false;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>