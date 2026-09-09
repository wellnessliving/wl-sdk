<?php

namespace WellnessLiving\Wl\Feedback;

/**
 * Feedback action types.
 *
 * Last used ID: 3.
 */
class FeedbackActionSid
{
  /**
   * User booked a service.
   */
  const BOOK = 1;

  /**
   * User purchased an item.
   */
  const PAY = 2;

  /**
   * User attended a service.
   */
  const VISIT = 3;
}

?>