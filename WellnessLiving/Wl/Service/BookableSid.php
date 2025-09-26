<?php

namespace WellnessLiving\Wl\Service;

/**
 * A list of bookable types.
 */
class BookableSid
{
  /**
   * All users can book.
   */
  const ALL = 1;

  /**
   * Only special client groups can book.
   */
  const CUSTOM = 3;

  /**
   * Nobody can book.
   */
  const NONE = 2;
}

?>