<?php

namespace WellnessLiving\Wl\Service\Edit;

/**
 * State of displaying applicable purchase options during booking for staff and client.
 */
abstract class PromotionAvailableModeSid
{
  /**
   * Display applicable purchase options during booking for clients and staff members.
   */
  const DISPLAY = 1;

  /**
   * Hide applicable purchase options from clients and staff members.
   */
  const HIDE = 3;

  /**
   * Hide applicable purchase options from clients.
   */
  const HIDE_FROM_CLIENTS = 2;
}

?>