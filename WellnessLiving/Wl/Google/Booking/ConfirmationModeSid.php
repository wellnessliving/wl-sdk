<?php

namespace WellnessLiving\Wl\Google\Booking;

/**
 * The confirmation modes used when booking availabilities.
 */
class ConfirmationModeSid
{
  /**
   * Bookings for this availability will be confirmed asynchronously.
   */
  const CONFIRMATION_MODE_ASYNCHRONOUS = 2;

  /**
   * Bookings for this availability will be confirmed synchronously.
   */
  const CONFIRMATION_MODE_SYNCHRONOUS = 1;

  /**
   * The confirmation mode was not specified.
   * Synchronous confirmation will be assumed.
   */
  const CONFIRMATION_MODE_UNSPECIFIED = 3;
}

?>