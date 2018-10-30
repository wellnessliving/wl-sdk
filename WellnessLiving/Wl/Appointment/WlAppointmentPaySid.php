<?php

namespace WellnessLiving\Wl\Appointment;

/**
 * Possible payment types an appointment can have.
 */
class WlAppointmentPaySid
{
  /**
   * Deposit was paid.
   */
  const DEPOSIT = 2;

  /**
   * Full price was paid.
   */
  const FULL = 3;

  /**
   * Nothing was paid.
   */
  const NONE = 1;
}

?>