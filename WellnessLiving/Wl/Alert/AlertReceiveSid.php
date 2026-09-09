<?php

namespace WellnessLiving\Wl\Alert;

/**
 * Determines whether the user wish to see all alerts, only their alerts, or none.
 *
 * Last used ID: 3.
 */
class AlertReceiveSid
{
  /**
   * The user will receive all alerts pertaining to that type of alert.
   *
   * @title Alerts for all staff
   */
  const ALERT_FOR_ALL = 1;

  /**
   * The user will receive only alerts addressed to them (i.e. new service booking for a service they run, service
   * cancellation for a service they run, etc.)
   *
   * @title Alerts for me
   */
  const ALERT_FOR_ME = 2;

  /**
   * The user will not receive alerts pertaining to that type of alert.
   *
   * @title No alerts
   */
  const NO_ALERT = 3;
}

?>