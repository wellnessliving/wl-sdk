<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom;

use WellnessLiving\Core\Locale\CurrencySid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\RsPayActorSid;

/**
 * Updates created Payment Intent, or the line items of an open Checkout Session.
 *
 * The client card form that runs on a Checkout Session passes the ID of the session instead of the ID of a Payment
 * Intent, see {@link StripeComPayInitModel::$s_checkout_session}.
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
   * Items of the sale to set in the Checkout Session. Every element: 
   *
   * The whole list is sent, the items of the session that are not in it are removed. The total of the items must
   * equal {@link PaymentIntentUpdateModel::$m_amount}.
   * Empty to replace the items of the session with one item for {@link PaymentIntentUpdateModel::$m_amount}.
   * Used only with {@link PaymentIntentUpdateModel::$s_checkout_session}.
   *
   * <dl>
   *   <dt>int `i_quantity`</dt>
   *   <dd>Quantity, at least `1`. An integer, or a string of digits: the values of an API request are strings.</dd>
   * 
   *   <dt>string `m_amount`</dt>
   *   <dd>Unit amount. Not negative: a discount is a smaller amount.</dd>
   * 
   *   <dt>string `text_name`</dt>
   *   <dd>Name of the item.</dd>
   * </dl>
   * @post post
   * @var array[]
   */
  public $a_line_item = [];

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
   * ID of the Checkout Session to update.
   * Required if {@link PaymentIntentUpdateModel::$s_payment_intent} is empty.
   *
   * @post get
   * @var string
   */
  public $s_checkout_session = '';

  /**
   * Payment intent ID to update.
   * Required if {@link PaymentIntentUpdateModel::$s_checkout_session} is empty.
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