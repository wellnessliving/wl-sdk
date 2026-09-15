<?php

namespace WellnessLiving\Wl\Profile;

/**
 * List of sources from where the user registers.
 */
class RegisterSourceSid
{
  /**
   * Source when a user registers while booking a service.
   *
   * <b>Don't use to edit existing user profile.</b>
   */
  const BOOKING = 4;

  /**
   * Source when a user registers during purchase or booking.
   *
   * <b>
   *  Don't use to edit existing user profile.
   *  Used only to register new clients during booking or purchase.
   * </b>
   *
   * @deprecated Use {@link RegisterSourceSid::BOOKING} or {@link RegisterSourceSid::PURCHASE} instead, so that
   *  the booking and purchase entry points can be configured independently. Kept for `@sdk` compatibility.
   */
  const BOOKING_AND_PURCHASE = 1;

  /**
   * Source when a guest (an unregistered visitor) books a service or makes a purchase.
   *
   * Independent of {@link RegisterSourceSid::BOOKING}/{@link RegisterSourceSid::PURCHASE} - a guest may be
   *  asked for a field even when a registered client is not, and vice versa.
   */
  const GUEST = 6;

  /**
   * Source when a user registers while making a purchase.
   *
   * <b>Don't use to edit existing user profile.</b>
   */
  const PURCHASE = 5;

  /**
   * Source when a client adds a family member (a relative profile) - directly, or as part of booking or purchase.
   */
  const RELATIONSHIP = 7;

  /**
   * Source when a user registers on self-registration web app, self-registration web app URL, etc.
   *
   * <b>Don't use to edit existing user profile.</b>
   */
  const SELF = 2;

  /**
   * Source when staff add or edit a client profile.
   */
  const STAFF = 8;

  /**
   * This is a service value, which means to not choose any specific source.
   */
  const UNSET_VALUE = 3;
}

?>