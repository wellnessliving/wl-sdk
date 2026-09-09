<?php

namespace WellnessLiving\Wl;

/**
 * A list of payment methods.
 *
 * Last used ID: 13.
 */
abstract class WlPayMethodSid
{
  /**
   * Payment with personal user account (rs.pay.account).
   */
  const ACCOUNT = 7;

  /**
   * ACH system (USA-specific direct banking transactions).
   *
   * @link http://en.wikipedia.org/wiki/Automated_Clearing_House
   */
  const ACH = 9;

  /**
   * Payment with cash.
   */
  const CASH = 4;

  /**
   * Payment with a cheque.
   */
  const CHEQUE = 5;

  /**
   * Payment with a coupon.
   */
  const COUPON = 8;

  /**
   * Direct Entry system (australian-specific direct banking transactions).
   *
   * @link http://en.wikipedia.org/wiki/Financial_system_in_Australia#Direct_Entry
   */
  const DIRECT_ENTRY = 10;

  /**
   * Online payment. Card not present.
   */
  const ECOMMERCE = 2;

  /**
   * Payment with an external terminal.
   */
  const EXTERNAL = 6;

  /**
   * Special method to be used for migration process.
   *
   * There are sales in Mindbody that were not bought using account balance or reward points.
   * This is not real revenue and cannot be imported as real sales. So, they can be imported as this special method
   * to be in the system and to allow business owner to hide on sales report.
   *
   * In online store this method should not be available.
   */
  const IMPORT_ACCRUAL = 11;

  /**
   * Payment method at a Points of sale.
   */
  const POS = 1;
}

?>