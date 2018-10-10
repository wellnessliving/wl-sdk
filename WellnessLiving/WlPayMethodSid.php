<?php

namespace WellnessLiving;

/**
 * A list of payment methods.
 */
class WlPayMethodSid
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
   *
   * Purchased coupons are stored in {@link RsLoginCouponSql}.
   *
   * Payment method is implemented in {@link RsPayMethodCoupon}.
   *
   * Coupon-based transactions are implemented in {@link RsPayTransactionCoupon}.
   *
   * Data for coupon-based transactions is stored in {@link RsPayTransactionCouponSql}.
   *
   * @see RsLoginCouponSql
   * @see RsPayMethodCoupon
   * @see RsPayTransactionCoupon
   * @see RsPayTransactionCouponSql
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
   * Payment method at a Points of sale.
   */
  const POS = 1;

  /**
   * Test payment method.
   */
  const TEST = 3;
}

?>