<?php

namespace WellnessLiving\Wl\Appointment;

/**
 * List of possible types of the appointments. Some appointments requires staff, some requires only assets.
 */
class AppointmentTypeSid
{
  /**
   * Appointment to attend some bookable asset. Service and staff for such appointment are empty.
   */
  const RESOURCE = 2;

  /**
   * Appointment for some service with the staff. Assets can be required or not.`
   */
  const SERVICE = 1;
}

?>