<?php

namespace WellnessLiving\Wl\Sms\A2p;

/**
 * Registration status for Twilio A2P10DLC registration.
 *
 * Last used id: 8.
 */
class RegistrationStatusSid
{
  /**
   * A2P10DLC registration is required for this business on a certain date.
   * Happens for businesses in the US that were clients before the A2P10DLC registration was released.
   *
   * @see RegistrationStatusSid::DATE_OVERDUE
   */
  const DATE_LOOMING = 3;

  /**
   * A2P10DLC registration is required for this business on a certain date, and that date has passed.
   *
   * @see RegistrationStatusSid::DATE_LOOMING
   */
  const DATE_OVERDUE = 4;

  /**
   * A2P10DLC registration is not required for this business.
   * Usually means the business is outside the US.
   */
  const NOT_REQUIRED = 1;

  /**
   * A2P10DLC registration has been submitted and is pending approval.
   */
  const PENDING = 5;

  /**
   * A2P10DLC registration has been submitted and approved.
   */
  const REGISTERED = 6;

  /**
   * A2P10DLC registration was rejected and needs to be resubmitted.
   */
  const REJECTED = 7;

  /**
   * A2P10DLC registration is required for this business.
   * Happens for businesses in the US that became clients after the A2P10DLC registration was released.
   */
  const REQUIRED = 2;

  /**
   * A2P10DLC registration was suspended and needs to be rectified with Twilio support.
   */
  const SUSPENDED = 8;
}

?>