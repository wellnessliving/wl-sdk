<?php

namespace WellnessLiving\Wl\Book\Process\Purchase;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * A model of the purchase item.
 */
class PurchaseElementModel extends WlModelAbstract
{
  /**
   * A list of taxes for one purchase item.
   * Keys - tax keys.
   * Values - tax amount.
   *
   * @get result
   * @var array
   */
  public $a_tax;

  /**
   * The number of sessions which are booked simultaneously.
   *
   * @get get
   * @var int
   */
  public $i_session = 0;

  /**
   * The ID of the purchase item type. One of {@link WlPurchaseItemSid}.
   *
   * @get get
   * @var int
   */
  public $id_purchase_item = 0;

  /**
   * The key of the purchase item in the database.
   *
   * @get get
   * @var string
   */
  public $k_id = '0';

  /**
   * The key of the location in which the purchase is made.
   * This is also the booking process location.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The key of the user's prize.
   * Not empty only if the user wants to make a free visit from the prize.
   *
   * @get get
   * @var string
   */
  public $k_login_prize = '0';

  /**
   * Installment template key.
   * This property is optional. `null` if installment plan doesn't exist for bought item.
   * `0` if installment plan doesn't selected for bought item from the list of installment plans.
   *
   * @get get
   * @var string|null
   */
  public $k_pay_installment_template = null;

  /**
   * The cost of one purchase item (with taxes).
   *
   * @get result
   * @var string
   */
  public $m_cost;

  /**
   * The amount of the whole discount of one purchase item.
   *
   * @get result
   * @var string
   */
  public $m_discount;

  /**
   * Amount of discount for discount code of 1 purchase item.
   *
   * @get result
   * @var string
   */
  public $m_discount_code;

  /**
   * The discount amount for the client type of one purchase item.
   *
   * @get result
   * @var string
   */
  public $m_discount_login;

  /**
   * The price of the purchase item (with or without taxes, depending on regional standards).
   *
   * @get result
   * @var string
   */
  public $m_price;

  /**
   * Amount of subtotal for 1 purchase item.
   *
   * @get result
   * @var string
   */
  public $m_subtotal;

  /**
   * The amount of taxes for the one purchase item.
   *
   * @get result
   * @var string
   */
  public $m_tax;

  /**
   * The discount code.
   *
   * @get get
   * @var string
   */
  public $text_discount_code = '';

  /**
   * The key of the current user.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>