<?php

namespace WellnessLiving\Wl\Catalog;

/**
 * List of purchase options view types.
 */
class PurchaseOptionViewSid
{
  /**
   * Single appointment reservation.
   */
  const APPOINTMENT = 1;

  /**
   * Single class reservation.
   */
  const CLASS_PERIOD = 2;

  /**
   * Gift card.
   */
  const COUPON = 3;

  /**
   * Enrollments.
   */
  const ENROLLMENT = 4;

  /**
   * Memberships.
   */
  const MEMBERSHIP = 8;

  /**
   * Packages.
   */
  const PACKAGE = 5;

  /**
   * Products: water, t-shirts, etc.
   */
  const PRODUCT = 6;

  /**
   * Passes.
   */
  const PROMOTION = 7;

  /**
   * Goods that available for quick buy.
   */
  const QUICK_BUY = 9;
}

?>