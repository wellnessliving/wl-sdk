<?php

namespace WellnessLiving\Wl\GymPass\Webhook;

/**
 * Enum to indicate the event type.
 */
class EventTypeSid
{
  /**
   * Early cancellation booking event.
   */
  const BOOKING_CANCELED = 1;

  /**
   * Late cancellation booking event.
   */
  const BOOKING_LATE_CANCELED = 2;

  /**
   * Create booking event.
   */
  const BOOKING_REQUESTED = 3;

  /**
   * Create booking event.
   *
   * Same as {@link EventTypeSid::CHECKIN_BOOKING_OCCURRED}
   */
  const CHECKIN = 4;

  /**
   * Create booking event.
   *
   * Same as {@link EventTypeSid::CHECKIN}
   */
  const CHECKIN_BOOKING_OCCURRED = 5;
}

?>