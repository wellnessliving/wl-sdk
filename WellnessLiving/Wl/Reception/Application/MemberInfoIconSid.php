<?php

namespace WellnessLiving\Wl\Reception\Application;

/**
 * Define types of icons for notice messages.
 */
abstract class MemberInfoIconSid
{
  /**
   * Icon of an award ribbon. For celebration of an occasion (e.g. a client's first visit).
   */
  const AWARD = 1;

  /**
   * Icon of a birthday cake. For birthday messages.
   */
  const CAKE = 2;

  /**
   * Icon of a signed contract.
   */
  const CONTRACT = 3;

  /**
   * Icon of a document with a slash. For the unsigned waiver message.
   */
  const DOCUMENT_SLASH = 4;

  /**
   * Icon of dollar sign. For messages relating to personal balance and amounts due.
   */
  const DOLLAR = 5;

  /**
   * Icon of a dumbbell. For messages relating to visits.
   */
  const DUMBBELL = 6;

  /**
   * Icon of a form.
   */
  const FORM = 7;

  /**
   * Icon of an "i". Used for general informative messages.
   */
  const INFO = 8;

  /**
   * Icon of an "x". For messages communicating some important or urgent issue for the user.
   */
  const PROBLEM = 9;

  /**
   * Icon of an exclamation mark. For messages communicating a mild issue or cautioning the user.
   */
  const WARNING = 10;
}

?>