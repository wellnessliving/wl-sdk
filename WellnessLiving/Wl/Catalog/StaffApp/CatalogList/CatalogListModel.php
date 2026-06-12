<?php

namespace WellnessLiving\Wl\Catalog\StaffApp\CatalogList;

use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of all products available from a business’s shop.
 * If a location is specified, only products available at that location are included.
 */
class CatalogListModel extends WlModelAbstract
{
  /**
   * Products in the online store category.
   *
   * Every element has the following fields:
   *
   * @get result
   * @var array[]
   */
  public $a_shop_product;

  /**
   * If `true`, the current user is able to add the purchased item to the account.
   *
   * @get result
   * @var bool
   */
  public $can_add;

  /**
   * The key of the business to get categories for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The location key.
   * This can affect the list of displayed products.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The visit key to pay for.
   *
   * @get get
   * @var string
   */
  public $k_visit = '0';
}

?>