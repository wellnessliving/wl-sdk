<?php

namespace WellnessLiving\Wl\Calendar\Provider;

/**
 * List of statuses in which the calendar can be found.
 *
 * Last used ID: 5
 */
class CalendarProviderStateSid
{
  /**
   * Unknown error while connecting to calendar.
   */
  const CONNECT_ERROR = 1;

  /**
   * Can be used as a successful result for some operations with a calendar.
   */
  const DONE = 5;

  /**
   * The calendar exists.
   *
   * In this state, calendar requests should be allowed.
   */
  const EXIST = 2;

  /**
   * The calendar not found.
   * It is assumed that in this state a calendar can be added to the user.
   */
  const NOT_EXIST = 3;

  /**
   * The access token has expired or the user has no connection to the provider at all.
   */
  const TOKEN_EXPIRE = 4;
}

?>