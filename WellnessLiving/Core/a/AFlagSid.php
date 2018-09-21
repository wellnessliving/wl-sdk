<?php

/**
 * States of the filter for the flag field.
 * For example, filter for the field "<tt>is_active</tt>" always have three states: Only active, only inactive, All.
 */
class AFlagSid
{
  /**
   * All records.
   */
  const ALL = 1;
  
  /**
   * Records with flag turned off.
   */
  const OFF = 2;
  
  /**
   * Records with flag turned on.
   */
  const ON = 3;
}