<?php

namespace WellnessLiving;

/**
 * List of sale categories on the store page.
 *
 * Last ID: 12.
 */
abstract class WlSaleSid
{
  /**
   * Single appointment reservation.
   */
  public const APPOINTMENT = 8;

  /**
   * Single appointment deposit reservation.
   */
  public const APPOINTMENT_DEPOSIT = 11;

  /**
   * Tips for the appointment.
   */
  public const APPOINTMENT_TIP = 12;

  /**
   * Single class visit.
   */
  public const CLASS_PERIOD = 6;

  /**
   * Gift card.
   */
  public const COUPON = 7;

  /**
   * Enrollments. Classes where flag event is <tt>true</tt>.
   */
  public const ENROLLMENT = 3;

  /**
   * Promotions with program {@link WlProgramSid::PACKAGE}.
   */
  public const PACKAGE = 5;

  /**
   * Products: water, t-shirts, etc.
   */
  public const PRODUCT = 4;

  /**
   * Promotions with program category {@link WlProgramCategorySid::CLASS} and {@link WlProgramCategorySid::VISIT}.
   */
  public const PROMOTION_CLASS = 1;

  /**
   * Promotions with program category {@link WlProgramCategorySid::RESOURCE}.
   */
  public const PROMOTION_RESOURCE = 9;

  /**
   * Promotions with program category {@link WlProgramCategorySid::SERVICE}.
   */
  public const PROMOTION_SERVICE = 2;

  /**
   * Products: water, t-shirts, etc. That available for quick buy.
   */
  public const QUICK_BUY = 10;
}

?>