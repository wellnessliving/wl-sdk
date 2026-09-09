<?php

namespace WellnessLiving\Wl;

/**
 * Sid class for mail history reports filter.
 */
abstract class RsMailHistoryFilterSid
{
  /**
   * The same as {@link RsMailHistorySid::BOUNCED}.
   *
   * @see RsMailHistorySid::BOUNCED
   */
  const BOUNCED = 3;

  /**
   * The same as {@link RsMailHistorySid::FAIL}.
   *
   * @see RsMailHistorySid::FAIL
   */
  const FAIL = 5;

  /**
   * Set this email history status when message was scheduled on the future.
   *
   * @see RsMailHistorySid::FUTURE
   */
  const FUTURE = 6;

  /**
   * Defines letters only with send status.
   * This letters were sent but not open.
   *
   * @see RsMailHistorySid::SEND
   */
  const NOT_OPEN = 1;

  /**
   * The same as {@link RsMailHistorySid::OPEN}.
   *
   * @see RsMailHistorySid::OPEN
   */
  const OPEN = 2;

  /**
   * The same as {@link RsMailHistorySid::SCHEDULE}.
   *
   * @see RsMailHistorySid::SCHEDULE
   */
  const SCHEDULE = 4;
}

?>