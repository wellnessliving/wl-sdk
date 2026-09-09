<?php

namespace WellnessLiving\Core\Request;

/**
 * Request modes.
 */
class RequestModeSid
{
  /**
   * To run a controller.
   */
  const CONTROLLER = 2;

  /**
   * To echo file as a static.
   */
  const FILE = 6;

  /**
   * "Page not found" error.
   */
  const NX = 7;

  /**
   * To redirect to another URL.
   */
  const REDIRECT = 4;
}

?>