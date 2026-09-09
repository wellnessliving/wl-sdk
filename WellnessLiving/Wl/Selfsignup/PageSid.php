<?php

namespace WellnessLiving\Wl\Selfsignup;

/**
 * A list of pages shown in page "Self Registration".
 *
 * Last used ID: 7.
 */
abstract class PageSid
{
  /**
   * Page of user's contracts.
   */
  const CONTRACT = 3;

  /**
   * Page to find user.
   */
  const FIND = 5;

  /**
   * Main page.
   */
  const MAIN = 4;

  /**
   * Page of user's profile edit.
   */
  const PROFILE = 1;

  /**
   * Page to fill forms.
   */
  const QUIZ = 7;

  /**
   * New profile tab.
   */
  const TAB = 6;

  /**
   * Pages of business terms and conditions (online waiver).
   */
  const TERM = 2;
}

?>