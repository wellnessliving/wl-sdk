<?php

namespace WellnessLiving\Wl\Service;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint to manage services sorting.
 *
 * @method WlModelRequest post()
 */
class ServiceSortModel extends WlModelAbstract
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
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '';
}

?>