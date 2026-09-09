<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect\Ticket;

/**
 * List of test scenario that change {@link \Thoth\PayProcessor\DirectConnect\Ticket\DirectConnectTicketStatusAsync}
 * behaviour just for tests.
 */
class DirectConnectTicketStatusAsyncTestScenarioSid
{
  /**
   * Test scenario when void process was initiated prior second authorization process end (swiping card).
   */
  const VOID_INITIATED_AUTHORIZATION_END = 2;

  /**
   * Test scenario when void process was initiated prior second authorization process start (swiping card).
   */
  const VOID_INITIATED_AUTHORIZATION_START = 1;
}

?>