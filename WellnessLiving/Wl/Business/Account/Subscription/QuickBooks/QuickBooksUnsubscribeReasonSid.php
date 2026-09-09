<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\QuickBooks;

/**
 * List of reasons for unsubscribing from the {@link QuickBooksUnsubscribeReasonSid}.
 *
 * Last ID: 9.
 */
class QuickBooksUnsubscribeReasonSid
{
  /**
   * Privacy, ethical or security concerns.
   *
   * @title I have privacy, ethical or security concerns
   */
  const HAVE_CONCERNS = 8;

  /**
   * Not enough value.
   *
   * @title I don't see enough value for the price
   */
  const NOT_ENOUGH_VALUE = 3;

  /**
   * Other reason.
   *
   * @title Other (please specify)
   */
  const OTHER = 9;

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