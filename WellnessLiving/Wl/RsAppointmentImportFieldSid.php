<?php

namespace WellnessLiving\Wl;

/**
 * List of files that user can upload to import clients.
 *
 * Last used ID: 15
 */
abstract class RsAppointmentImportFieldSid
{
  /**
   * Alert for staff.
   */
  const ALERT_STAFF = 7;

  /**
   * Client's birthday date.
   */
  const BIRTHDAY = 12;

  /**
   * Client name.
   */
  const CLIENT = 4;

  /**
   * Date of appointment.
   */
  const DATE = 1;

  /**
   * Location name.
   */
  const LOCATION = 13;

  /**
   * Member ID.
   */
  const MEMBER = 11;

  /**
   * Appointment notes.
   */
  const NOTE = 6;

  /**
   * Appointment was paid with a promotion.
   */
  const PROMOTION = 10;

  /**
   * Appointment uses this resource.
   */
  const RESOURCE = 14;

  /**
   * Service name.
   */
  const SERVICE = 2;

  /**
   * Staff name.
   */
  const STAFF = 3;

  /**
   * Payment status.
   */
  const STATUS_PAY = 8;

  /**
   * Visit status.
   */
  const STATUS_VISIT = 9;

  /**
   * Ending time of appointment.
   */
  const TIME_END = 15;

  /**
   * Starting time of appointment.
   */
  const TIME_START = 5;
}

?>