<?php

namespace WellnessLiving\Wl\Location\Flag;

/**
 * Different sources of flags, which are not set manually by the staff member. Such flags have own logic.
 */
class FlagSourceEnum
{
  /**
   * Flag is set because user is sent to collections. This means user has debt and cannot make new purchases.
   * Flag is set and removed only automatically.
   */
  const COLLECTIONS = 1;
}

?>