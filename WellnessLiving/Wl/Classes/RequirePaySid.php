<?php

namespace WellnessLiving\Wl\Classes;

/**
 * List of possible modes to require amount while booking a class.
 */
class RequirePaySid
{
  /**
   * Clients can pay online or pay when they visit.
   * If set "pay when visit" then it has additional options.
   */
  const ADVANCE = 3;

  /**
   * Client should leave a deposit before booking an event.
   */
  const DEPOSIT = 4;

  /**
   * Client must purchase online.
   */
  const ONLINE = 1;

  /**
   * Clients can only pay when they visit. Online payment is not available.
   */
  const VISIT = 2;
}

?>