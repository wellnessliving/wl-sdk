<?php

namespace WellnessLiving\Wl\Backend\Setup\Services;

/**
 * List of Setup->Appointments sort options.
 */
class ServicesSortSid
{
  /**
   * Sort by services order.
   */
  const CUSTOM = 4;

  /**
   * Sort by duration.
   */
  const DURATION = 2;

  /**
   * Sort by name/title.
   * Each entity can be sorted by name/title.
   */
  const NAME = 1;

  /**
   * Sort by price.
   */
  const PRICE = 3;
}

?>