<?php

namespace WellnessLiving;

/**
 * A list of payment gateways or processors.
 */
class WlPayProcessorSid
{
  /**
   * Payment gateway for Direct Connect.
   */
  const DIRECT_CONNECT = 9;

  /**
   * Payment gateway for Lucy.
   */
  const LUCY = 2;

  /**
   * Payment gateway for Netbanx.
   */
  const NETBANX = 1;

  /**
   * Payment gateway for NMI.
   */
  const NMI = 6;

  /**
   * Payment gateway for {@link http://www.paychoice.com.au/ Paychoice}.
   */
  const PAYCHOICE = 7;

  /**
   * Payment gateway for `stripe.com`.
   */
  const STRIPE_COM = 10;

  /**
   * Dummy payment gateway for testing purposes.
   */
  const TEST = 3;

  /**
   * Payment gateway for testing purposes that supports {@link WlPayMethodSid::ECOMMERCE} payment method.
   */
  const TEST_ECOMMERCE = 5;

  /**
   * Payment gateway for testing purposes that does not support any payment methods.
   */
  const TEST_NONE = 8;

  /**
   * Payment gateway for testing purposes that supports {@link WlPayMethodSid::POS} payment method.
   */
  const TEST_POS = 4;
}