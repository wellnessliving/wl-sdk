<?php

namespace WellnessLiving\Core\Amazon\Region;

/**
 * A list of known worlds.
 */
class AmazonWorldSid
{
  /**
   * Backup servers.
   */
  const BACKUP = 1;

  /**
   * Developers computers.
   */
  const DEVELOPER = 2;

  /**
   * Productions (production US and production AU).
   */
  const PRODUCTIONS = 3;

  /**
   * Sandbox (Demo and Staging).
   */
  const SANDBOX = 4;

  /**
   * Primary DC on all stands.
   */
  const STAND = 8;

  /**
   * Studio.
   */
  const STUDIO = 5;

  /**
   * Unknown world (set by default).
   */
  const UNKNOWN = 7;
}

?>