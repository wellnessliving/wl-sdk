<?php

namespace WellnessLiving\Wl\Profile;

/**
 * List of sources from where the user registers.
 */
class RegisterSourceSid
{
  /**
   * Source when user register during purchase or booking.
   *
   * <b>Don't use for edit existing user profile!</b>
   */
  const BOOKING_AND_PURCHASE = 1;

  /**
   * Source when user register on self registration web app, self registration web app URL etc.
   */
  const SELF = 2;
}

?>