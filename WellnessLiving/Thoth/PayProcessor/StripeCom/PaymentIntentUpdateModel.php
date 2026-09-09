<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom;

use WellnessLiving\Core\Locale\CurrencySid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\RsPayActorSid;

/**
 * Updates created Payment Intent.
 *
 * WARNING: Can be used for Stripe Payment Element only.
 * Currently this API is used to update Payment Intent, that is created to show Stripe Payment Element form, in case of cart
 * changes.
 * To use for other cases, please consider extending code of this API.
 *
 * @method WlModelRequest post() Updates a `Stripe` Payment Intent.  Adjusts the amount and surcharge of the Payment Intent created for the Stripe Payment Element  form when the cart contents change, keeping the underlying payment transaction in sync.
 */
class PaymentIntentUpdateModel extends WlModelAbstract
{
  /**
   * ID of the currency.
   * Required.
   *
   * @post post
   * @var int
   * @see CurrencySid
   */
  public $id_currency = 0;

  /**
   * ID of the actor. One of {@link RsPayActorSid} constants.
   *
   * @post get
   * @var int
   */
  public $id_pay_actor = 0;

  /**
   * Key of the business to update Payment Intent for.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the business merchant to update Payment Intent for.
   *
   * @post get
   * @var string
   */
  public $k_business_merchant = '';

  /**
   * Key of the payment transaction to update.
   * Required.
   *
   * @post get
   * @var string
   */
  public $k_pay_transaction = '';

  /**
   * Payment amount to set.
   * Required.
   *
   * @post post
   * @var string
   */
  public $m_amount = '0.00';

  /**
   * Surcharge amount to set.
   * Required.
   *
   * @post post
   * @var string
   */
  public $m_surcharge = '0.00';

  /**
   * Payment intent ID to update.
   * Required.
   *
   * @post get
   * @var string
   */
  public $s_payment_intent = '';

  /**
   * Payment owner user key.
   * `null` if pay owner is anonymous.
   *
   * @post get
   * @var string|null
   */
  public $uid_purchase = null;
}

?>