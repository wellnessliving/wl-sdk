<?php

namespace WellnessLiving\Wl\Purchase\Pool;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * Allows working with purchase pool items.
 *
 * @method WlModelRequest get() Checks if certain item exists in the active purchase pool.
 */
class PoolItemModel extends WlModelAbstract
{
  /**
   * Include only purchase pools with `i_attempt` number of done attempts or more.
   *
   * @get get
   * @var int
   */
  public $i_attempt = 0;

  /**
   * Type of the item in the pool from {@link WlPurchaseItemSid}.
   *
   * @get get
   * @var int
   */
  public $id_purchase_item = 0;

  /**
   * Key of the business, where pool is created.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the item, which depends on {@link PoolItemModel::$id_purchase_item}.
   *
   * @get get
   * @var string
   */
  public $k_id = '';

  /**
   * The key of the login promotion. If this is set, {@link PoolItemModel::$k_id} and
   * {@link PoolItemModel::$id_purchase_item} are not used.
   *
   * @get get
   * @var string|null
   */
  public $k_login_promotion = null;

  /**
   * Key of the active purchase pool, if it's found.
   *
   * In theory, can be multiple pools for the same item, one random pool will be returned in this case.
   *
   * @get result
   * @var string
   */
  public $k_purchase_pool = '';
}

?>