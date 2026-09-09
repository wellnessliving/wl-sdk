<?php

namespace WellnessLiving\Wl;

/**
 * The list of available modes.
 */
abstract class RsPlaceSid
{
  /**
   * Backend mode.
   */
  const BACKEND = 2;

  /**
   * The script is executed in the background (like an asynchronous task, regular task or a cron method).
   */
  const BACKGROUND = 5;

  /**
   * Directory pages.
   */
  const DIRECTORY = 3;

  /**
   * Default frontend mode. All pages not in backend mode except microsite and directory pages.
   */
  const FRONTEND = 1;

  /**
   * Microsite pages.
   */
  const MICROSITE = 4;
}

?>