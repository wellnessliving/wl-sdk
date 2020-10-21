<?php

namespace WellnessLiving;

/**
 * A list of payment gateways or processors.
 */
class WlPayProcessorSid
{
  /**
   * Payment gateway for Direct Connect.
   *
   */
  public const DIRECT_CONNECT = 9;

  /**
   * Payment gateway for Lucy.
   *
   */
  public const LUCY = 2;

  /**
   * Payment gateway for Netbanx.
   *
   */
  public const NETBANX = 1;

  /**
   * Payment gateway for NMI.
   *
   */
  public const NMI = 6;

  /**
   * Payment gateway for {@link http://www.paychoice.com.au/ Paychoice}.
   */
  public const PAYCHOICE = 7;

  /**
   * Payment gateway for `stripe.com`.
   *
   */
  public const STRIPE_COM = 10;

  /**
   * Dummy payment gateway for testing purposes.
   *
   */
  public const TEST = 3;

  /**
   * Payment gateway for testing purposes that supports {@link WlPayMethodSid::ECOMMERCE} payment method.
   *
   */
  public const TEST_ECOMMERCE = 5;

  /**
   * Payment gateway for testing purposes that does not support any payment methods.
   *
   */
  public const TEST_NONE = 8;

  /**
   * Payment gateway for testing purposes that supports {@link WlPayMethodSid::POS} payment method.
   *
   */
  public const TEST_POS = 4;
}