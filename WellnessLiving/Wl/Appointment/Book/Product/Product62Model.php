<?php

namespace WellnessLiving\Wl\Appointment\Book\Product;

use WellnessLiving\WlModelAbstract;

/**
 * Returns information about service add-ons.
 */
class Product62Model extends WlModelAbstract
{
  /**
   * A list service add-ons.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var array[]
   */
  public $a_product = null;

  /**
   * The key of a location where appointment is going to be booked.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The key of a service to show information for.
   *
   * @get get
   * @var string
   */
  public $k_service = '0';

  /**
   * The key of a user to show information for.
   *
   * Only those products that match the client type or those that have no restrictions will be shown.
   *
   * `null` if the client is not logged in.
   *
   * If you don't need to filter products by client type/group, use {@link ProductModel}.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>