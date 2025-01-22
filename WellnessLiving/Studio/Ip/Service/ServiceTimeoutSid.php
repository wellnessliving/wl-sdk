<?php

namespace WellnessLiving\Studio\Ip\Service;

/**
 * Time during which access by IP address is granted to personnel.
 *
 * Minimum between two values is used.
 */
abstract class ServiceTimeoutSid
{
  /**
   * Sensitive services that may require much work.
   */
  const DAY = 2;

  /**
   * Sensitive services that are used very rare.
   */
  const HOUR = 1;

  /**
   * Services that are not sensitive.
   */
  const MONTH = 4;

  /**
   * Not that sensitive services.
   */
  const WEEK = 3;
}

?>