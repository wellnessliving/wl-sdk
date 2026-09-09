<?php

namespace WellnessLiving\Wl\User\DuplicateIndex;

/**
 * Operation list to analyze duplicate clients.
 */
class UserDuplicateOperationSid
{
  /**
   * User field contains <tt>n</tt> similar symbols.
   */
  const CONTAIN = 1;

  /**
   * User field ends with <tt>n</tt> similar symbols.
   */
  const END = 2;

  /**
   * User field starts with <tt>n</tt> similar symbols.
   */
  const START = 3;
}

?>