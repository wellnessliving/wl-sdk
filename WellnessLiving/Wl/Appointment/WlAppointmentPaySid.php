<?php

namespace WellnessLiving\Wl\Appointment;

/**
 * The possible payment types an appointment can have.
 */
class WlAppointmentPaySid
{
  /**
   * A deposit was paid.
   */
  const DEPOSIT = 2;

  /**
   * The full price was paid.
   */
  const FULL = 3;

  /**
   * Nothing was paid.
   */
  const NONE = 1;
}

?>