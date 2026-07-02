<?php

namespace WellnessLiving\Wl\Book\Process\Purchase;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * A model of the purchase item.
 *
 * @method WlModelRequest get() Builds a single-item purchase list from the scalar input fields and delegates to the parent for price calculation.  Constructs a one-element `a_purchase_item` array from the individual scalar GET fields (purchase item type, item key, session count, prize keys, and installment template), then delegates to {@link \Wl\Book\Process\Purchase\PurchaseElementGroupApi::get()} to compute the price breakdown for that item.
 */
class PurchaseElementModel extends WlModelAbstract
{
  /**
   * Additional configuration for the purchase item.
   * Depending on purchase item type different configuration parameters can be passed.
   *
   * For purchase items with {@link WlPurchaseItemSid::TUITION} type next structure expected:
   *
   * <dl>
   *   <dt>array `a_event_list`</dt>
   *   <dd>
   *     List of tuition events.
   * Each entry has the next structure:
   *     <dl>
   *       <dt>string `k_class`</dt>
   *       <dd>Key of the event class. </dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>Key of the tuition participant. </dd>
   *     </dl>
   *   </dd>
   * </dl>
   * @get get
   * @var array
   */
  public $a_config = [];

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
   * The number of sessions which are booked simultaneously.
   *
   * Required when {@link PurchaseElementModel::$id_purchase_item} = {@link WlPurchaseItemSid::CLASS_PERIOD}.
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
   * The key of the session to check for booking availability.
   *
   * @get get
   * @var string
   */
  public $k_class_period = '0';

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
   * This property is optional.
   *
   * * can only be set for the purchase option which supports installment plan.
   *   
   * * `null` if installment plan doesn't exist for bought item;
   * * `0` if installment plan doesn't selected for bought item from the list of installment plans.
   *
   * NOTE:
   * * Calculations of discounts and taxes for installment plans are for demonstration purposes only!
   * * Installment is not an independent purchase item and has no discounts or taxes.
   * * Installment is a division of the final amount (with taxes and discounts), of some purchase option, into N
   * parts.
   *
   * @get get
   * @var string|null
   */
  public $k_pay_installment_template = null;

  /**
   * The key of the reward prize.
   * Not empty only if the user wants to redeem prize and use it to pay for a visit.
   *
   * @get get
   * @var string
   */
  public $k_reward_prize = '0';

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