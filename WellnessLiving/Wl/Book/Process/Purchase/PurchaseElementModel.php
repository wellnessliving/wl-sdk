<?php

namespace WellnessLiving\Wl\Book\Process\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * A model of the purchase item.
 */
class PurchaseElementModel extends WlModelAbstract
{
  /**
   * A list of taxes for one purchase item. Keys - tax keys (primary key in {@link \RsTaxSql} table); values - tax amount.
   *
   * @get result
   * @var array|null
   */
  public $a_tax = null;

  /**
   * The number of sessions which are booked simultaneously.
   *
   * <tt>null</tt> if not set.
   *
   * @get get
   * @var int|null
   */
  public $i_session = null;

  /**
   * The ID of the purchase item type. One of {@link \RsPurchaseItemSid}.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $id_purchase_item = null;

  /**
   * The ID of the purchase item in the database.
   * The name of the table in the database depends on {@link \WellnessLiving\Wl\Book\Process\Purchase\PurchaseElementModel::$id_purchase_item}.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_id = null;

  /**
   * The ID of the location in which the purchase is made.
   * This is also the booking process location.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The key of the user's prize.
   * Not empty only if the user wants to make a free visit from the prize.
   * The primary key in {@link RsLoginPrizeSql} table.
   *
   * <tt>null</tt> if not set.
   *
   * @get get
   * @var string|null
   */
  public $k_login_prize = null;

  /**
   * The cost of one purchase item (with taxes).
   *
   * @get result
   * @var null
   */
  public $m_cost = null;

  /**
   * The amount of the whole discount of one purchase item.
   *
   * @get result
   * @var null
   */
  public $m_discount = null;

  /**
   * The discount amount for the client type of one purchase item.
   *
   * @get result
   * @var null
   */
  public $m_discount_login = null;

  /**
   * The price of the purchase item (with or without taxes, depending on regional standards).
   *
   * @get result
   * @var null
   */
  public $m_price = null;

  /**
   * The amount of taxes for the purchase item.
   *
   * @get result
   * @var null
   */
  public $m_tax = null;

  /**
   * The discount code.
   *
   * <tt>null</tt> if not set or for multiple purchase item mode.
   *
   * @get get
   * @var string|null
   */
  public $text_discount_code = null;

  /**
   * The key of the current user. The primary key in the table {@link \PassportLoginSql}.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>