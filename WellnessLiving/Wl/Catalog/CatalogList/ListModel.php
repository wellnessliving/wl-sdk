<?php

namespace WellnessLiving\Wl\Catalog\CatalogList;

use WellnessLiving\WlModelAbstract;

/**
 * Information about store items.
 */
class ListModel extends WlModelAbstract
{
  /**
   * List of all sale items.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var array|null
   */
  public $a_product = null;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of a location.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * Key of user.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>