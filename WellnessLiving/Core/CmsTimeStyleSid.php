<?php

namespace WellnessLiving\Core;

/**
 * Set of available time styles.
 */
abstract class CmsTimeStyleSid
{
  /**
   * Written 24-hour time, including ISO 8601. Time line is 0,1,2,...12,13,14,...23
   */
  const HOUR24 = 3;

  /**
   * Common used 12 hours time style. Time line is 12am, 1am, 2am...12pm, 1pm, 2pm...11pm
   */
  const MERIDIEM_DIGITAL = 1;

  /**
   * Japanese legal convention for 12 hours time style. Time line is 00am, 1am, 2am...12am, 1pm, 2pm...11pm
   */
  const MERIDIEM_ZERO = 2;
}

?>