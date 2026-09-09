<?php

namespace WellnessLiving\Wl\Backend\Setup\Events;

/**
 * List of Setup->Events sort options.
 */
class EventsSortSid
{
  /**
   * Sort by lowest price available (entire event price).
   */
  const PRICE = 2;

  /**
   * Sort by date of the first bookable upcoming session.
   */
  const UPCOMING_SESSION_DATE = 3;
}

?>