<?php

namespace WellnessLiving\Core\Sms;

/**
 * A list of SMS status.
 *
 * Last used id: 9
 */
class SmsStatusSid
{
  /**
   * SMS that was previously {@link SmsStatusSid::SCHEDULED} and then cancelled.
   */
  const CANCELLED = 7;

  /**
   * SMS has been sent, and confirmed as received by the recipient handset.
   */
  const DELIVERED = 8;

  /**
   * SMS was never sent - an error occurred at the time of sending.
   */
  const FAILED = 1;

  /**
   * SMS is scheduled internally to be sent at a later date.
   */
  const FUTURE = 4;

  /**
   * SMS is currently pending being sent.
   */
  const PENDING = 2;

  /**
   * SMS is scheduled with the external SMS provider to be sent at a later date.
   * We don't currently schedule messages through Twilio.
   */
  const SCHEDULED = 5;

  /**
   * SMS has been sent.
   */
  const SENT = 3;

  /**
   * SMS has been sent, but the carrier has reported that it was not delivered.
   */
  const UNDELIVERED = 9;

  /**
   * Unknown status.
   */
  const UNKNOWN = 6;
}

?>