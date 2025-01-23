<?php

namespace WellnessLiving\Wl\Appointment;

/**
 * The possible payment types an appointment can have.
 */
abstract class WlAppointmentPaySid
{
  /**
   * A deposit was paid.
   */
  const DEPOSIT = 2;

  /**
   * Appointment is free and does not require payment.
   */
  const FREE = 4;

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