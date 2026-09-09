<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom;

/**
 * A list of card types.
 *
 * @link https://stripe.com/docs/api/cards/object#card_object-brand
 * @link https://stripe.com/docs/api/payment_methods/object#payment_method_object-card
 *
 * Last used id: 8.
 */
class StripeCardSystemSid
{
  /**
   * American Express.
   *
   * This card brand has alias - `amex`.
   *
   * @title American Express
   */
  const AMERICAN_EXPRESS = 1;

  /**
   * Diners Club International.
   *
   * This card brand has alias - `diners`.
   *
   * @title Diners Club
   */
  const DINERS_CLUB = 2;

  /**
   * Discover.
   *
   * @title Discover
   */
  const DISCOVER = 3;

  /**
   * JCB.
   *
   * @title JCB
   */
  const JCB = 4;

  /**
   * Master Card.
   *
   * @title MasterCard
   */
  const MASTERCARD = 5;

  /**
   * Union Pay.
   *
   * @title UnionPay
   */
  const UNIONPAY = 6;

  /**
   * Card system can not be determined.
   *
   * @title Unknown
   */
  const UNKNOWN = 7;

  /**
   * Visa.
   *
   * @title Visa
   */
  const VISA = 8;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.StripeCom.StripeCardSystemSid';
}

?>