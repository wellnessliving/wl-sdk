<?php

namespace WellnessLiving\Wl\Book\Process\Purchase;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * API point to get information about a list of purchase options wile booking process.
 */
class PurchaseElementGroupModel extends WlModelAbstract
{
  /**
   * A list of purchase items. Each item is an associative array with the following keys:
   *
   * <dl>
   *   <dt>int `i_session = 1`</dt>
   *   <dd>
   *     Number of sessions which are booked simultaneously.
   *      Make sense only when `id_purchase_
   *   </dd>
   * 
   *   <dt>int `id_purchase_item`</dt>
   *   <dd>The ID of the purchase item type. One of {@link WlPurchaseItemSid}.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>The key of the purchase item in the database.</dd>
   * 
   *   <dt>string `k_login_prize`</dt>
   *   <dd>The key of the user's prize.
   *  Not empty only if the user wants to make a free visit from the prize.</dd>
   * 
   *   <dt>string|null `k_pay_installment_template`</dt>
   *   <dd>
   *     Installment template key. *  This property is optional.
   *  * can only be set for the purchase option which supports installment plan. *  * `null` if installment plan doesn't exist for bought item;
   *  * `0` if installment plan doesn't selected for bought item from the list of installment plans.
   *  NOTE:
   *  * Calculations of discounts and taxes for installment plans are for demonstration purposes only!
   *  * Installment is not an independent purchase item and has no discounts or taxes.
   *  * Installment is a division of the final amount (with taxes and discounts), of some purchase option, into N parts.
   *   </dd>
   * 
   *   <dt>string `k_reward_prize`</dt>
   *   <dd>
   *     The key of the reward prize.
   *  Not empty only if the user wants to redeem prize and use it to pay for a visit.
   *   </dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>The key of the user for whom the purchase item is being bought.</dd>
   * </dl>
   * @get get
   * @var array[]
   */
  public $a_purchase_item = [];

  /**
   * A list of taxes for the given purchase options.
   * Keys - tax keys, values - tax amounts.
   *
   * @get result
   * @var string[]
   */
  public $a_tax;

  /**
   * Date/time of session is booking.
   *
   * `null` until initialized.
   *
   * @get get
   * @var string|null
   */
  public $dtu_date = null;

  /**
   * The key of the session to check for booking availability.
   *
   * @get get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * The key of the location in which the purchase is made.
   * This is also the booking process location.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The total cost of the given purchase options.
   *
   * @get result
   * @var string
   */
  public $m_cost;

  /**
   * The amount of the whole discount for the given purchase options.
   *
   * @get result
   * @var string
   */
  public $m_discount;

  /**
   * The discount amount provided by a discount code for the given purchase options.
   *
   * @get result
   * @var string
   */
  public $m_discount_code;

  /**
   * The discount amount for the client type for the given purchase options.
   *
   * @get result
   * @var string
   */
  public $m_discount_login;

  /**
   * The price of the given purchase options (with or without taxes, depending on regional standards).
   *
   * @get result
   * @var string
   */
  public $m_price;

  /**
   * The amount of subtotal for the given purchase options.
   *
   * @get result
   * @var string
   */
  public $m_subtotal;

  /**
   * The amount of taxes for the given purchase options.
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