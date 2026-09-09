<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect\Ticket;

/**
 * Paragon ticket status.
 *
 * Last used id: 7.
 */
class DirectConnectTicketStatusSid
{
  /**
   * Ticket was canceled.
   */
  const CANCELLED = 1;

  /**
   * Ticket was completed.
   */
  const COMPLETE = 2;

  /**
   * Ticket in error state.
   */
  const ERROR = 3;

  /**
   * Ticket is processed.
   */
  const INPROCESS = 4;

  /**
   * Ticket is opened.
   */
  const OPEN = 6;

  /**
   * Ticket was reversed.
   */
  const REVERSED = 7;
}

?>