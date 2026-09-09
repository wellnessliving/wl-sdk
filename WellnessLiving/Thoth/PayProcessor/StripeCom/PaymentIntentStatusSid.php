<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom;

/**
 * Statuses of payment intents.
 *
 * @link https://stripe.com/docs/api/payment_intents/object#payment_intent_object-status
 * @link https://stripe.com/docs/payments/intents#intent-statuses
 */
class PaymentIntentStatusSid
{
  /**
   * You may cancel a Payment Intent at any point before it is processing or succeeded. This invalidates the
   * Payment Intent for future payment attempts, and cannot be undone. If any funds have been held, cancellation returns
   * those funds.
   */
  const CANCELED = 7;

  /**
   * Once required actions are handled, the Payment Intent moves to processing. While for some payment methods
   * (e.g., cards) processing can be quick, other types of payment methods can take up to a few days to process.
   */
  const PROCESSING = 4;

  /**
   * If the payment requires additional actions, such as authenticating with 3D Secure , the Payment Intent has a status
   * of <tt>requires_action</tt>.
   */
  const REQUIRES_ACTION = 3;

  /**
   * Requires capture.
   *
   * @link https://stripe.com/docs/payments/capture-later
   */
  const REQUIRES_CAPTURE = 6;

  /**
   * After the customer provides their payment information, the Payment Intent is ready to be confirmed.
   *
   * This status is optional and in most integrations, this state is skipped because payment method information is
   * submitted at the same time that the payment is confirmed.
   *
   * @link https://stripe.com/docs/api/payment_intents/confirm
   */
  const REQUIRES_CONFIRMATION = 2;

  /**
   * When the Payment Intent is created, it has a status of <tt>requires_payment_method</tt> until a payment method is
   * attached.
   *
   * We recommend creating the Payment Intent as soon as you know how much you want to charge, so that Stripe can record
   * all the attempted payments.
   *
   * If the payment attempt fails (for example due to a decline), the Payment Intent’s status returns to
   * <tt>requires_payment_method</tt>.
   */
  const REQUIRES_PAYMENT_METHOD = 1;

  /**
   * A Payment Intent with a status of succeeded means that the payment flow it is driving is complete.
   *
   * The funds are now in your account and you can confidently fulfill the order. If you need to refund the customer,
   * you can use the Refunds API.
   */
  const SUCCEEDED = 5;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.StripeCom.PaymentIntentStatusSid';
}

?>