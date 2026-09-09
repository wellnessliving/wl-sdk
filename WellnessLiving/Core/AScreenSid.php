<?php

namespace WellnessLiving\Core;

/**
 * Class to work with screen definition. For example to choose a template for mobile, tab or pc.
 */
abstract class AScreenSid
{
  /**
   * Mobile phone.
   */
  const MOBILE = 1;

  /**
   * Personal computer.
   */
  const PC = 3;

  /**
   * Tablet computer.
   */
  const TAB = 2;
}

?>