<?php

namespace WellnessLiving\Wl\Classes\Edit;

/**
 * The way the end of the early bird period is specified for the event.
 */
class EarlyPeriodEnum
{
  /**
   * The period ends a certain amount of time before the event starts.
   *
   * @title Before the event starts
   */
  const BEFORE = 2;

  /**
   * The period ends on the date.
   *
   * @title On a specific date
   */
  const DATE = 1;
}

?>