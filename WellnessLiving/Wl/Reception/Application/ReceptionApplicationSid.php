<?php

namespace WellnessLiving\Wl\Reception\Application;

/**
 * States of the Check In web application.
 *
 * Check In process has multiple steps and state of the application is different on different steps.
 */
class ReceptionApplicationSid
{
  /**
   * Form to authorize user.
   */
  const AUTHORIZATION = 1;

  /**
   * Optional step, when client checked in, with confirmation about the visit.
   * Can be turned on and off in the business settings.
   */
  const CONFIRMATION = 2;

  /**
   * List of classes and appointments to check in and information about current user.
   */
  const SCHEDULE = 3;
}

?>