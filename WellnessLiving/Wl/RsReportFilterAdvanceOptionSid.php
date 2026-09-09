<?php

namespace WellnessLiving\Wl;

/**
 * Describes types of option on advanced filter for purchase option.
 */
abstract class RsReportFilterAdvanceOptionSid
{
  /**
   * Duration Passes
   */
  const DURATION = 4;

  /**
   * Session-Based Passes
   */
  const LIMIT = 1;

  /**
   * Memberships
   */
  const MEMBERSHIP = 3;

  /**
   * Time-Based Passes
   */
  const SESSION = 2;
}

?>