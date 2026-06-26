<?php

namespace WellnessLiving\Wl\Shop\Supplier;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns a list of all suppliers of a business’s store.
 *
 * @method WlModelRequest get()
 */
class ShopSupplierModel extends WlModelAbstract
{
  /**
   * Suppliers info.
   *
   * @get result
   * @var array[]
   */
  public $a_list = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>