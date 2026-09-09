<?php

namespace WellnessLiving\Wl\User\DuplicateIndex;

/**
 * List of fields which should be indexed.
 */
class UserDuplicateFieldSid
{
  /**
   * Email client field.
   */
  const MAIL = 1;

  /**
   * Name first client field.
   */
  const NAME_FIRST = 2;

  /**
   * Name second client field.
   */
  const NAME_LAST = 3;

  /**
   * Phone client field.
   */
  const PHONE = 4;
}

?>