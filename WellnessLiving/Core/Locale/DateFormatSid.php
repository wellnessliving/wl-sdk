<?php

namespace WellnessLiving\Core\Locale;

/**
 * List of date formats, which are supported in the system and can be overridden for each locale.
 *
 * Name of the constant from this class should be a part of the name in the locale settings. This allows to describe
 * how this format should be implemented in the certain locale.
 * Name of such constants in the locale settings should be in the format DATE_FORMAT_ + constant from this class.
 * For example, format {@link DateFormatSid::LONG} is presented in the locale settings as {@link LocaleConfig::DATE_FORMAT_LONG}.
 *
 *  Last used ID: 5
 */
class DateFormatSid
{
  /**
   * The format of the date with day and month.
   * Use this format when you need to show information only in one year period.
   *
   * Example: Dec 03.
   */
  const DAY_AND_MONTH = 4;

  /**
   * Long format of the date with date of the week and name of the month.
   * Is used when day of week matters, for example, on the schedule.
   *
   * Example: Friday, Dec 30, 2022.
   */
  const LONG = 1;

  /**
   * Long format of the date with Short weekday, and full date.
   *
   * Example: Fri, Dec 30, 2022.
   */
  const LONG_WITH_SHORT_WEEK_DAY = 5;

  /**
   * Format of the date, when months are presented with a number instead of the name.
   * Can be used in calendar inputs and some specific places.
   */
  const NUMBERS_ONLY = 2;

  /**
   * Short format of the date with name of the month, but without day of the week.
   * The most used format in the system.
   *
   * Example: Dec 8, 2022.
   */
  const SHORT = 3;
}

?>