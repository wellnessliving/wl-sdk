<?php

namespace WellnessLiving\Wl\Book\Process\Purchase;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Discount\DiscountRuleSid;
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
   * For purchase items with {@link WlPurchaseItemSid::TUITION} type only `a_event_list` is
   * expected in the request, and only `k_class` and `uid` are accepted in every its entry. Prices,
   * discounts, and taxes can not be overridden here: this booking flow is never authenticated as a
   * staff member, so such fields are stripped from the input.
   *
   * In the response this is not an echo: `a_event_list` comes back recomputed, and
   * `a_registration_fee_list`, `m_checkout`, and `m_deferred` are added.
   *
   * <dl>
   *   <dt>array[] `a_event_list`</dt>
   *   <dd>
   *     List of tuition events, one entry per participant and event class.
   * Each entry has the next structure:
   *     <dl>
   *       <dt>array[]|null `a_discount`</dt>
   *       <dd>
   *         Discounts applied to the event, `null` if there are none. Every row has the next keys:
   *         <dl>
   *           <dt>int `id_discount_rule`</dt>
   *           <dd>Discount rule type. One of {@link DiscountRuleSid} constants.</dd>
   * 
   *           <dt>string `m_discount`</dt>
   *           <dd>Discount amount of this rule.</dd>
   * 
   *           <dt>string `text_discount`</dt>
   *           <dd>Discount title. Only for {@link DiscountRuleSid::MANUAL}.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string[]|null `a_tax`</dt>
   *       <dd>
   *         Taxes of the event. Keys are tax keys, values are tax amounts.
   * 
   *       </dd>
   * 
   *       <dt>string `k_class`</dt>
   *       <dd>Key of the event class. </dd>
   * 
   *       <dt>string|null `m_checkout`</dt>
   *       <dd>
   *         The amount charged for this event right now, including tax. `0.00` when every
   * installment payment is still ahead. `null` when the amount is not calculated yet.
   *       </dd>
   * 
   *       <dt>string `m_deferred`</dt>
   *       <dd>
   *         The part of the event cost that is not charged right now, including tax. Goes to the
   * installment plan or to the membership schedule, depending on the tuition billing mode.
   *       </dd>
   * 
   *       <dt>string `m_discount`</dt>
   *       <dd>Total discount amount applied to the event, `0.00` if there is none.</dd>
   * 
   *       <dt>string|null `m_price`</dt>
   *       <dd>Price of the event within the tuition, before discount and tax.</dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>Key of the tuition participant. </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_registration_fee_list`</dt>
   *   <dd>
   *     Registration fees, keyed by participant key.
   * 
   * Filled by the server, never accepted from the caller in this flow.
   * Each value has the next structure:
   *     <dl>
   *       <dt>array[]|null `a_discount`</dt>
   *       <dd>
   *         Discounts applied to the fee, `null` if there are none. Every row has the next keys:
   *         <dl>
   *           <dt>int `id_discount_rule`</dt>
   *           <dd>Discount rule type. One of {@link DiscountRuleSid} constants.</dd>
   * 
   *           <dt>string `m_discount`</dt>
   *           <dd>Discount amount of this rule.</dd>
   * 
   *           <dt>string `text_discount`</dt>
   *           <dd>Discount title. Only for {@link DiscountRuleSid::MANUAL}.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string[] `a_tax`</dt>
   *       <dd>
   *         Taxes of the fee. Keys are tax keys, values are tax amounts.
   * 
   *       </dd>
   * 
   *       <dt>string `m_amount`</dt>
   *       <dd>Registration fee amount for the participant, before discount and tax.</dd>
   * 
   *       <dt>string|null `m_checkout`</dt>
   *       <dd>
   *         The amount charged for this fee right now, including tax. A fee is either charged in
   * full or deferred entirely, so `null` means the whole fee is deferred.
   *       </dd>
   * 
   *       <dt>string `m_deferred`</dt>
   *       <dd>The whole fee amount if the fee is deferred, `0.00` if it is charged right now.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `m_checkout`</dt>
   *   <dd>
   *     The total amount charged for the tuition right now, including tax. The sum of `m_checkout`
   * of every event and every registration fee.
   *   </dd>
   * 
   *   <dt>string `m_deferred`</dt>
   *   <dd>
   *     The total amount that is not charged right now, including tax. Together with `m_checkout`
   * it adds up to the full cost of the tuition.
   *   </dd>
   * </dl>
   * @get get,result
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
   * The amount that has to be charged right now for the given purchase options.
   *
   * Equals {@link PurchaseElementGroupModel::$m_cost} for everything that is paid for in full at
   * once. A tuition defers a part of its cost to an installment plan or to a membership schedule,
   * and `m_cost` covers the full cost regardless, so this is the amount to put into the payment
   * form. It is `m_cost` minus `a_config.m_deferred` of every tuition item in
   * {@link PurchaseElementGroupModel::$a_purchase_item}.
   *
   * @get result
   * @var string
   */
  public $m_checkout;

  /**
   * The tax portion of {@link PurchaseElementGroupModel::$m_checkout}.
   *
   * Equals {@link PurchaseElementGroupModel::$m_tax} for everything that is paid for in full at
   * once. A tuition defers a part of its tax to an installment plan along with the rest of its
   * cost, so this is the tax on the amount actually charged right now, not on the full cost.
   *
   * @get result
   * @var string
   */
  public $m_checkout_tax;

  /**
   * The total cost of the given purchase options.
   *
   * For a tuition this is the full cost, including whatever is deferred to an installment plan or
   * to a membership schedule. 
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