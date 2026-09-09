<?php

namespace WellnessLiving\Core\Amazon\CloudWatch;

/**
 * A list of units for which metrics data can be added.
 *
 * A list of units for which constants are not added yet:
 *
 *   <tt>Microseconds|Bytes|Kilobytes|Megabytes|Gigabytes|Terabytes|Bits|Kilobits|Megabits|Gigabits|Terabits|Percent|Bytes/Second|Kilobytes/Second|Megabytes/Second|Gigabytes/Second|Terabytes/Second|Bits/Second|Kilobits/Second|Megabits/Second|Gigabits/Second|Terabits/Second|Count/Second</tt>.
 */
class CloudWatchMetricUnitSid
{
  /**
   * Number of bytes.
   */
  const BYTES = 5;

  /**
   * Number of elements.
   */
  const COUNT = 1;

  /**
   * Milliseconds.
   */
  const MILLISECONDS = 2;

  /**
   * Unknown unit.
   */
  const NONE = 3;

  /**
   * Seconds.
   */
  const SECONDS = 4;
}

?>