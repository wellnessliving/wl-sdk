<?php

namespace WellnessLiving\Wl\Schedule\Config;

use WellnessLiving\Wl\Virtual\VirtualProviderSid;

/**
 * List of possible values to filter classes by virtual/non-virtual in Schedule.
 *
 * Last used ID: 3.
 */
class ConfigVirtualSid
{
  /**
   * Virtual non implemented integration.
   *
   * Corresponds to {@link VirtualProviderSid::NON_INTEGRATED} virtual integration.
   */
  const NON_INTEGRATED = 1;

  /**
   * In-person Service.
   */
  const NON_VIRTUAL = 2;

  /**
   * Virtual Service (zoom integration and FitLIVE).
   *
   * Corresponds to {@link VirtualProviderSid::ZOOM} virtual integrations.
   */
  const VIRTUAL = 3;
}

?>