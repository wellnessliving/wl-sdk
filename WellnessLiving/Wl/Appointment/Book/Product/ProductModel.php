<?php

namespace WellnessLiving\Wl\Appointment\Book\Product;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns information about service add-ons.
 */
class ProductModel extends WlModelAbstract
{
  /**
   * A list service add-ons.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var array|null
   */
  public $a_product = null;

  /**
   * The ID of a service to show information for.
   *
   * @get get
   * @var string
   */
  public $k_service = '0';
}

?>