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
   * Operation rejected.
   */
  const REJECT = 6000;

  /**
   * Tip not allowed.
   */
  const TIP_NOT_ALLOWED = 600;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.DirectConnect.TicketResultSid';
}

?>