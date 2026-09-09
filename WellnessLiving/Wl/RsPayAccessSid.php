<?php

namespace WellnessLiving\Wl;

/**
 * Access rules for payment methods.
 */
abstract class RsPayAccessSid
{
  /**
   * If a hidden source is added, this value behaves like {@link RsPayAccessSid::MULTIPLE} with a difference that number
   *
   * If a hidden source is not added, this value behaves like {@link RsPayAccessSid::NO}.
   */
  const HIDE = 4;

  /**
   * Multiple sources may be selected for this method.
   */
  const MULTIPLE = 3;

  /**
   * No access to the method.
   *
   * This is the default access rule.
   */
  const NO = 1;

  /**
   * Only a single source may be selected for this method.
   */
  const SINGLE = 2;
}

?>