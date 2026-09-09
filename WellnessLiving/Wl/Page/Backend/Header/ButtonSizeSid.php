<?php

namespace WellnessLiving\Wl\Page\Backend\Header;

/**
 * List of sizes for buttons in the top header panel of quick access.
 *
 * Order is not alphabetical, because we want to show these settings always in the fixed order. And also we don't expect
 * that there will be lot of options in this list, so alphabetical order is not necessary.
 *
 * Last used ID: 3.
 */
class ButtonSizeSid
{
  /**
   * Large icons.
   */
  const LARGE = 1;

  /**
   * Medium icons.
   */
  const MEDIUM = 2;

  /**
   * Small icons.
   */
  const SMALL = 3;
}

?>