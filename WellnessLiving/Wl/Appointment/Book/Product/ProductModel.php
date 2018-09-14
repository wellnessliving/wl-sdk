<?php

namespace WellnessLiving\Wl\Appointment\Book\Product;

use WellnessLiving\WlModelAbstract;

/**
 * Information about service add-ons.
 */
class ProductModel extends WlModelAbstract
{
  /**
   * A list service add-ons.
   *
   * <tt>null</tt> if not initialized yet.
   *
   * @get result
   * @var array|null
   */
  public $a_product = null;

  /**
   * ID of a service to show information for.
   *
   * @get get
   * @var string
   */
  public $k_service = '0';
}

?>