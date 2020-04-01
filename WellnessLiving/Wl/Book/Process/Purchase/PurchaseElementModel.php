<?php

namespace WellnessLiving\Wl\Book\Process\Purchase;

use WellnessLiving\WlModelAbstract;


/**
 * Model of purchase item.
 */
class PurchaseElementModel extends WlModelAbstract
{
  /**
   * List of purchase items to get information for. Every element has next keys:
   * <dl>
   *   <dt>int [<var>i_session</var>]</dt><dd>Number of sessions which are booked simultaneously.</dd>
   *   <dt>int <var>id_purchase_item</var></dt><dd>ID of purchase item type. One of {@link \RsPurchaseItemSid}.</dd>
   *   <dt>string <var>k_id</var></dt><dd>Key of certain purchase item in database. Name of table in database depends on <var>id_purchase_item</var></dd>
   *   <dt>string [<var>k_login_prize</var>]</dt><dd>Key of user's prize. Primary key in {@link \RsLoginPrizeSql} table.</dd>
   *   <dt>string [<var>text_discount_code</var>]</dt><dd>Discount code.</dd>
   * </dl>
   *
   * <tt>null</tt> for single purchase item mode - then need to set
   * {@link \WellnessLiving\Wl\Book\Process\Purchase\PurchaseElementModel::$id_purchase_item $id_purchase_item} and
   * {@link \WellnessLiving\Wl\Book\Process\Purchase\PurchaseElementModel::$k_id $k_id}.
   *
   * @get get
   * @var array[]|null
   */
  public $a_purchase_item_request = null;

  /**
   * Detail information about amounts for purchase item list.
   * Every element has next keys:
   * <dl>
   *   <dt>array <var>a_tax</var></dt>
   *   <dd>Information about taxes. Key - tax key (primary key in {@link \RsTaxSql} table); value - tax amount.</dd>
   *   <dt>string <var>id_purchase_item</var></dt><dd>ID of purchase item type.</dd>
   *   <dt>string <var>k_id</var></dt><dd>Key of certain purchase item in database.</dd>
   *   <dt>string <var>m_cost</var></dt><dd>Cost of purchase item (with taxes).</dd>
   *   <dt>string <var>m_discount</var></dt><dd>Amount of whole discount.</dd>
   *   <dt>string <var>m_discount_login</var></dt><dd>Amount of discount for client type.</dd>
   *   <dt>string <var>m_price</var></dt><dd>Price of purchase item (with or without taxes - it depends on regional standards).</dd>
   *   <dt>string <var>m_tax</var></dt><dd>Amount of taxes for purchase item.</dd>
   * </dl>
   *
   * @get result
   * @var array[]|null
   */
  public $a_purchase_item_result = null;

  /**
   * List of taxes for 1 purchase item. Keys - tax keys (primary key in {@link \RsTaxSql} table); values - tax amount.
   *
   * @get result
   * @var array|null
   */
  public $a_tax = null;

  /**
   * Number of sessions which are booked simultaneously.
   *
   * <tt>null</tt> if not set or for multiple purchase item mode.
   *
   * @get get
   * @var int|null
   */
  public $i_session = null;

  /**
   * ID of purchase item type. One of {@link \RsPurchaseItemSid}.
   *
   * <tt>null</tt> if not set yet or for multiple purchase item mode.
   *
   * @get get
   * @var int|null
   */
  public $id_purchase_item = null;

  /**
   * ID of certain purchase item in database.
   * Name of table in database depends on {@link \WellnessLiving\Wl\Book\Process\Purchase\PurchaseElementModel::$id_purchase_item}.
   *
   * <tt>null</tt> if not set yet or for multiple purchase item mode.
   *
   * @get get
   * @var string|null
   */
  public $k_id = null;

  /**
   * ID of the location in which the purchase is made.
   * Actually this is booking process location.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * Key of user's prize.
   * Not empty only if user wants to make free visit by prize.
   * Primary key in {@link RsLoginPrizeSql} table.
   *
   * <tt>null</tt> if not set or for multiple purchase item mode.
   *
   * @get get
   * @var string|null
   */
  public $k_login_prize = null;

  /**
   * Cost of 1 purchase item (with taxes).
   *
   * @get result
   * @var null
   */
  public $m_cost = null;

  /**
   * Amount of whole discount of 1 purchase item.
   *
   * @get result
   * @var null
   */
  public $m_discount = null;

  /**
   * Amount of discount for client type of 1 purchase item.
   *
   * @get result
   * @var null
   */
  public $m_discount_login = null;

  /**
   * Price of purchase item (with or without taxes - it depends on regional standards).
   *
   * @get result
   * @var null
   */
  public $m_price = null;

  /**
   * Amount of taxes for purchase item.
   *
   * @get result
   * @var null
   */
  public $m_tax = null;

  /**
   * Discount code.
   *
   * <tt>null</tt> if not set or for multiple purchase item mode.
   *
   * @get get
   * @var string|null
   */
  public $text_discount_code = null;

  /**
   * Key of current user. Primary key in table {@link \PassportLoginSql}.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>