<?php

namespace WellnessLiving\Wl;

/**
 * List of modes to change user's "flag" status within a location
 */
abstract class RsLoginNoteFlagSid
{
  /**
   * Add flag record.
   */
  const ADD = 1;

  /**
   * Remove flag record.
   */
  const REMOVE = 2;
}

?>