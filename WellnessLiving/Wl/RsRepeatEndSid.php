<?php

namespace WellnessLiving\Wl;

/**
 * Possible ways to stop repeatable events.
 */
class RsRepeatEndSid
{
  /**
   * Stop after a certain number of repeats.
   */
  const COUNT = 2;

  /**
   * Stop after a certain date. Including this date.
   */
  const DATE = 3;

  /**
   * Eternal appointments. Such appointments are scheduled for one year
   * and will be scheduled again every month.
   */
  const ETERNAL = 1;
}

?>