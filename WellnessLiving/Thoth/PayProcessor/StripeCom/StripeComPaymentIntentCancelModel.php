<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Cancels existing Payment Intent.
 *
 * @method WlModelRequest post() Cancels a `Stripe` Payment Intent.  Verifies that the Payment Intent belongs to the current payer authentication session, then  refunds the associated payment transaction to release the reserved amount.
 */
class StripeComPaymentIntentCancelModel extends WlModelAbstract
{
  /**
   * ID of the actor.
   *
   * @post post
   * @var int
   */
  public $id_pay_actor;

  /**
   * Key of the business.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * Key of the business merchant, that processes payment.
   *
   * @post post
   * @var string
   */
  public $k_business_merchant;

  /**
   * Pay transaction key, which was used to create payment intent.
   *
   * @post post
   * @var string
   */
  public $k_pay_transaction;

  /**
   * Payment intent ID.
   *
   * @post post
   * @var string
   */
  public $s_payment_intent;

  /**
   * Payment owner user key.
   *
   * @post post
   * @var string
   */
  public $uid_purchase;
}

?>