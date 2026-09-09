<?php

namespace WellnessLiving\Wl\Widget\Push;

/**
 * Type of foreign (microservice-backed) widget - stored as `wl_foreign_widget.id_type`, one value per
 *
 * Last used: 3
 */
class ForeignWidgetEnum
{
  /**
   * Lead capture widget.
   *
   * @title Lead Capture
   */
  const LEAD = 1;

  /**
   * Custom schedule widget.
   *
   * @title Custom Schedule
   */
  const SCHEDULE = 2;

  /**
   * Store widget.
   *
   * @title Store
   */
  const STORE = 3;
}

?>