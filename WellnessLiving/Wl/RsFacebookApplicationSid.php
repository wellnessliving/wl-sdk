<?php

namespace WellnessLiving\Wl;

/**
 * Class {@link RsFacebookApplicationSid} works with Facebook applications string identifiers.
 */
abstract class RsFacebookApplicationSid
{
  /**
   * Widget to create appointments.
   */
  const APPOINTMENT = 3;

  /**
   * Widget to select and buy enrollments.
   */
  const ENROLLMENT = 4;

  /**
   * Widget to place lead form.
   */
  const LEAD = 5;

  /**
   * Widget with schedule and ability to book classes. Mobile version.
   */
  const MOBILE_SCHEDULE = 6;

  /**
   * Widget to read and to leave reviews.
   */
  const REVIEW = 1;

  /**
   * Widget with schedule and ability to book classes.
   */
  const SCHEDULE = 21;

  /**
   * Widget with online store and tools to make a purchase.
   */
  const STORE = 22;
}

?>