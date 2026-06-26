<?php

namespace WellnessLiving\Wl\Purchase\Item;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Data of certain purchase.
 *
 * @method WlModelRequest get() Returns information about amounts of the purchase item.
 */
class PurchaseItemAmountModel extends WlModelAbstract
{
  /**
   * Client prorate date.
   *
   * @get get
   * @var string|null
   */
  public $dl_client_prorate = null;

  /**
   * Number of units of the purchase item.
   *
   * @get get
   * @var int
   */
  public $i_count;

  /**
   * ID of the purchase item.
   * One of {@link WlPurchaseItemSid} constants.
   * Key of the appropriate item stored in {@link PurchaseItemAmountModel::$k_id}.
   *
   * @get get
   * @var int
   */
  public $id_purchase_item;

  /**
   * Whether purchase item is new.
   *
   * @get get
   * @var bool
   */
  public $is_new = false;

  /**
   * Whether purchase item is out of stock.
   *
   * @get result
   * @var bool
   */
  public $is_out_of_stock = false;

  /**
   * Key of the business that should be set to the purchase item.
   *
   * <tt>null</tt> if not set.
   *
   * @get get
   * @var string|null
   */
  public $k_business;

  /**
   * Key of the item within appropriate table according to {@link PurchaseItemAmountModel::$id_purchase_item}.
   *
   * Can be <tt>null</tt> if it is new purchase item.
   *
   * @get get
   * @var string|null
   */
  public $k_id;

  /**
   * Key of the location purchase occur.
   *
   * <tt>null</tt> if not set.
   *
   * @get get
   * @var string|null
   */
  public $k_location;

  /**
   * Key of the reward prize that should be applied to the purchase item.
   *
   * @get get
   * @var string
   */
  public $k_reward_prize;

  /**
   * Amount of discounts applied to the purchase item.
   *
   * @get result
   * @var string
   */
  public $m_discount;

  /**
   * Manual price that should be set to the purchase item.
   *
   * <tt>null</tt> if not set.
   *
   * @get get
   * @var string|null
   */
  public $m_price;

  /**
   * Amount of all units of the purchase item without taxes and discounts.
   *
   * @get result
   * @var string
   */
  public $m_subtotal;

  /**
   * Amount of all taxes applied to the purchase item.
   *
   * @get result
   * @var string
   */
  public $m_tax;

  /**
   * Total amount of the purchase item.
   *
   * @get result
   * @var string
   */
  public $m_total;

  /**
   * Key of the user that performs purchase.
   *
   * @get get
   * @var string
   */
  public $uid_purchase;
}

?>