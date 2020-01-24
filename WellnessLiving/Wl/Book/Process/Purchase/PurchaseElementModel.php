<?php

namespace WellnessLiving\Wl\Book\Process\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * Model of 1 purchase item.
 */
class PurchaseElementModel extends WlModelAbstract
{
  /**
   * Object result
   *
   * @get result
   * @var null
   */
  public $a_tax = null;

  /**
   * Number of sessions which are booked simultaneously.
   *
   * @get get
   * @var int
   */
  public $i_session = 0;

  /**
   * ID of purchase item type. Member of {@link \RsPurchaseItemSid}.
   *
   * @get get
   * @var int
   */
  public $id_purchase_item = 0;

  /**
   * ID of certain purchase item in database.
   * Name of table in database depends on {@link \WellnessLiving\Wl\Book\Process\Purchase\PurchaseElementModel::$id_purchase_item}.
   *
   * @get get
   * @var string
   */
  public $k_id = '0';

  /**
   * ID of the location in which the purchase is made.
   * Actually this is booking process location.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * ID of user's prize.
   * Not empty only if user wants to make free visit by prize.
   * Primary key in {@link RsLoginPrizeSql} table.
   *
   * @get get
   * @var string
   */
  public $k_login_prize = '0';

  /**
   * Object result
   *
   * @get result
   * @var null
   */
  public $m_cost = null;

  /**
   * Object result
   *
   * @get result
   * @var null
   */
  public $m_discount = null;

  /**
   * Object result
   *
   * @get result
   * @var null
   */
  public $m_discount_login = null;

  /**
   * Object result
   *
   * @get result
   * @var null
   */
  public $m_price = null;

  /**
   * Object result
   *
   * @get result
   * @var null
   */
  public $m_tax = null;

  /**
   * Discount code.
   *
   * @get get
   * @var string
   */
  public $text_discount_code = '';

  /**
   * ID of current user. Primary key in table {@link PassportLoginSql}.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>