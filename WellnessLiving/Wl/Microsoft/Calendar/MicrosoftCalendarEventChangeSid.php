<?php

namespace WellnessLiving\Wl\Microsoft\Calendar;

/**
 * The type of change in the subscribed resource that will raise a change notification.
 *
 * @link https://learn.microsoft.com/en-us/graph/api/resources/subscription?view=graph-rest-1.0#properties
 */
class MicrosoftCalendarEventChangeSid
{
  /**
   * Resource created.
   */
  const CREATE = 1;

  /**
   * Resource created.
   */
  const DELETE = 2;

  /**
   * Resource updated.
   */
  const UPDATE = 3;
}

?>