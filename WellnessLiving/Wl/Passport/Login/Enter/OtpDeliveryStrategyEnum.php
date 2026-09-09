<?php

namespace WellnessLiving\Wl\Passport\Login\Enter;

/**
 * List of different OTP code delivery strategies.
 */
class OtpDeliveryStrategyEnum
{
  /**
   * OTP code is sent to all given communication channels (sms, emails, etc.)
   *
   * @title Broadcast
   */
  const BROADCAST = 1;

  /**
   * OTP code is sent to the first communication channel that is available, according to the given list of priorities.
   *
   * @title Priority
   */
  const PRIORITY = 2;
}

?>