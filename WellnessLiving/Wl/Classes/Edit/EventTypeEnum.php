<?php

namespace WellnessLiving\Wl\Classes\Edit;

/**
 * Type of the event, which defines how clients book it and how they pay for it.
 */
class EventTypeEnum
{
  /**
   * Clients book the event once and attend every session in the schedule.
   *
   * @title Block event
   */
  const BLOCK = 2;

  /**
   * Clients pick which sessions to book and can pay per session.
   *
   * @title Non-block event
   */
  const NON_BLOCK = 1;

  /**
   * Tickets are sold for a set number of seats and are paid up front. Anyone can buy a ticket,
   * no account is needed, and every ticket is a QR code that staff scan at the door.
   *
   * @title Ticketed event
   */
  const TICKETED = 3;
}

?>