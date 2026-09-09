<?php

namespace WellnessLiving\Wl\Page\Backend\Header;

/**
 * Types of buttons in the top header panel of quick access.
 *
 * Defines how text labels will be placed among the icons.
 *
 * Order is not alphabetical, because we want to show these settings always in the fixed order. And also we don't expect
 * that there will be lot of options in this list, so alphabetical order is not necessary.
 *
 * Last used ID: 3.
 */
class ButtonTypeSid
{
  /**
   * Shows only icon, text label will be hidden.
   */
  const HIDE = 1;

  /**
   * Shows text label on the right side from the icon.
   */
  const RIGHT = 2;

  /**
   * Shows text under the icon.
   */
  const UNDER = 3;
}

?>