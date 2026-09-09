<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect;

/**
 * Direct Connect gateway result codes related to tickets.
 */
class TicketResultSid
{
  /**
   * Communication Error.
   */
  const COMMUNICATION_ERROR = 6001;

  /**
   * Decline.
   *
   * Request was declined by processor.
   */
  const PROCESSOR_DECLINE = 12;

  /**
   * Host Not Available.
   *
   * DC Gateway unable to communicate with processor.
    */
  const PROCESSOR_HOST = 106;

  /**
   * Operation rejected.
   */
  const REJECT = 6000;

  /**
   * Tip not allowed.
   */
  const TIP_NOT_ALLOWED = 600;
}

?>