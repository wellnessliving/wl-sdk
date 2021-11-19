<?php

namespace WellnessLiving\Wl\Service;

/**
 * A list of client booking flow types.
 */
class ServiceRequireSid
{
  /**
   * Some part of the price is required. Type of the deposit can be flat or percentage.
   * Type of the deposit depends on <var>is_deposit_percent</var>.
   * Size of the deposit is specified in <var>f_deposit</var>.
   */
  const ADVANCE = 4;

  /**
   * Full payment is required.
   */
  const FULL = 2;

  /**
   * Nothing is required.
   * Online Payment is optional.
   */
  const NOTHING = 1;

  // 3 - is reserved for deprecated "advanced percent" that was combined with "flat advance" into "ADVANCE".

  /**
   * Clients can book, but online purchase is not available.
   * Clients can pay only when they visit.
   */
  const OFFLINE = 6;

  /**
   * Credit card authorisation without payment is required.
   */
  const ZERO = 5;
}