<?php

namespace WellnessLiving\Studio\Ip;

/**
 * Types of access rights.
 */
abstract class AccessSid
{
  /**
   * Access granted automatically, upon user sign in.
   */
  const AUTO = 1;

  /**
   * Access granted manually by the user, when he clicks a button.
   *
   * Access is granted if there is at least one staff member which has acquired access.
   */
  const MANUAL = 2;
}

?>