<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Sms;

/**
 * Last ID: 15.
 */
class SmsUnsubscribeReasonSid
{
  /**
   * Not seeing enough results for the price.
   *
   * @title I'm not seeing enough results for the price
   */
  const NOT_ENOUGH_RESULTS = 10;

  /**
   * Does not fit how the business manages communication.
   *
   * @title It doesn't fit how I manage client communication
   */
  const NOT_FIT = 14;

  /**
   * Not using the features enough.
   *
   * @title I'm not using the features enough
   */
  const NOT_USING_FEATURES = 11;

  /**
   * Did not have time to set it up properly.
   *
   * @title I didn't have time to set it up properly
   */
  const NO_TIME_TO_SETUP = 12;

  /**
   * Uses another messaging platform.
   *
   * @title I use another messaging platform
   */
  const USE_ANOTHER_PLATFORM = 15;

  /**
   * Setup process felt too complicated.
   *
   * @title My clients prefer to communicate another way
   */
  const USE_ANOTHER_WAY = 13;
}

?>