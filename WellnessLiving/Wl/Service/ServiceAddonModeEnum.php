<?php

namespace WellnessLiving\Wl\Service;

/**
 * Mode of using an appointment service as an add-on of other appointments.
 */
class ServiceAddonModeEnum
{
  /**
   * Clients can book the service only as an add-on of another appointment, never on its own.
   */
  const ADD_ON_ONLY = 2;

  /**
   * Clients can book the service on its own, or add it to another appointment.
   */
  const BOTH = 3;

  /**
   * Clients can book the service only on its own, it cannot be added to another appointment.
   */
  const OWN_ONLY = 1;
}

?>