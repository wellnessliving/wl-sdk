<?php

namespace WellnessLiving\Wl;

/**
 * State of the steps to go through to make an appointment.
 *
 * Last used id: 4
 */
class RsAppointmentPathStateSid
{
  /**
   * Completed previous steps.
   */
  const COMPLETE = 1;

  /**
   * Currently opened step.
   */
  const CURRENT = 2;

  /**
   * Disabled and unavailable steps.
   */
  const DISABLE = 3;

  /**
   * Not opened yet steps.
   */
  const FUTURE = 4;
}

?>