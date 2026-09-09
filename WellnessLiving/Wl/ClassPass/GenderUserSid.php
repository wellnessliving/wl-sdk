<?php

namespace WellnessLiving\Wl\ClassPass;

/**
 * List of available genders in <tt>Classpass</tt> for clients.
 */
class GenderUserSid
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