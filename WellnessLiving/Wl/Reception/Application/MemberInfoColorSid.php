<?php

namespace WellnessLiving\Wl\Reception\Application;

/**
 * Define colors of notice messages.
 *
 * Describes the connotation behind messages. An available balance notice has a positive connotation and should be
 * displayed in a different color from notices of an expiring credit card or pass, which are negative.
 *
 * Last ID: 4.
 */
abstract class MemberInfoColorSid
{
  /**
   * Default for neutral, informative messages. Displayed in blue.
   */
  const BLUE = 1;

  /**
   * Positive messages. Displayed in green.
   */
  const GREEN = 2;

  /**
   * Mild negative messages to warn the user. Displayed in orange.
   */
  const ORANGE = 3;

  /**
   * Negative messages with strong importance or urgency. Displayed in red.
   */
  const RED = 4;
}

?>