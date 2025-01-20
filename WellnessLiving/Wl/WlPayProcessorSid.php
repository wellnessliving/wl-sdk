<?php

namespace WellnessLiving\Wl;

/**
 * A list of payment gateways or processors.
 *
 * Last ID: 12.
 */
class WlPayProcessorSid
{
  /**
   * Payment gateway for `cybersource.com`.
   */
  const CYBER_SOURCE = 11;

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
   * Payment gateway for Nuvei.
   */
  const NUVEI = 12;

  /**
   * Payment gateway for {@link http://www.paychoice.com.au/ Paychoice}.
   */
  const PAYCHOICE = 7;

  /**
   * Payment gateway for `stripe.com`.
   */
  const STRIPE_COM = 10;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.PayProcessorSid';
}

?>