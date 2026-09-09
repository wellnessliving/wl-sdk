<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect;

/**
 * A list of billing frequency types.
 *
 * Corresponds to <tt>BillingFequencyType</tt> (!MISPRINT IN DOCUMENTATION! "Frequency" word without "r") enumeration in
 * API documentation.
 */
class BillingFrequencySid
{
  /**
   * Perform payments annually.
   */
  const ANNUALLY = 1;

  /**
   * Perform payments twice a week.
   */
  const BIWEEKLY = 2;

  /**
   * Perform payments monthly.
   */
  const MONTHLY = 3;

  /**
   * Only perform payment once
   */
  const ONCE = 4;

  /**
   * Perform payments quarterly.
   */
  const QUARTERLY = 5;

  /**
   * Billing period of twice per year.
   */
  const SEMIANNUALLY = 6;

  /**
   * Perform payments weekly.
   */
  const WEEKLY = 7;
}

?>