<?php

namespace WellnessLiving\Wl\Login\Promotion\Convert;

/**
 * Different types of conversion behavior: when and how it should be converted.
 */
class ConvertWhenSid
{
  /**
   * Purchase Option converts one day after the scheduled expiration date and the client is charged for the new purchase option.
   */
  const EXPIRATION_PAID = 1;

  /**
   * Purchase Option converts now and the client is not charged for the new Purchase Option.
   */
  const NOW_FREE = 2;

  /**
   * Purchase Option converts now and the client is changed for the new Purchase Option.
   */
  const NOW_PAID = 3;

  /**
   * Purchase Option converts on the specified date and the client is charged for the new Purchase Option.
   */
  const SCHEDULE_PAID = 4;
}

?>