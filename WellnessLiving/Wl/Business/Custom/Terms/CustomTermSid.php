<?php

namespace WellnessLiving\Wl\Business\Custom\Terms;

/**
 * Term slots available on the Custom Terms settings page.
 *
 * Last used ID: 5.
 */
class CustomTermSid
{
  /**
   * Appointment.
   *
   * @description Scheduled one-on-one services
   * @title Appointment
   */
  const APPOINTMENT = 2;

  /**
   * Business.
   *
   * @description What you call your organization
   * @title Business
   */
  const BUSINESS = 5;

  /**
   * Class.
   *
   * @description Group sessions clients can join
   * @title Class
   */
  const CLASS_TERM = 3;

  /**
   * Client.
   *
   * @description People with an account at your business
   * @title Client
   */
  const CLIENT = 4;

  /**
   * Staff.
   *
   * @description The people who deliver your services
   * @title Staff
   */
  const STAFF = 1;
}

?>