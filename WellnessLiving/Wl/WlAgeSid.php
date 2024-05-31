<?php

namespace WellnessLiving\Wl;

/**
 * List of ages, which are suitable for visiting this location.
 */
abstract class WlAgeSid
{
  /**
   * An adult.
   */
  const ADULT = 2;

  /**
   * A kid.
   */
  const KID = 1;

  /**
   * Natal.
   */
  const NATAL = 4;

  /**
   * Senior.
   */
  const SENIOR = 3;
}

?>