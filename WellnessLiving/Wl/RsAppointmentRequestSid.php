<?php

namespace WellnessLiving\Wl;

/**
 * States of the requests for appointments.
 *
 * Last used ID: 5
 */
abstract class RsAppointmentRequestSid
{
  /**
   * Request is approved.
   */
  const APPROVE = 1;

  /**
   * Request is cancelled.
   */
  const CANCEL = 5;

  /**
   * Request is denied.
   */
  const DENY = 2;

  /**
   * Not requested.
   */
  const NONE = 4;

  /**
   * Wait for approve or deny.
   */
  const WAIT = 3;
}

?>