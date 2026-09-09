<?php

namespace WellnessLiving\Core\Locale;

/**
 * List of time formats, which are supported in the system and can be overridden for each locale.
 *
 * Name of the constant from this class should be a part of the name in the locale settings. This allows to describe
 * how this format should be implemented in the certain locale.
 * Name of such constants in the locale settings should be in the format TIME_FORMAT_ + constant from this class.
 * For example, format {@link TimeFormatSid::HOUR_MINUTE} is presented in the locale settings
 */
class TimeFormatSid
{
  /**
   * Format of the time without seconds.
   */
  const HOUR_MINUTE = 1;

  /**
   * Format of the time with seconds.
   */
  const HOUR_MINUTE_SECOND = 2;
}

?>