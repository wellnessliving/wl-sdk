<?php

namespace WellnessLiving\Wl\Franchise\Fee;

/**
 * List of fee types.
 *
 * Last used ID: 2
 */
class FeeTypeSid
{
  /**
   * Fixed fee.
   *
   * Scheduled basis: A fixed amount is transferred to the headquarters balance on every schedule basis.
   * Per transaction: Fees are fixed regardless of the transaction amount.
   */
  const FIXED = 1;

  /**
   * Percentage fee.
   *
   * Scheduled basis: Fees are calculated as a percentage of the location's sales on every schedule basis.
   * Per transaction: Fees are calculated as a percentage of the transaction amount.
   */
  const PERCENTAGE = 2;
}

?>