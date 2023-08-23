<?php

namespace WellnessLiving\Core\a;

/**
 * A class for filter states for flagged fields.
 * For example, the filter for the field "<tt>is_active</tt>" always has three states: Only active, Only inactive, and All.
 */
class AFlagSid
{
  /**
   * All records.
   */
  const ALL = 1;
  
  /**
   * Records with the flag turned off.
   */
  const OFF = 2;
  
  /**
   * Records with the flag turned on.
   */
  const ON = 3;
}