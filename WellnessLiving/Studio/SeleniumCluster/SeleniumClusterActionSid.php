<?php

namespace WellnessLiving\Studio\SeleniumCluster;

/**
 * A list of actions that can be done on the page of monitor the selenium cluster state.
 *
 * Last used: 5.
 */
class SeleniumClusterActionSid
{
  /**
   * Add server.
   */
  const SERVER_ADD = 1;

  /**
   * Enable/Disable automatic server management.
   */
  const SERVER_AUTO_MANAGEMENT = 2;

  /**
   * Disable server.
   */
  const SERVER_DISABLE = 3;

  /**
   * Remove server.
   */
  const SERVER_REMOVE = 4;
}

?>