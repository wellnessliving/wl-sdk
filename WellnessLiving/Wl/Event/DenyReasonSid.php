<?php

namespace WellnessLiving\Wl\Event;

/**
 * Reasons why the client can't book this event.
 *
 * Note: Avoid adding any constants to this SID. Add them to the base class {@link \WellnessLiving\Wl\Schedule\ClassView\DenyReasonSid}
 * instead. Because if you add them here, and new constants are later added to the base class, we could have ID conflicts.
 * And usually, whatever issue there could be with an event, there could be with a class as well, since they share the
 * same underlying functionality.
 */
class DenyReasonSid
{
  }

?>