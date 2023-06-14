<?php

namespace WellnessLiving\Wl\Catalog;

/**
 * A list of Purchase Option view types.
 */
class PurchaseOptionViewSid
{
  /**
   * A single appointment reservation.
   */
  const APPOINTMENT = 1;

  /**
   * A single class reservation.
   */
  const CLASS_PERIOD = 2;

  /**
   * A gift card.
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
   * Products (such as water, t-shirts, etc.).
   */
  const PRODUCT = 6;

  /**
   * Session passes.
   */
  const PROMOTION = 7;

  /**
   * Products available for quick buy.
   */
  const QUICK_BUY = 9;
}

?>