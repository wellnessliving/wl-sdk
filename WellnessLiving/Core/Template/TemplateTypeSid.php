<?php

namespace WellnessLiving\Core\Template;

/**
 * A list of types of template sets.
 *
 * Last used ID: 4.
 */
class TemplateTypeSid
{
  /**
   * General-purpose template set. This is the default type of template set.
   */
  const DESKTOP = 1;

  /**
   * This template is intended for usage in frames.
   */
  const FRAME = 2;

  /**
   * This is a print version.
   */
  const PRN = 3;

  /**
   * Single page application.
   */
  const SPA = 4;
}

?>