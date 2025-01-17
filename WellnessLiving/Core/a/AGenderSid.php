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
     * Gender is undefined in cases where the user preferred not to identify their gender.
     */
  const UNDEFINED = 3;
}

?>