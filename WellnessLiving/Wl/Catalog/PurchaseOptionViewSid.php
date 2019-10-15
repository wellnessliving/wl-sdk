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
  public const APPOINTMENT = 1;

  /**
   * Single class reservation.
   */
  public const CLASS_PERIOD = 2;

  /**
   * Gift card.
   */
  public const COUPON = 3;

  /**
   * Enrollments.
   */
  public const ENROLLMENT = 4;

  /**
   * Memberships.
   */
  public const MEMBERSHIP = 8;

  /**
   * Packages.
   */
  public const PACKAGE = 5;

  /**
   * Products: water, t-shirts, etc.
   */
  public const PRODUCT = 6;

  /**
   * Passes.
   */
  public const PROMOTION = 7;

  /**
   * Goods that available for quick buy.
   */
  public const QUICK_BUY = 9;
}

?>