<?php

namespace WellnessLiving\Wl\Quiz\Response;

/**
 * List of sources where quiz response can be generated.
 *
 * Last used ID: 6
 */
class SourceSid
{
  /**
   * Quiz response received during booking process.
   */
  const BOOKING = 2;

  /**
   * Quiz response was imported.
   */
  const IMPORT = 6;

  /**
   * Quiz response received by direct link.
   */
  const LINK = 1;

  /**
   * Quiz response received by direct link.
   *
   * @title Studio
   */
  const MANUAL = 5;

  /**
   * Quiz response received during purchase process.
   */
  const PURCHASE = 4;

  /**
   * Quiz response received during registration process.
   */
  const REGISTRATION = 3;
}

?>