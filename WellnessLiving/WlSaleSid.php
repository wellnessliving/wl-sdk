<?php

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
  const APPOINTMENT = 8;

  /**
   * Single appointment deposit reservation.
   */
  const APPOINTMENT_DEPOSIT = 11;

  /**
   * Tips for the appointment.
   */
  const APPOINTMENT_TIP = 12;

  /**
   * Single class visit.
   */
  const CLASS_PERIOD = 6;

  /**
   * Gift card.
   */
  const COUPON = 7;

  /**
   * Enrollments. Classes where flag event is <tt>true</tt>.
   */
  const ENROLLMENT = 3;

  /**
   * Promotions with program {@link RsProgramSid::PACKAGE}.
   */
  const PACKAGE = 5;

  /**
   * Products: water, t-shirts, etc.
   */
  const PRODUCT = 4;

  /**
   * Promotions with program category {@link RsProgramCategorySid::CLASS} and {@link RsProgramCategorySid::VISIT}.
   */
  const PROMOTION_CLASS = 1;

  /**
   * Promotions with program category {@link RsProgramCategorySid::RESOURCE}.
   */
  const PROMOTION_RESOURCE = 9;

  /**
   * Promotions with program category {@link RsProgramCategorySid::SERVICE}.
   */
  const PROMOTION_SERVICE = 2;

  /**
   * Products: water, t-shirts, etc. That available for quick buy.
   */
  const QUICK_BUY = 10;
}

?>