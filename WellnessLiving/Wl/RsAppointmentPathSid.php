<?php

namespace WellnessLiving\Wl;

/**
 * Steps to go through to make an appointment.
 *
 * Last used ID: 11
 */
class RsAppointmentPathSid
{
  /**
   * Choose addons for service.
   */
  const ADDON = 8;

  /**
   * Choose an asset.
   */
  const ASSET = 7;

  /**
   * Choose a client, sign in or sign up.
   */
  const CLIENT = 1;

  /**
   * Choose a date and time.
   */
  const DATE = 5;

  /**
   * @title Non-integrated virtual service link
   */
  const LINK_JOIN = 10;

  /**
   * Notification settings for reschedule appointment.
   */
  const NOTIFICATION = 12;

  /**
   * Answer questions.
   */
  const QUESTION = 9;

  /**
   * Answer to form.
   */
  const QUIZ = 11;

  /**
   * Select the assets for service.
   */
  const RESOURCE = 6;

  /**
   * Select a location and service.
   */
  const SERVICE = 3;

  /**
   * Select a staff.
   */
  const STAFF = 4;
}

?>