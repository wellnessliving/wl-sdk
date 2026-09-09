<?php

namespace WellnessLiving\Wl;

/**
 * Skin element type identifier.
 *
 * Last used ID: 18.
 */
abstract class RsSkinElementSid
{
  /**
   * Configuration of home screen sections of mobile application.
   */
  const APPLICATION_HOME_SECTION = 18;

  /**
   * Configuration of navigation buttons of mobile application.
   */
  const APPLICATION_NAVIGATION = 17;

  const CHECKBOX = 1;

  const COLOR = 2;

  const FONT = 3;

  const IMAGE = 9;

  /**
   * Display the input text.
   *
   * Element title and input element are located on different rows.
   */
  const INPUT_TEXT = 10;

  const ORDER = 7;

  const SELECT = 4;

  const SHOW = 8;

  /**
   * Represents a list of elements to hide or show and selects default option for each element.
   */
  const SHOW_COMBO = 12;

  /**
   * Represents a list of elements to hide or show and selects default element.
   */
  const SHOW_RADIO = 11;

  const SIZE = 5;

  /**
   * A slider.
   */
  const SLIDER = 16;

  const TEXT = 6;

  /**
   * Represents a textarea.
   */
  const TEXTAREA = 15;

  /**
   * Represents a published URL.
   */
  const URL = 14;

  /**
   * Display select of week days.
   */
  const WEEK_DAY = 13;
}

?>