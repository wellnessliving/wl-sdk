<?php

namespace WellnessLiving\Wl\Catalog\CatalogList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlSaleSid;

/**
 * Displays information about store items.
 */
class ListModel extends WlModelAbstract
{
  /**
   * Arguments from direct purchase link, which can give additional access to products, which are available
   *   only by such link.
   *
   * <dl>
   *     <dt>int `id_sale`</dt>
   *     <dd>Type of the item from {@link WlSaleSid}.</dd>
   *     <dt>bool `is_product`</dt>
   *     <dd>
   *         `true` if `k_id` value is product key, `false` if `k_id` value is product option key.
   *          Optional. Default value is `false`.
   *          Used for `id_sale` === {@link WlSaleSid::PRODUCT} only.
   *     </dd>
   *     <dt>string `k_id`</dt>
   *     <dd>Key of item.</dd>
   * </dl>
   *
   * @get get
   * @var array
   */
  public $a_direct_link = [];

  /**
   * The list of all sale items.
   *
   * @get result
   * @var array
   */
  public $a_product = [];

  /**
   * The list of products to show with duplicates.
   *
   * Products have their own order within every shop category, and they can be related to several categories.
   * As a design decision, products are sorted in the backend using duplicates for every category.
   *
   * @get result
   * @var array
   */
  public $a_product_duplicate;

  /**
   * `true` to consider the requirement to have a credit card for booking
   * (this requirement can be set in business settings)
   * `false` to ignore it.
   *
   * @get get
   * @var bool
   */
  public $is_credit_card_check = true;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of a location. If `0`, all products in the business are retrieved.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The key of user.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>