<?php

namespace WellnessLiving\Wl\Appointment\Book\Product;

use WellnessLiving\WlModelAbstract;

/**
 * Returns information about service add-ons.
 *
 * @depreated Use {@link Product62Model} instead.
 */
class ProductModel extends WlModelAbstract
{
  /**
   * A list service add-ons.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var array[]
   */
  public $a_product;

  /**
   * The key of a service to show information for.
   *
   * @get get
   * @var string
   */
  public $k_service = '0';
}

?>