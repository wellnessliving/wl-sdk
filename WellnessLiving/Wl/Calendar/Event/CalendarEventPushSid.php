<?php

namespace WellnessLiving\Wl\Calendar\Event;

/**
 * Actions that can be performed with events in the calendar.
 *
 * Last used ID: 2
 */
class CalendarEventPushSid
{
  /**
   * Delete event from the calendar.
   */
  const DELETE = 1;

  /**
   * Add or update a calendar event.
   */
  const INSERT_UPDATE = 2;
}

?>