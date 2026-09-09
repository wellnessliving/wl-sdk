<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\AiAgent;

/**
 * Last ID: 9.
 */
class AiAgentUnsubscribeReasonSid
{
  /**
   * Privacy, ethical or security concerns.
   *
   * @title I have privacy, ethical or security concerns
   */
  const HAVE_CONCERNS = 8;

  /**
   * Doesn't respond accurately.
   *
   * @title It doesn't respond accurately
   */
  const NOT_ACCURATELY = 5;

  /**
   * Not enough value.
   *
   * @title I don't see enough value for the price
   */
  const NOT_ENOUGH_VALUE = 3;

  /**
   * Don't understand what CAASI is/does.
   *
   * @title I don't understand what CAASI is/does
   */
  const NOT_UNDERSTAND = 7;

  /**
   * Other reason.
   *
   * @title Other (please specify)
   */
  const OTHER = 9;

  /**
   * Prefer interactions of staff.
   *
   * @title I prefer to let my staff handle client interactions
   */
  const PREFER_STAFF_INTERACTIONS = 4;

  /**
   * Too expensive.
   *
   * @title It's too expensive for my business right now
   */
  const TOO_EXPENSIVE = 2;

  /**
   * Use another tool.
   *
   * @title I already use another tool
   */
  const USE_ANOTHER = 1;
}

?>