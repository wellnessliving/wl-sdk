<?php

namespace WellnessLiving\Wl\Profile;

/**
 * List of sources from where the user registers.
 */
class RegisterSourceSid
{
  /**
   * Source when a user registers during purchase or booking.
   *
   * <b>
   *  Don't use to edit existing user profile.
   *  Used only to register new clients during booking or purchase.
   * </b>
   */
  const BOOKING_AND_PURCHASE = 1;

  /**
   * Source when a user registers on self-registration web app, self-registration web app URL, etc.
   *
   * <b>Don't use to edit existing user profile.</b>
   */
  const SELF = 2;

  /**
   * This is a service value, which means to not choose any specific source.
   */
  const UNSET_VALUE = 3;
}

?>