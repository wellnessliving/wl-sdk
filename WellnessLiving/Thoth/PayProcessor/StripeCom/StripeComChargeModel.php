<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom;

use WellnessLiving\Core\Locale\CurrencySid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Get Stripe charge information.
 *
 * @method WlModelRequest get()
 */
class StripeComChargeModel extends WlModelAbstract
{
  /**
   * ID of the currency.
   *
   * One of {@link CurrencySid} constants.
   *
   * @get get
   * @var int
   */
  public $id_currency;

  /**
   * ID of the actor.
   *
   * @get get
   * @var int
   */
  public $id_pay_actor;

  /**
   * Key of the business.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Key of the business merchant to get the public key for.
   *
   * @get get
   * @var string
   */
  public $k_business_merchant;

  /**
   * Details about the payment method at the time of the transaction: 
   *
   * <dl>
   *   <dt>string `s_generated_card_id`</dt>
   *   <dd>ID of a card payment method generated.</dd>
   * 
   *   <dt>string `text_brand`</dt>
   *   <dd>Card brand, like visa or mastercard.</dd>
   * 
   *   <dt>string `text_cardholder_name`</dt>
   *   <dd>The cardholder name as read from the card.</dd>
   * 
   *   <dt>string `text_exp_month`</dt>
   *   <dd>Two-digit number representing the card's expiration month.</dd>
   * 
   *   <dt>string `text_exp_year`</dt>
   *   <dd>Four-digit number representing the card's expiration year.</dd>
   * 
   *   <dt>string `text_last4`</dt>
   *   <dd>Last four digits of the card number.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $o_payment_method_details;

  /**
   * Charge id to get data for.
   *
   * @get get
   * @var string
   */
  public $s_charge;

  /**
   * ID of the payment method used in this charge.
   *
   * @get result
   * @var string
   */
  public $s_payment_method;

  /**
   * Payment owner user key.
   *
   * @get get
   * @var string
   */
  public $uid_purchase;
}

?>