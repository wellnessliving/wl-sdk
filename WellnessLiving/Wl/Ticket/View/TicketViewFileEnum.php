<?php

namespace WellnessLiving\Wl\Ticket\View;

/**
 * The SID of a case is the value of `sid_
 *
 * @method static static|null sidEid(string $sid)
 */
class TicketViewFileEnum
{
  /**
   * The calendar file with the sessions of the event.
   */
  const CALENDAR = 1;

  /**
   * The PDF file with the tickets: one page for every ticket.
   */
  const PDF = 2;
}

?>