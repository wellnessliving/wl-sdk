<?php

namespace WellnessLiving\Thoth\PayProcessor;

/**
 * A list of payment processors for gateways.
 *
 * Last ID: 6.
 */
abstract class ProcessorMerchantSid
{
  /**
   * Argus.
   *
   * @title Argus
   */
  const ARGUS = 1;

  /**
   * Integrapay.
   *
   * @title Integrapay
   */
  const INTEGRAPAY = 2;

  /**
   * Nuvei.
   *
   * @title Nuvei
   */
  const NUVEI = 3;

  /**
   * PayArc.
   *
   * @title PayArc
   */
  const PAYARC = 6;

  /**
   * Paysafe.
   *
   * @title Paysafe
   */
  const PAYSAFE = 4;

  /**
   * Sekure Merchants.
   *
   * @title Sekure Merchants
   */
  const SEKURE = 5;
}

?>