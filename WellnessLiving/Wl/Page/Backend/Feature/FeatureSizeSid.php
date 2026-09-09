<?php

namespace WellnessLiving\Wl\Page\Backend\Feature;

/**
 * List of sizes for feature buttons in the left panel.
 *
 * Last used ID: 3.
 */
class FeatureSizeSid
{
  /**
   * Buttons with almost the same width as left panel.
   */
  const LARGE = 1;

  /**
   * Buttons that are twice bigger than default small size {@link FeatureSizeSid::SMALL}.
   */
  const MEDIUM = 2;

  /**
   * The smallest size of the buttons. Three buttons of this size can be in one row.
   */
  const SMALL = 3;
}

?>