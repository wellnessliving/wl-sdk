<?php

namespace WellnessLiving\Wl\Catalog;

use WellnessLiving\Wl\WlProgramSid;

/**
 * A list of Purchase Option view types.
 *
 * Last ID: 9.
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
     * Enrollments. Classes where flag event is <tt>true</tt>.
     */
  const ENROLLMENT = 4;

  /**
     * Promotions with programs:
     * * {@link WlProgramSid::ACCOUNT_MEMBERSHIP};
     * * {@link WlProgramSid::CLASS_MEMBERSHIP};
     * * {@link WlProgramSid::RESOURCE_MEMBERSHIP};
     * * {@link WlProgramSid::SERVICE_MEMBERSHIP};
     * * {@link WlProgramSid::VISIT_MEMBERSHIP}.
     */
  const MEMBERSHIP = 8;

  /**
     * Promotions with program {@link WlProgramSid::PACKAGE}.
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