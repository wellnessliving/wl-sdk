<?php

namespace WellnessLiving\Wl\Book\Process\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * A model of a list of purchase items.
 */
class PurchaseElementListModel  extends WlModelAbstract
{
  /**
   * A list of purchase items for which to get information. Every element has the next keys:
   * <dl>
   *   <dt>int [<var>i_session</var>]</dt>
   *   <dd>The number of sessions which are booked simultaneously.</dd>
   *   <dt>int <var>id_purchase_item</var></dt>
   *   <dd>The ID of the purchase item type. One of {@link \RsPurchaseItemSid}.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>The key of the purchase item in the database. The name of the table in the database depends on <var>id_purchase_item</var></dd>
   *   <dt>string [<var>k_login_prize</var>]</dt>
   *   <dd>The key of the user's prize. The primary key in {@link \RsLoginPrizeSql} table.</dd>
   * </dl>
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var array[]|null
   */
  public $a_purchase_item_request = null;

  /**
   * Detailed information about the amounts for the purchase item list.
   * Every element has the next keys:
   * <dl>
   *   <dt>array <var>a_tax</var></dt>
   *   <dd>Information about taxes. Key - tax key (primary key in {@link \RsTaxSql} table); value - tax amount.</dd>
   *   <dt>string <var>id_purchase_item</var></dt><dd>The ID of purchase item type.</dd>
   *   <dt>string <var>k_id</var></dt><dd>The key of the purchase item in the database.</dd>
   *   <dt>string <var>m_cost</var></dt><dd>The cost of the purchase item (with taxes).</dd>
   *   <dt>string <var>m_discount</var></dt><dd>The amount of the whole discount.</dd>
   *   <dt>string <var>m_discount_login</var></dt><dd>The amount of the discount for the client type.</dd>
   *   <dt>string <var>m_price</var></dt><dd>The price of the purchase item (with or without taxes, depending on regional standards).</dd>
   *   <dt>string <var>m_tax</var></dt><dd>The amount of taxes for the purchase item.</dd>
   * </dl>
   *
   * @get result
   * @var array[]|null
   */
  public $a_purchase_item_result = null;

  /**
   * The key of the business in which the purchase is made.
   * The primary key in the table {@link \RsBusinessSql}.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The key of the location in which the purchase is made.
   * This is also the booking process location.
   * The primary key in table {@link \RsLocationSql}.
   *
   * <tt>null</tt> if not set yet or if the location can't be defined for some reason.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The discount code.
   *
   * @get get
   * @var string
   */
  public $text_discount_code = '';

  /**
   * The key of the user making the purchase.
   * The primary key in table {@link \PassportLoginSql}.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>