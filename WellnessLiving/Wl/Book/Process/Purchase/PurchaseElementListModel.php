<?php

namespace WellnessLiving\Wl\Book\Process\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * Model of list of purchase items.
 */
class PurchaseElementListModel  extends WlModelAbstract
{
  /**
   * List of purchase items to get information for. Every element has next keys:
   * <dl>
   *   <dt>int [<var>i_session</var>]</dt>
   *   <dd>Number of sessions which are booked simultaneously.</dd>
   *   <dt>int <var>id_purchase_item</var></dt>
   *   <dd>ID of purchase item type. One of {@link \RsPurchaseItemSid}.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>Key of certain purchase item in database. Name of table in database depends on <var>id_purchase_item</var></dd>
   *   <dt>string [<var>k_login_prize</var>]</dt>
   *   <dd>Key of user's prize. Primary key in {@link \RsLoginPrizeSql} table.</dd>
   * </dl>
   *
   * <tt>null</tt> if not set yet.
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
   * Key of the business in which the purchase is made.
   * Primary key in table {@link \RsBusinessSql}.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Key of the location in which the purchase is made.
   * Actually this is booking process location.
   * Primary key in table {@link \RsLocationSql}.
   *
   * <tt>null</tt> if not set yet or location can not be defined for some reason.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * Discount code.
   *
   * @get get
   * @var string
   */
  public $text_discount_code = '';

  /**
   * Key of user who is making the purchase.
   * Primary key in table {@link \PassportLoginSql}.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>