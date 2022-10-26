<?php

namespace WellnessLiving\Core\a;

/**
 * String identifiers for gender.
 */
abstract class AGenderSid
{
  /**
   * Female gender.
   */
  const FEMALE = 2;

  /**
   * Male gender.
   */
  const MALE = 1;

  /**
   * Gender is undefined in case when user prefer not to say.
   */
  public const UNDEFINED = 3;
}

?>