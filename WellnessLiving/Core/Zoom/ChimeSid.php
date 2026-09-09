<?php

namespace WellnessLiving\Core\Zoom;

/**
 * List of available options for chime notifications.
 *
 * Last used ID: 3.
 */
class ChimeSid
{
  /**
   * Both hosts and attendees will receive notifications.
   */
  const ALL = 1;

  /**
   * Only host will receive notifications.
   */
  const HOST = 2;

  /**
   * No one will receive notifications.
   */
  const NONE = 3;
}

?>